<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/classroom' => [[['_route' => 'classroom', '_controller' => 'App\\Controller\\ClassroomController::index'], null, null, null, false, false, null]],
        '/listClassroom' => [[['_route' => 'listClassroom', '_controller' => 'App\\Controller\\ClassroomController::listClassroom'], null, null, null, false, false, null]],
        '/addClassroom' => [[['_route' => 'addClassroom', '_controller' => 'App\\Controller\\ClassroomController::addClassroom'], null, null, null, false, false, null]],
        '/listclub' => [[['_route' => 'club', '_controller' => 'App\\Controller\\ClubController::listClub'], null, null, null, false, false, null]],
        '/addclub' => [[['_route' => 'addClub', '_controller' => 'App\\Controller\\ClubController::addClub'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'student', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, false, false, null]],
        '/listStudent' => [[['_route' => 'listStudent', '_controller' => 'App\\Controller\\StudentController::listStudent'], null, null, null, false, false, null]],
        '/listStudentWithSearch' => [[['_route' => 'listStudentWithSearch', '_controller' => 'App\\Controller\\StudentController::listStudentWithSearch'], null, null, null, false, false, null]],
        '/listStudentByDate' => [[['_route' => 'listStudentByDate', '_controller' => 'App\\Controller\\StudentController::listStudentByDate'], null, null, null, false, false, null]],
        '/listStudentEnabled' => [[['_route' => 'listStudentEnabled', '_controller' => 'App\\Controller\\StudentController::listStudentEnabled'], null, null, null, false, false, null]],
        '/addStudent' => [[['_route' => 'addStudent', '_controller' => 'App\\Controller\\StudentController::addStudent'], null, null, null, false, false, null]],
        '/listStudentWithSearchDate' => [[['_route' => 'listStudentWithSearchDate', '_controller' => 'App\\Controller\\StudentController::listStudentWithSearchDate'], null, null, null, false, false, null]],
        '/searchStudentByAVG' => [[['_route' => 'searchStudentByAVG', '_controller' => 'App\\Controller\\StudentController::searchStudentByAVG'], null, null, null, false, false, null]],
        '/listStudentDontAdmitted' => [[['_route' => 'listStudentDontAdmitted', '_controller' => 'App\\Controller\\StudentController::listStudentDontAdmitted'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|Classroom/([^/]++)(*:197)'
                    .'|club/([^/]++)(*:218)'
                    .'|/([^/]++)(*:235)'
                .')'
                .'|/update(?'
                    .'|Classroom/([^/]++)(*:272)'
                    .'|club/([^/]++)(*:293)'
                    .'|/([^/]++)(*:310)'
                .')'
                .'|/show(?'
                    .'|Classroom(?'
                        .'|/([^/]++)(*:348)'
                        .'|AVG/([^/]++)(*:368)'
                    .')'
                    .'|club/([^/]++)(*:390)'
                    .'|/([^/]++)(*:407)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'deleteClassroom', '_controller' => 'App\\Controller\\ClassroomController::deleteClassroom'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'deleteClub', '_controller' => 'App\\Controller\\ClubController::deleteClub'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'deleteStudent', '_controller' => 'App\\Controller\\StudentController::deleteStudent'], ['nsc'], null, null, false, true, null]],
        272 => [[['_route' => 'updateClassroom', '_controller' => 'App\\Controller\\ClassroomController::updateClassroom'], ['id'], null, null, false, true, null]],
        293 => [[['_route' => 'updateClub', '_controller' => 'App\\Controller\\ClubController::updateClub'], ['id'], null, null, false, true, null]],
        310 => [[['_route' => 'updateStudent', '_controller' => 'App\\Controller\\StudentController::updateStudent'], ['nsc'], null, null, false, true, null]],
        348 => [[['_route' => 'showClassroom', '_controller' => 'App\\Controller\\ClassroomController::showClassroom'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'showClassroomAVG', '_controller' => 'App\\Controller\\ClassroomController::showClassroomAVG'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'showClub', '_controller' => 'App\\Controller\\ClubController::showClub'], ['id'], null, null, false, true, null]],
        407 => [
            [['_route' => 'showStudent', '_controller' => 'App\\Controller\\StudentController::showStudent'], ['nsc'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
