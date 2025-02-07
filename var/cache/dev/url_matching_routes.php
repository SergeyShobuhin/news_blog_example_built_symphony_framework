<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/blog' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\Admin\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/blog/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\Admin\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/blog' => [[['_route' => 'app_user_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/blog/new' => [[['_route' => 'app_user_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_homePage', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/blogs' => [[['_route' => 'app_homePageBlogs', '_controller' => 'App\\Controller\\HomePageController::indexBlogs'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/login/redirect' => [[['_route' => 'app_login_redirect', '_controller' => 'App\\Controller\\LoginController::redirectLogin'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|blog/([^/]++)(?'
                        .'|/edit(*:233)'
                        .'|(*:241)'
                    .')'
                    .'|category/([^/]++)(?'
                        .'|(*:270)'
                        .'|/edit(*:283)'
                        .'|(*:291)'
                    .')'
                .')'
                .'|/user/blog/([^/]++)(?'
                    .'|/(?'
                        .'|show(*:331)'
                        .'|edit(*:343)'
                        .'|comment/(?'
                            .'|add(*:365)'
                            .'|([^/]++)/reply(*:387)'
                        .')'
                    .')'
                    .'|(*:397)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\Admin\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\Admin\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        331 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_user_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [[['_route' => 'app_comment_add', '_controller' => 'App\\Controller\\CommentController::add'], ['id'], ['POST' => 0], null, false, false, null]],
        387 => [[['_route' => 'app_comment_reply', '_controller' => 'App\\Controller\\CommentController::reply'], ['id', 'parentId'], ['POST' => 0], null, false, false, null]],
        397 => [
            [['_route' => 'app_user_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
