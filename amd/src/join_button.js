define(['jquery', 'core/ajax', 'core/notification'], function($, ajax, notification) {
    return {
        init: function(options) {
            $('#join_button').on('click', function(e) {
                e.preventDefault();
                const that = $(this);
                that.attr('disabled', true);

                let args = {
                    cmid: options.cmid
                };

                if (options.is_guest) {
                    const guestName = $('#guestname').val();
                    if (!guestName) {
                        notification.alert("Error", "Please enter your name.");
                        that.attr('disabled', false);
                        return;
                    }
                    args.guestname = guestName;

                    // Parse expiry and sig from URL for guests.
                    const urlParams = new URLSearchParams(window.location.search);
                    args.expiry = parseInt(urlParams.get('expiry')) || 0;
                    args.sig = urlParams.get('sig') || '';
                }

                ajax.call([{
                    methodname: 'mod_plugnmeet_get_join_token',
                    args: args,
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
