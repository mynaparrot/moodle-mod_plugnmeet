define(['jquery', 'core/yui', 'core/notification', 'core/ajax', 'core/str'], function($, Y, notification, ajax, str) {
    "use strict";

    return {
        init: function(buttonSelector) {
            const button = $(buttonSelector);
            let fpoptions;

            try {
                fpoptions = JSON.parse(button.attr('data-fp-options'));
            } catch (e) {
                notification.addNotification({
                    message: 'Error initializing file picker. See browser console for details.',
                    type: 'error'
                });
                return;
            }

            button.on('click', function(e) {
                e.preventDefault();
                const originaltext = button.text();

                // The filepicker is a YUI module, so we need to use Y.use to load it.
                Y.use('moodle-core-filepicker', function(Y) {
                    // Set the callback function for when a file is selected.
                    fpoptions.formcallback = async function(fileinfo) {
                        button.attr('disabled', true);
                        const uploadingFile = await str.get_string('uploading_file', 'mod_plugnmeet');
                        button.text(uploadingFile);

                        ajax.call([{
                            methodname: 'mod_plugnmeet_upload_whiteboard_file',
                            args: {
                                cmid: fpoptions.cmid,
                                itemid: fileinfo.itemid,
                                filename: fileinfo.file,
                                contextid: fileinfo.contextid,
                            },
                            done: async function(response) {
                                const msg = await str.get_string('upload_to_whiteboard_success', 'mod_plugnmeet');

                                await notification.addNotification({
                                    message: response.status ? msg : response.msg,
                                    type: response.status ? 'success' : 'error'
                                });
                                button.attr('disabled', false);
                                button.text(originaltext);
                            },
                            fail: async function(ex) {
                                await notification.exception(ex);
                                button.attr('disabled', false);
                                button.text(originaltext);
                            }
                        }]);
                    };

                    // Open the filepicker.
                    M.core_filepicker.show(Y, fpoptions);
                });
            });
        }
    };
});
