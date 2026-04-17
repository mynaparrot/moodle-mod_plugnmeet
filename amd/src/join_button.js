define(['jquery', 'core/ajax', 'core/notification'], function($, ajax, notification) {
    return {
        init: function(options) {
            $('#join_button').on('click', function(e) {
                e.preventDefault();
                const that = $(this);
                that.attr('disabled', true);

                ajax.call([{
                    methodname: 'mod_plugnmeet_get_join_token',
                    args: {
                        cmid: options.cmid
                    },
                    done: function(data) {
                        that.attr('disabled', false);
                        if (!data.status) {
                            notification.alert("Error", data.msg);
                        } else {
                            window.open(data.url, '_blank');
                        }
                    },
                    fail: function(ex) {
                        notification.exception(ex);
                        that.attr('disabled', false);
                    },
                }]);
            });
        }
    };
});
