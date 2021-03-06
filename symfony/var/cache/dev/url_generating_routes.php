<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'account_index' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/account/']], [], []],
    'account_new' => [[], ['_controller' => 'App\\Controller\\AccountController::new'], [], [['text', '/account/new']], [], []],
    'account_show' => [['id'], ['_controller' => 'App\\Controller\\AccountController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/account']], [], []],
    'account_edit' => [['id'], ['_controller' => 'App\\Controller\\AccountController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/account']], [], []],
    'account_delete' => [['id'], ['_controller' => 'App\\Controller\\AccountController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/account']], [], []],
    'account_transactions' => [['id'], ['_controller' => 'App\\Controller\\AccountController::showTransactions'], [], [['text', '/transactions'], ['variable', '/', '[^/]++', 'id', true], ['text', '/account']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], []],
    'owner_index' => [[], ['_controller' => 'App\\Controller\\OwnerController::index'], [], [['text', '/owner/']], [], []],
    'owner_new' => [[], ['_controller' => 'App\\Controller\\OwnerController::new'], [], [['text', '/owner/new']], [], []],
    'owner_show' => [['id'], ['_controller' => 'App\\Controller\\OwnerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/owner']], [], []],
    'owner_edit' => [['id'], ['_controller' => 'App\\Controller\\OwnerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/owner']], [], []],
    'owner_delete' => [['id'], ['_controller' => 'App\\Controller\\OwnerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/owner']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'transaction_new_owner' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/transaction/new/owner']], [], []],
    'transaction_show' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/transaction']], [], []],
    'transaction_edit' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/transaction']], [], []],
    'transaction_delete' => [['id'], ['_controller' => 'App\\Controller\\TransactionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/transaction']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_lucky_number' => [['number'], ['_controller' => 'App\\Controller\\LuckyController::number'], ['number' => '\\d+'], [['variable', '/', '\\d+', 'number', true], ['text', '/lucky/number']], [], []],
];
