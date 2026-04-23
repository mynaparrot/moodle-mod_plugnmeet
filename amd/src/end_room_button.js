define(['jquery', 'core/ajax', 'core/notification'], function($, ajax, notification) {
    return {
        init: function(options) {
            $('#end_room_button').on('click', function(e) {
                e.preventDefault();
                const that = $(this);
                that.attr('disabled', true);

                ajax.call([{
                    methodname: 'mod_plugnmeet_end_room',
                    args: {
                        cmid: options.cmid
                    },
                    done: function(response) {
                        if (response.status) {
                            // Refresh the page to reflect the change
                            location.reload();
                        } else {
                            notification.addNotification({
                                message: response.msg,
                                type: "info"
                            });
                            that.attr('disabled', false);
                        }
                    },
                    fail: function(ex) {
                        notification.exception(ex);
                        that.attr('disabled', false);
                    }
                }]);
            });
        }
    };
});
