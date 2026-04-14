<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/hello/world' => [[['_route' => 'app_hello_world', '_controller' => 'App\\Controller\\HelloWorldController::index'], null, null, null, false, false, null]],
        '/mail' => [[['_route' => 'app_test_mail', '_controller' => 'App\\Controller\\HelloWorldController::sendMail'], null, null, null, false, false, null]],
        '/picture' => [[['_route' => 'app_picture_index', '_controller' => 'App\\Controller\\PictureController::index'], null, null, null, true, false, null]],
        '/picture/create' => [[['_route' => 'app_picture_create', '_controller' => 'App\\Controller\\PictureController::create'], null, null, null, false, false, null]],
        '/pokemon' => [[['_route' => 'app_pokemon_index', '_controller' => 'App\\Controller\\PokemonController::index'], null, null, null, true, false, null]],
        '/pokemon/create' => [[['_route' => 'app_pokemon_create', '_controller' => 'App\\Controller\\PokemonController::create'], null, null, null, false, false, null]],
        '/type' => [[['_route' => 'app_type', '_controller' => 'App\\Controller\\PokemonTypeController::index'], null, null, null, false, false, null]],
        '/type/create' => [[['_route' => 'app_type_create', '_controller' => 'App\\Controller\\PokemonTypeController::handleCreate'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/create' => [[['_route' => 'app_user_create', '_controller' => 'App\\Controller\\UserController::create'], null, null, null, false, false, null]],
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
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:256)'
                    .'|([A-z0-9_-]*)/(.+)(*:282)'
                .')'
                .'|/autocomplete/([^/]++)(*:313)'
                .'|/p(?'
                    .'|icture/(?'
                        .'|create/pokemon/(\\d+)(*:356)'
                        .'|(\\d+)/update(*:376)'
                        .'|(\\d+)/delete(*:396)'
                    .')'
                    .'|okemon/(?'
                        .'|(\\d+)(*:420)'
                        .'|(\\d+)/update(*:440)'
                        .'|(\\d+)/delete(*:460)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:506)'
                .'|/user/(?'
                    .'|(\\d+)(*:528)'
                    .'|(\\d+)/roles(*:547)'
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
        256 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        313 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        356 => [[['_route' => 'app_picture_create_pokemon', '_controller' => 'App\\Controller\\PictureController::createForPokemon'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'app_picture_update', '_controller' => 'App\\Controller\\PictureController::update'], ['id'], null, null, false, false, null]],
        396 => [[['_route' => 'app_picture_delete', '_controller' => 'App\\Controller\\PictureController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        420 => [[['_route' => 'app_pokemon_show', '_controller' => 'App\\Controller\\PokemonController::show'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'app_pokemon_update', '_controller' => 'App\\Controller\\PokemonController::update'], ['id'], null, null, false, false, null]],
        460 => [[['_route' => 'app_pokemon_delete', '_controller' => 'App\\Controller\\PokemonController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        506 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        528 => [[['_route' => 'app_user_update', '_controller' => 'App\\Controller\\UserController::update'], ['id'], null, null, false, true, null]],
        547 => [
            [['_route' => 'app_user_roles', '_controller' => 'App\\Controller\\UserController::updateRoles'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
