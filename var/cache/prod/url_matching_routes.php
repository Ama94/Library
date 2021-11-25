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
        '/authentication_token' => [[['_route' => 'authentication_token'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
