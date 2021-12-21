<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/about' => [
            [['_route' => 'api_app_about_getabout', '_controller' => 'App\\Controller\\AboutController::getAboutAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_app_about_postabout', '_controller' => 'App\\Controller\\AboutController::postAboutAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/books' => [[['_route' => 'api_app_book_getbook', '_controller' => 'App\\Controller\\BookController::getBookAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/book' => [[['_route' => 'api_app_book_postbook', '_controller' => 'App\\Controller\\BookController::postBookAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/overdue' => [[['_route' => 'api_app_book_getoverduebooks', '_controller' => 'App\\Controller\\BookController::getOverdueBooksAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/news' => [[['_route' => 'api_app_news_getnews', '_controller' => 'App\\Controller\\NewsController::getNewsAction'], null, ['GET' => 0], null, false, false, null]],
        '/api/offer' => [
            [['_route' => 'api_app_offer_getoffer', '_controller' => 'App\\Controller\\OfferController::getOfferAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_app_offer_postbook', '_controller' => 'App\\Controller\\OfferController::postBookAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/rodo' => [
            [['_route' => 'api_app_rodo_getrodo', '_controller' => 'App\\Controller\\RodoController::getRodoAction'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_app_rodo_postbook', '_controller' => 'App\\Controller\\RodoController::postBookAction'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/singlenews' => [[['_route' => 'api_app_singlenews_postnews', '_controller' => 'App\\Controller\\SingleNewsController::postNewsAction'], null, ['POST' => 0], null, false, false, null]],
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|book/(?'
                            .'|borrow/([^/]++)(*:41)'
                            .'|return/([^/]++)(*:63)'
                        .')'
                        .'|singlenews/([^/]++)(?'
                            .'|(*:93)'
                        .')'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:130)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:161)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:197)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:235)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'api_app_book_borrow', '_controller' => 'App\\Controller\\BookController::borrow'], ['id'], ['POST' => 0], null, false, true, null]],
        63 => [[['_route' => 'api_app_book_return', '_controller' => 'App\\Controller\\BookController::return'], ['id'], ['POST' => 0], null, false, true, null]],
        93 => [
            [['_route' => 'api_app_singlenews_putnews', '_controller' => 'App\\Controller\\SingleNewsController::putNewsAction'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_app_singlenews_getnews', '_controller' => 'App\\Controller\\SingleNewsController::getNews'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        130 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        161 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        197 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        235 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
