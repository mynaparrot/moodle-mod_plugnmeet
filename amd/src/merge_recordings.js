define(['jquery', 'core/ajax', 'core/notification', 'core/modal_factory', 'core/templates', 'core/str'],
    function($, ajax, notification, ModalFactory, templates, str) {
    let selected = []; // Array to store record_ids in selection order

    /**
     * Renders the modal body content using a template.
     *
     * @param {object} context The context data for the template.
     * @return {Promise} A promise that resolves with the rendered HTML.
     */
    function renderModalBody(context) {
        return templates.render('mod_plugnmeet/merge_recordings_modal_body', context);
    }

    return {
        init: function(instanceid) {
            selected = []; // Reset on initialization

            const trigger = $('#merge-button');
            trigger.prop('disabled', true); // Disable the button initially

            let modal;
            // Create the modal instance once.
            str.get_string('merge_recordings', 'mod_plugnmeet').then(function(title) {
                ModalFactory.create({
                    type: ModalFactory.types.DEFAULT,
                    title: title,
                }).done(function(instance) {
                    modal = instance;
                    // Add a custom merge button to the footer.
                    const footer = modal.getRoot().find('.modal-footer');
                    str.get_string('merge', 'mod_plugnmeet').then(function(mergeText) {
                        const mergeButton = $('<button type="button" class="btn btn-primary" id="merge-button-modal">'
                            + mergeText + '</button>');
                        footer.append(mergeButton);

                        // Define the click handler for the modal's merge button.
                        mergeButton.on('click', function() {
                            if ($(this).prop('disabled')) {
                                return;
                            }

                            const promises = ajax.call([{
                                methodname: 'mod_plugnmeet_merge_recordings',
                                args: {
                                    instanceid: instanceid,
                                    record_ids: selected.join(','),
                                }
                            }]);

                            promises[0].done(async function(response) {
                                if (response.status) {
                                    modal.hide();
                                    const message = await str.get_string('merge_request_success', 'mod_plugnmeet');
                                    await notification.addNotification({
                                        message: message,
                                        type: 'success'
                                    });
                                    const currenturl = window.location.href;
                                    setTimeout(() => {
                                        window.location.href = currenturl;
                                    }, 3000);
                                } else {
                                    renderModalBody({error: response.error}).then(function(html) {
                                        modal.setBody(html);
                                    });
                                    modal.getRoot().find('#merge-button-modal').hide();
                                }
                            }).fail(function(ex) {
                                renderModalBody({error: ex.message}).then(function(html) {
                                    modal.setBody(html);
                                });
                                modal.getRoot().find('#merge-button-modal').hide();
                            });
                        });
                    });
                });
            });

            // Listen for changes on checkboxes to update the selection.
            $('.generaltable').on('change', 'input[type="checkbox"]', function() {
                const recordId = $(this).val();
                if ($(this).is(':checked')) {
                    if (selected.indexOf(recordId) === -1) {
                        selected.push(recordId);
                    }
                } else {
                    const index = selected.indexOf(recordId);
                    if (index > -1) {
                        selected.splice(index, 1);
                    }
                }
                // Enable or disable the main "Merge Recordings" button.
                trigger.prop('disabled', selected.length < 2);
            });

            // Define the click handler for the main trigger button.
            trigger.on('click', function() {
                if (modal) {
                    const context = {
                        hasrecordings: selected.length >= 2,
                        recordings: selected
                    };
                    renderModalBody(context).then(function(html) {
                        modal.setBody(html);
                    });

                    const mergeButton = modal.getRoot().find('#merge-button-modal');
                    mergeButton.prop('disabled', selected.length < 2);
                    mergeButton.show();
                    modal.show();
                }
            });
        }
    };
});
