define(['jquery', 'core/ajax', 'core/notification', 'core/templates'], function($, ajax, notification, templates) {
    const perpage = 25;
    const pollingInterval = 2 * 60 * 1000; // 2 minutes
    let currentPage = 0;

    /**
     * Get the report data from the external service.
     * @param {number} page
     * @returns {Promise}
     */
    const getReport = function(page) {
        return ajax.call([{
            methodname: 'mod_plugnmeet_get_active_rooms_report',
            args: {
                page: page,
                perpage: perpage
            }
        }])[0];
    };

    /**
     * Render the pagination controls.
     * @param {number} total
     * @param {number} pageNumber
     */
    const renderPagination = function(total, pageNumber) {
        const totalPages = Math.ceil(total / perpage);
        let html = '<nav aria-label="Page navigation"><ul class="pagination justify-content-center mt-4">';

        for (let i = 0; i < totalPages; i++) {
            const activeClass = i === pageNumber ? 'active' : '';
            html += `<li class="page-item ${activeClass}"><a class="page-link" href="#" data-page="${i}">${i + 1}</a></li>`;
        }

        html += '</ul></nav>';
        $('#active_rooms_pagination').html(html);

        $('#active_rooms_pagination .page-link').on('click', function(e) {
            e.preventDefault();
            currentPage = $(this).data('page');
            renderReport(currentPage);
        });
    };

    /**
     * Render the report for a specific page.
     * @param {number} page
     * @param {boolean} background If true, don't show the initial loading spinner.
     */
    const renderReport = function(page, background = false) {
        const container = $('#active_rooms_report_container');

        if (!background) {
            templates.render('mod_plugnmeet/active_rooms_report', {loading: true}).done(function(html) {
                container.replaceWith(html);
            }).fail(notification.exception);
        }

        getReport(page).done(function(data) {
            templates.render('mod_plugnmeet/active_rooms_report', data).done(function(reportHtml) {
                // Since we might have replaced the container with loading, find it again.
                $('#active_rooms_report_container').replaceWith(reportHtml);

                if (data.status && data.summary.total_rooms > perpage) {
                    renderPagination(data.summary.total_rooms, page);
                }
            }).fail(notification.exception);
        }).fail(notification.exception);
    };

    /**
     * Periodic poll for report updates.
     */
    const pollForReport = function() {
        setTimeout(function() {
            renderReport(currentPage, true);
            pollForReport();
        }, pollingInterval);
    };

    return {
        init: function() {
            renderReport(0);
            pollForReport();
        }
    };
});
