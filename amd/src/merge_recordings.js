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
        init: async function(instanceid) {
            selected = []; // Reset on initialization
            let modal;

            const trigger = $('#merge-button');
            trigger.prop('disabled', true); // Disable the button initially

            try {
                const [title, mergeText, successMessage] = await Promise.all([
                    str.get_string('merge_recordings', 'mod_plugnmeet'),
                    str.get_string('merge', 'mod_plugnmeet'),
                    str.get_string('merge_request_success', 'mod_plugnmeet')
                ]);

                modal = await ModalFactory.create({
                    type: ModalFactory.types.DEFAULT,
                    title: title,
                });

                const footer = modal.getRoot().find('.modal-footer');
                const mergeButton = $('<button type="button" class="btn btn-primary" id="merge-button-modal">' +
                    mergeText + '</button>');
                footer.append(mergeButton);

                mergeButton.on('click', async function() {
                    if ($(this).prop('disabled')) {
                        return;
                    }

                    try {
                        const response = await ajax.call([{
                            methodname: 'mod_plugnmeet_merge_recordings',
                            args: {
                                instanceid: instanceid,
                                recordids: selected.join(','),
                            }
                        }])[0];

                        if (response.status) {
                            const html = await renderModalBody({success: successMessage});
                            modal.setBody(html);
                            modal.getRoot().find('#merge-button-modal').hide();
                            // Uncheck all checkboxes.
                            $('.generaltable input[type="checkbox"]:checked').prop('checked', false);
                            // Clear the selected array.
                            selected = [];
                            // Disable the merge button.
                            trigger.prop('disabled', true);
                        } else {
                            const html = await renderModalBody({error: response.error});
                            modal.setBody(html);
                            modal.getRoot().find('#merge-button-modal').hide();
                        }
                    } catch (ex) {
                        const html = await renderModalBody({error: ex.message});
                        modal.setBody(html);
                        modal.getRoot().find('#merge-button-modal').hide();
                    }
                });
            } catch (ex) {
                await notification.exception(ex);
            }

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
            trigger.on('click', async function() {
                if (modal) {
                    const context = {
                        showinitial: true,
                        hasrecordings: selected.length >= 2,
                        recordings: selected
                    };
                    try {
                        const html = await renderModalBody(context);
                        modal.setBody(html);
                        const mergeButton = modal.getRoot().find('#merge-button-modal');
                        mergeButton.prop('disabled', selected.length < 2);
                        mergeButton.show();
                        modal.show();
                    } catch (ex) {
                        await notification.exception(ex);
                    }
                }
            });
        }
    };
});
