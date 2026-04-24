define(['jquery', 'core/ajax', 'core/notification', 'core/str'], function($, ajax, notification, str) {

    const handleJoin = function(e, options, strings) {
        e.preventDefault();
        const joinButton = $('#join_button');
        joinButton.attr('disabled', true);

        let args = {
            cmid: options.cmid
        };

        if (options.is_guest) {
            const guestName = $('#guestname').val();
            if (!guestName) {
                notification.alert(strings.error, strings.enterDisplayName);
                joinButton.attr('disabled', false);
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
                joinButton.attr('disabled', false);
                if (!data.status) {
                    notification.alert(strings.error, data.msg);
                } else {
                    window.open(data.url, '_blank');
                }
            },
            fail: function(ex) {
                notification.exception(ex);
                joinButton.attr('disabled', false);
            },
        }]);
    };

    return {
        init: function(options) {
            const stringKeys = [
                {key: 'enter_display_name', component: 'mod_plugnmeet'},
                {key: 'error', component: 'core'},
            ];

            str.get_strings(stringKeys).done(function(strings) {
                const localizedStrings = {
                    enterDisplayName: strings[0],
                    error: strings[1],
                };

                if (options.is_guest) {
                    $('#guest_join_form').on('submit', function(e) {
                        handleJoin(e, options, localizedStrings);
                    });
                } else {
                    $('#join_button').on('click', function(e) {
                        handleJoin(e, options, localizedStrings);
                    });
                }
            });
        }
    };
});
