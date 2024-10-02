<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'page_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::accueil'], null, null, null, false, false, null]],
        '/admin/films' => [[['_route' => 'page_admin_films', '_controller' => 'App\\Controller\\Admin\\AdminController::films'], null, null, null, false, false, null]],
        '/admin/add-film' => [[['_route' => 'page_admin_add_film', '_controller' => 'App\\Controller\\Admin\\AdminController::addFilm'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'page_admin_users', '_controller' => 'App\\Controller\\Admin\\AdminController::users'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'page_login', '_controller' => 'App\\Controller\\Auth\\AuthController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'page_register', '_controller' => 'App\\Controller\\Auth\\AuthController::register'], null, null, null, false, false, null]],
        '/forgot' => [[['_route' => 'page_forgot_password', '_controller' => 'App\\Controller\\Auth\\AuthController::forgotPassword'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'page_reset_password', '_controller' => 'App\\Controller\\Auth\\AuthController::resetPassword'], null, null, null, false, false, null]],
        '/confirm' => [[['_route' => 'page_confirm_account', '_controller' => 'App\\Controller\\Auth\\AuthController::confirmAccount'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'page_hello', '_controller' => 'App\\Controller\\HomeController::accueil'], null, null, null, false, false, null]],
        '/discover' => [[['_route' => 'discover', '_controller' => 'App\\Controller\\Movie\\MovieController::index'], null, null, null, false, false, null]],
        '/movie/show' => [[['_route' => 'movie_show', '_controller' => 'App\\Controller\\Movie\\MovieController::show'], null, null, null, false, false, null]],
        '/movie/create' => [[['_route' => 'movie_create', '_controller' => 'App\\Controller\\Movie\\MovieController::create'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'page_categories', '_controller' => 'App\\Controller\\Other\\CategoryController::categories'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
