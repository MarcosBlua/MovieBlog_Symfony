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
        '/agregarRecomendacion' => [[['_route' => 'agregarRecomendacion', '_controller' => 'App\\Controller\\RecomendacionController::agregarRecomendacion'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/registroUsuario' => [[['_route' => 'registroUsuario', '_controller' => 'App\\Controller\\SecurityController::registroUsuario'], null, null, null, false, false, null]],
        '/usuario' => [[['_route' => 'usuario', '_controller' => 'App\\Controller\\UsuarioController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
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
                .'|/listaRecomendaciones/([^/]++)(*:199)'
                .'|/recomendacion/([^/]++)(*:230)'
                .'|/modificar(?'
                    .'|Recomendacion/([^/]++)(*:273)'
                    .'|Usuario/([^/]++)(*:297)'
                .')'
                .'|/eliminarRecomendacion/([^/]++)(*:337)'
                .'|/perfil/([^/]++)(*:361)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'listaRecomendaciones', '_controller' => 'App\\Controller\\RecomendacionController::listaRecomendaciones'], ['username'], null, null, false, true, null]],
        230 => [[['_route' => 'recomendacion', '_controller' => 'App\\Controller\\RecomendacionController::recomendacion'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'modificarRecomendacion', '_controller' => 'App\\Controller\\RecomendacionController::modificarRecomendacion'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'modificarUsuario', '_controller' => 'App\\Controller\\UsuarioController::modificarUsuario'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'eliminarRecomendacion', '_controller' => 'App\\Controller\\RecomendacionController::eliminarRecomendacion'], ['id'], null, null, false, true, null]],
        361 => [
            [['_route' => 'perfil', '_controller' => 'App\\Controller\\UsuarioController::verPerfil'], ['username'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
