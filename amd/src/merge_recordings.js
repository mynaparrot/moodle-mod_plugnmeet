define([
    'jquery',
    'core/ajax',
    'core/notification',
    'core/modal_factory',
    'core/templates',
    'core/str'
], function($, ajax, notification, ModalFactory, templates, str) {
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
            let mergeText;
            let successMessage;

            const stringPromises = [
                str.get_string('merge_recordings', 'mod_plugnmeet'),
                str.get_string('merge', 'mod_plugnmeet'),
                str.get_string('merge_request_success', 'mod_plugnmeet')
            ];

            Promise.all(stringPromises).then(([title, resolvedMergeText, resolvedSuccessMessage]) => {
                mergeText = resolvedMergeText;
                successMessage = resolvedSuccessMessage;
                return ModalFactory.create({
                    type: ModalFactory.types.DEFAULT,
                    title: title,
                });
            }).then(instance => {
                modal = instance;
                const footer = modal.getRoot().find('.modal-footer');
                const mergeButton = $('<button type="button" class="btn btn-primary" id="merge-button-modal">' +
                    mergeText + '</button>');
                footer.append(mergeButton);

                mergeButton.on('click', function() {
                    if ($(this).prop('disabled')) {
                        return;
                    }

                    const ajaxPromise = ajax.call([{
                        methodname: 'mod_plugnmeet_merge_recordings',
                        args: {
                            instanceid: instanceid,
                            record_ids: selected.join(','),
                        }
                    }])[0];

                    ajaxPromise.then(response => {
                        if (response.status) {
                            renderModalBody({success: successMessage, showinitial: false}).then(html => {
                                modal.setBody(html);
                            });
                            // Uncheck all checkboxes.
                            $('.generaltable input[type="checkbox"]:checked').prop('checked', false);
                            // Clear the selected array.
                            selected = [];
                            // Disable the merge button.
                            trigger.prop('disabled', true);
                        } else {
                            return renderModalBody({error: response.error}).then(html => {
                                modal.setBody(html);
                                modal.getRoot().find('#merge-button-modal').hide();
                            });
                        }
                    }).catch(ex => {
                        return renderModalBody({error: ex.message}).then(html => {
                            modal.setBody(html);
                            modal.getRoot().find('#merge-button-modal').hide();
                        });
                    });
                });
            }).catch(notification.exception);

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
                        showinitial: true,
                        hasrecordings: selected.length >= 2,
                        recordings: selected
                    };
                    renderModalBody(context).then(html => {
                        modal.setBody(html);
                        const mergeButton = modal.getRoot().find('#merge-button-modal');
                        mergeButton.prop('disabled', selected.length < 2);
                        mergeButton.show();
                        modal.show();
                    }).catch(notification.exception);
                }
            });
        }
    };
});
