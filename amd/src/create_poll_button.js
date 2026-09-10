// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Create a plugNmeet poll from a Moodle quiz or question bank question.
 *
 * @module     mod_plugnmeet/create_poll_button
 * @author     Jibon L. Costa <jibon@mynaparrot.com>
 * @copyright  2026 MynaParrot
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define(['jquery', 'core/ajax', 'core/notification', 'core/modal_factory', 'core/modal_events', 'core/str'],
    function($, Ajax, Notification, ModalFactory, ModalEvents, Str) {
    "use strict";

    const SELECTORS = {
        source: '#create_poll_source',
        quiz: '#create_poll_quiz',
        category: '#create_poll_category',
        question: '#create_poll_question',
        isQuiz: '#create_poll_is_quiz',
        isAnonymous: '#create_poll_is_anonymous',
        duration: '#create_poll_duration',
        submit: '#create_poll_submit',
        success: '#create_poll_success',
    };

    const LOADING_OPTION = '<option value="">...</option>';

    // Values of the source dropdown. The web services expect the underscore
    // form of the question bank source.
    const SOURCE_QUIZ = 'quiz';
    const SOURCE_QUESTIONBANK = 'questionbank';
    const WS_SOURCE_QUESTIONBANK = 'question_bank';

    return {
        /**
         * Initialize the create poll button.
         *
         * @param {Object} params The parameters (cmid).
         */
        init: function(params) {
            const cmid = params.cmid;
            let modal = null;
            let strings = {};

            const callService = function(methodname, args) {
                return Ajax.call([{
                    methodname: methodname,
                    args: args
                }])[0];
            };

            const escapeHtml = function(text) {
                return $('<div>').text(text).html();
            };

            const showNotice = function(message, type) {
                Notification.addNotification({
                    message: message,
                    type: type,
                });
            };

            const buildBody = function() {
                return '<form id="create_poll_form">' +
                    '<div id="create_poll_success" class="alert alert-success" style="display: none;" role="alert"></div>' +
                    '<div class="form-group">' +
                        '<label for="create_poll_source">' + strings.selectSource + '</label>' +
                        '<select id="create_poll_source" class="custom-select form-select">' +
                            '<option value="' + SOURCE_QUIZ + '">' + strings.sourceQuiz + '</option>' +
                            '<option value="' + SOURCE_QUESTIONBANK + '">' + strings.sourceQuestionBank + '</option>' +
                        '</select>' +
                    '</div>' +
                    '<div class="form-group">' +
                        '<label for="create_poll_quiz">' + strings.selectQuiz + '</label>' +
                        '<select id="create_poll_quiz" class="custom-select form-select" disabled="disabled">' +
                            LOADING_OPTION +
                        '</select>' +
                    '</div>' +
                    '<div class="form-group" style="display: none;">' +
                        '<label for="create_poll_category">' + strings.selectCategory + '</label>' +
                        '<select id="create_poll_category" class="custom-select form-select" disabled="disabled">' +
                            LOADING_OPTION +
                        '</select>' +
                    '</div>' +
                    '<div class="form-group">' +
                        '<label for="create_poll_question">' + strings.selectQuestion + '</label>' +
                        '<select id="create_poll_question" class="custom-select form-select" disabled="disabled">' +
                            LOADING_OPTION +
                        '</select>' +
                    '</div>' +
                    '<div class="form-group">' +
                        '<div class="custom-control custom-checkbox form-check">' +
                            '<input type="checkbox" id="create_poll_is_quiz" class="custom-control-input form-check-input">' +
                            '<label for="create_poll_is_quiz" class="custom-control-label form-check-label">' +
                                strings.pollIsQuiz + '</label>' +
                        '</div>' +
                        '<div class="custom-control custom-checkbox form-check">' +
                            '<input type="checkbox" id="create_poll_is_anonymous" class="custom-control-input form-check-input">' +
                            '<label for="create_poll_is_anonymous" class="custom-control-label form-check-label">' +
                                strings.pollIsAnonymous + '</label>' +
                        '</div>' +
                    '</div>' +
                    '<div class="form-group">' +
                        '<label for="create_poll_duration">' + strings.pollDuration + '</label>' +
                        '<input type="number" id="create_poll_duration" class="form-control" value="0"' +
                            ' min="0" max="3600" step="30">' +
                    '</div>' +
                    '<button type="button" id="create_poll_submit" class="btn btn-primary" disabled="disabled">' +
                        strings.create + '</button>' +
                '</form>';
            };

            const populateQuizSelect = function() {
                const quizSelect = $(SELECTORS.quiz);
                quizSelect.html(LOADING_OPTION).attr('disabled', true);
                $(SELECTORS.question).html(LOADING_OPTION).attr('disabled', true);
                $(SELECTORS.submit).attr('disabled', true);

                callService('mod_plugnmeet_get_course_quizzes', {cmid: cmid}).done(function(quizzes) {
                    if (!quizzes.length) {
                        quizSelect.html('<option value="">' + strings.noQuizzesFound + '</option>');
                        return;
                    }
                    quizSelect.html(quizzes.map(function(quiz) {
                        return '<option value="' + quiz.cmid + '">' + escapeHtml(quiz.name) + '</option>';
                    }).join(''));
                    quizSelect.attr('disabled', false);

                    // If only one quiz, auto-load its questions.
                    if (quizzes.length === 1) {
                        loadQuestions(SOURCE_QUIZ, quizzes[0].cmid);
                    }
                }).fail(Notification.exception);
            };

            const populateCategorySelect = function() {
                const categorySelect = $(SELECTORS.category);
                categorySelect.html(LOADING_OPTION).attr('disabled', true);
                $(SELECTORS.question).html(LOADING_OPTION).attr('disabled', true);
                $(SELECTORS.submit).attr('disabled', true);

                callService('mod_plugnmeet_get_question_categories', {cmid: cmid}).done(function(categories) {
                    if (!categories.length) {
                        categorySelect.html('<option value="">' + strings.noCategoriesFound + '</option>');
                        return;
                    }
                    categorySelect.html(categories.map(function(category) {
                        return '<option value="' + category.id + '">' + escapeHtml(category.name) + '</option>';
                    }).join(''));
                    categorySelect.attr('disabled', false);

                    // If only one category, auto-load its questions.
                    if (categories.length === 1) {
                        loadQuestions(SOURCE_QUESTIONBANK, categories[0].id);
                    }
                }).fail(Notification.exception);
            };

            // Show the list matching the selected source and load it.
            const showSourceGroup = function(sourceType) {
                const quizGroup = $(SELECTORS.quiz).closest('.form-group');
                const categoryGroup = $(SELECTORS.category).closest('.form-group');
                if (sourceType === SOURCE_QUESTIONBANK) {
                    quizGroup.hide();
                    categoryGroup.show();
                    populateCategorySelect();
                } else {
                    categoryGroup.hide();
                    quizGroup.show();
                    populateQuizSelect();
                }
            };

            const loadQuestions = function(sourceType, sourceId) {
                const questionSelect = $(SELECTORS.question);
                questionSelect.html(LOADING_OPTION).attr('disabled', true);
                $(SELECTORS.submit).attr('disabled', true);

                const args = {cmid: cmid};
                if (sourceType === SOURCE_QUESTIONBANK) {
                    args.source = WS_SOURCE_QUESTIONBANK;
                    args.categoryid = sourceId;
                } else {
                    args.source = SOURCE_QUIZ;
                    args.quizcmid = sourceId;
                }

                callService('mod_plugnmeet_get_quiz_questions', args).done(function(questions) {
                    if (!questions.length) {
                        questionSelect.html('<option value="">' + strings.noValidQuestions + '</option>');
                        return;
                    }
                    questionSelect.html(questions.map(function(question) {
                        return '<option value="' + question.questionid + '">' +
                            escapeHtml(question.name) + ' (' + escapeHtml(question.qtype) + ')</option>';
                    }).join(''));
                    questionSelect.attr('disabled', false);
                    $(SELECTORS.submit).attr('disabled', false);
                }).fail(Notification.exception);
            };

            const submitPoll = function() {
                const sourceType = $(SELECTORS.source).val() || SOURCE_QUIZ;
                const questionid = parseInt($(SELECTORS.question).val(), 10) || 0;
                if (!questionid) {
                    return;
                }

                const args = {
                    cmid: cmid,
                    questionid: questionid,
                };
                // Web service parameter names use snake_case, so use bracket notation
                // to avoid ESLint camelcase warnings.
                args['is_quiz'] = $(SELECTORS.isQuiz).is(':checked');
                args['is_anonymous'] = $(SELECTORS.isAnonymous).is(':checked');

                // The id of the selected question source.
                let sourceId;
                if (sourceType === SOURCE_QUESTIONBANK) {
                    sourceId = parseInt($(SELECTORS.category).val(), 10) || 0;
                    args.source = WS_SOURCE_QUESTIONBANK;
                    args.categoryid = sourceId;
                } else {
                    sourceId = parseInt($(SELECTORS.quiz).val(), 10) || 0;
                    args.source = SOURCE_QUIZ;
                    args.quizcmid = sourceId;
                }
                if (!sourceId) {
                    return;
                }

                // The plugNmeet server accepts at most one hour as duration.
                args.duration = Math.min(Math.max(parseInt($(SELECTORS.duration).val(), 10) || 0, 0), 3600);

                $(SELECTORS.submit).attr('disabled', true);

                callService('mod_plugnmeet_create_poll', args).done(function(response) {
                    if (response.status) {
                        showNotice(strings.pollCreated, 'success');
                        // Keep the modal open: confirm inside the modal and let
                        // the user create another poll from a different question.
                        $(SELECTORS.success).text(strings.pollCreated).show();
                        $(SELECTORS.isQuiz).prop('checked', false);
                        $(SELECTORS.isAnonymous).prop('checked', false);
                        // Reload the questions of the same source so another one
                        // can be picked.
                        loadQuestions(sourceType, sourceId);
                        // Make sure the submit button stays usable even if the
                        // question reload fails.
                        $(SELECTORS.submit).attr('disabled', false);
                        // Scroll back to the top so the message is visible.
                        modal.getRoot().find('.modal-body').scrollTop(0);
                    } else {
                        Str.get_string('poll_creation_failed', 'mod_plugnmeet', response.msg).done(function(msg) {
                            showNotice(msg, 'error');
                        }).fail(Notification.exception);
                        $(SELECTORS.submit).attr('disabled', false);
                    }
                }).fail(Notification.exception);
            };

            const openModal = function() {
                if (modal) {
                    modal.show();
                    return;
                }

                ModalFactory.create({
                    type: ModalFactory.types.DEFAULT,
                    title: strings.title,
                    body: buildBody(),
                }).then(function(m) {
                    modal = m;

                    // Load (or refresh) the list of the current source every
                    // time the modal is shown.
                    modal.getRoot().on(ModalEvents.shown, function() {
                        // Hide any stale success message from a previous run.
                        $(SELECTORS.success).hide();
                        showSourceGroup($(SELECTORS.source).val() || SOURCE_QUIZ);
                    });

                    // Switch between the quiz and the question bank sources.
                    modal.getRoot().on('change', SELECTORS.source, function() {
                        showSourceGroup($(this).val() || SOURCE_QUIZ);
                    });

                    // Load the questions of the selected quiz.
                    modal.getRoot().on('change', SELECTORS.quiz, function() {
                        const quizcmid = parseInt($(this).val(), 10) || 0;
                        if (quizcmid) {
                            loadQuestions(SOURCE_QUIZ, quizcmid);
                        }
                    });

                    // Load the questions of the selected question category.
                    modal.getRoot().on('change', SELECTORS.category, function() {
                        const categoryId = parseInt($(this).val(), 10) || 0;
                        if (categoryId) {
                            loadQuestions(SOURCE_QUESTIONBANK, categoryId);
                        }
                    });

                    modal.getRoot().on('click', SELECTORS.submit, function(e) {
                        e.preventDefault();
                        submitPoll();
                    });

                    modal.show();
                    return m;
                }).catch(Notification.exception);
            };

            Str.get_strings([
                {key: 'create_poll_from_quiz', component: 'mod_plugnmeet'},
                {key: 'select_source', component: 'mod_plugnmeet'},
                {key: 'source_quiz', component: 'mod_plugnmeet'},
                {key: 'source_question_bank', component: 'mod_plugnmeet'},
                {key: 'select_category', component: 'mod_plugnmeet'},
                {key: 'select_quiz', component: 'mod_plugnmeet'},
                {key: 'select_question', component: 'mod_plugnmeet'},
                {key: 'poll_is_quiz', component: 'mod_plugnmeet'},
                {key: 'poll_is_anonymous', component: 'mod_plugnmeet'},
                {key: 'poll_duration', component: 'mod_plugnmeet'},
                {key: 'no_valid_questions', component: 'mod_plugnmeet'},
                {key: 'no_quizzes_found', component: 'mod_plugnmeet'},
                {key: 'no_categories_found', component: 'mod_plugnmeet'},
                {key: 'poll_created', component: 'mod_plugnmeet'},
                {key: 'create_poll', component: 'mod_plugnmeet'},
            ]).then(function(loaded) {
                strings = {
                    title: loaded[0],
                    selectSource: loaded[1],
                    sourceQuiz: loaded[2],
                    sourceQuestionBank: loaded[3],
                    selectCategory: loaded[4],
                    selectQuiz: loaded[5],
                    selectQuestion: loaded[6],
                    pollIsQuiz: loaded[7],
                    pollIsAnonymous: loaded[8],
                    pollDuration: loaded[9],
                    noValidQuestions: loaded[10],
                    noQuizzesFound: loaded[11],
                    noCategoriesFound: loaded[12],
                    pollCreated: loaded[13],
                    create: loaded[14],
                };

                $('#create_poll_button').on('click', function(e) {
                    e.preventDefault();
                    openModal();
                });

                return strings;
            }).fail(Notification.exception);
        }
    };
});
