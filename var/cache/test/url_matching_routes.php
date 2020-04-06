<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/new' => [[['_route' => 'listing_create', '_controller' => 'App\\Controller\\ListingController::create'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/(\\d+)?(*:14)'
                .'|/(\\d+)/delete(*:34)'
                .'|/(\\d+)/task/new(*:56)'
                .'|/(\\d+)/task/(\\d+)/edit(*:85)'
                .'|/(\\d+)/task/(\\d+)/delete(*:116)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        14 => [[['_route' => 'listing_show', 'listingId' => null, '_controller' => 'App\\Controller\\ListingController::show'], ['listingId'], null, null, false, true, null]],
        34 => [[['_route' => 'listing_delete', '_controller' => 'App\\Controller\\ListingController::delete'], ['listingId'], null, null, false, false, null]],
        56 => [[['_route' => 'task_create', '_controller' => 'App\\Controller\\TaskController::create'], ['listingId'], null, null, false, false, null]],
        85 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['listingId', 'taskId'], null, null, false, false, null]],
        116 => [
            [['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['listingId', 'taskId'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
