<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/books' => [[['_route' => 'api_app_book_getbook', '_controller' => 'App\\Controller\\BookController::getBookAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/book' => [[['_route' => 'api_app_book_postbook', '_controller' => 'App\\Controller\\BookController::postBookAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/overdue' => [[['_route' => 'api_app_book_getoverduebooks', '_controller' => 'App\\Controller\\BookController::getOverdueBooksAction'], null, ['GET' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/book/(?'
                        .'|borrow/([^/]++)(*:38)'
                        .'|return/([^/]++)(*:60)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:96)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:126)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:162)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:200)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'api_app_book_borrow', '_controller' => 'App\\Controller\\BookController::borrow'], ['id'], ['POST' => 0], null, false, true, null]],
        60 => [[['_route' => 'api_app_book_return', '_controller' => 'App\\Controller\\BookController::return'], ['id'], ['POST' => 0], null, false, true, null]],
        96 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        126 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        162 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        200 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
