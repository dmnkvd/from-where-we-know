<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */

return [
    'auth' => [
        'methods' => [
            'password' => ['2fa' => true]
        ]
    ],
    'routes' => [
        [
            'pattern' => '(:any)',
            'action'  => function ($uid) {
                $page = page($uid);
                if (!$page) $page = page('artist/' . $uid);
                if (!$page) $page = site()->errorPage();
                return site()->visit($page);
            }
        ],
        [
            'pattern' => 'artist/(:any)',
            'action'  => function ($uid) {
                go($uid);
            }
        ]
    ]
];
