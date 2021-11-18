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
        '/account' => [[['_route' => 'account_index', '_controller' => 'App\\Controller\\AccountController::index'], null, ['GET' => 0], null, true, false, null]],
        '/account/new' => [[['_route' => 'account_new', '_controller' => 'App\\Controller\\AccountController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/owner' => [[['_route' => 'owner_index', '_controller' => 'App\\Controller\\OwnerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/owner/new' => [[['_route' => 'owner_new', '_controller' => 'App\\Controller\\OwnerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/account/([^/]++)(?'
                    .'|(*:188)'
                    .'|/(?'
                        .'|edit(*:204)'
                        .'|transactions(*:224)'
                    .')'
                    .'|(*:233)'
                .')'
                .'|/owner/([^/]++)(?'
                    .'|(*:260)'
                    .'|/edit(*:273)'
                    .'|(*:281)'
                .')'
                .'|/transaction/(?'
                    .'|new/owner/([^/]++)(*:324)'
                    .'|([^/]++)(?'
                        .'|(*:343)'
                        .'|/edit(*:356)'
                        .'|(*:364)'
                    .')'
                .')'
                .'|/lucky/number/(\\d+)(*:393)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        188 => [[['_route' => 'account_show', '_controller' => 'App\\Controller\\AccountController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'account_edit', '_controller' => 'App\\Controller\\AccountController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'account_transactions', '_controller' => 'App\\Controller\\AccountController::showTransactions'], ['id'], ['GET' => 0], null, false, false, null]],
        233 => [[['_route' => 'account_delete', '_controller' => 'App\\Controller\\AccountController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        260 => [[['_route' => 'owner_show', '_controller' => 'App\\Controller\\OwnerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        273 => [[['_route' => 'owner_edit', '_controller' => 'App\\Controller\\OwnerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        281 => [[['_route' => 'owner_delete', '_controller' => 'App\\Controller\\OwnerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        324 => [[['_route' => 'transaction_new_owner', '_controller' => 'App\\Controller\\TransactionController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        343 => [[['_route' => 'transaction_show', '_controller' => 'App\\Controller\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'transaction_edit', '_controller' => 'App\\Controller\\TransactionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'transaction_delete', '_controller' => 'App\\Controller\\TransactionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        393 => [
            [['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], ['number'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
