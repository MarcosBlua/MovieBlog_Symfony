<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
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
    'listaRecomendaciones' => [['username'], ['_controller' => 'App\\Controller\\RecomendacionController::listaRecomendaciones'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/listaRecomendaciones']], [], []],
    'recomendacion' => [['id'], ['_controller' => 'App\\Controller\\RecomendacionController::recomendacion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/recomendacion']], [], []],
    'agregarRecomendacion' => [[], ['_controller' => 'App\\Controller\\RecomendacionController::agregarRecomendacion'], [], [['text', '/agregarRecomendacion']], [], []],
    'modificarRecomendacion' => [['id'], ['_controller' => 'App\\Controller\\RecomendacionController::modificarRecomendacion'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modificarRecomendacion']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'registroUsuario' => [[], ['_controller' => 'App\\Controller\\SecurityController::registroUsuario'], [], [['text', '/registroUsuario']], [], []],
    'usuario' => [[], ['_controller' => 'App\\Controller\\UsuarioController::index'], [], [['text', '/usuario']], [], []],
    'perfil' => [['username'], ['_controller' => 'App\\Controller\\UsuarioController::verPerfil'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/perfil']], [], []],
    'modificarUsuario' => [['id'], ['_controller' => 'App\\Controller\\UsuarioController::modificarUsuario'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/modificarUsuario']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
];
