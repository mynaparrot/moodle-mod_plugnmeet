define(['jquery', 'core/ajax', 'core/notification', 'core/templates'], function($, ajax, notification, templates) {
    "use strict";

    const pollingInterval = 60 * 1000; // 1 minute

    const getRoomInfo = function(cmid) {
        return ajax.call([{
            methodname: 'mod_plugnmeet_get_active_room_info',
            args: {
                cmid: cmid
            }
        }])[0];
    };

    const renderRoomInfo = function(data, canManage) {
        const context = {
            // eslint-disable-next-line camelcase
            room_info: data.room_info,
            // eslint-disable-next-line camelcase
            participants_info: data.participants_info,
            // eslint-disable-next-line camelcase
            has_participants: data.participants_info && data.participants_info.length > 0,
        };
        templates.render('mod_plugnmeet/room_info_tables', context).done(function(html) {
            $('#live_session_info').html(html);
            if (canManage && data.room_info) {
                $('#end_room_button').show();
            } else {
                $('#end_room_button').hide();
            }
        });
    };

    const pollForRoomInfo = function(cmid, canview) {
        if (!canview) {
            return;
        }
        getRoomInfo(cmid).done(function(data) {
            if (data.room_info) {
                renderRoomInfo(data, canview);
            } else {
                $('#live_session_info').html('');
                $('#end_room_button').hide();
            }
        }).fail(notification.exception);

        setTimeout(function() {
            pollForRoomInfo(cmid, canview);
        }, pollingInterval);
    };

    return {
        init: function(params) {
            const p = new URLSearchParams(document.location.search);
            if (p.has("returned", "true")) {
                // This will only work if link opened with window.open()
                window.close();
            }
            pollForRoomInfo(params.cmid, params.can_view);
        }
    };
});
