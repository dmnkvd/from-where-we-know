<?php

return [
    'debug' => true,
    'languages' => false,
    'smartypants' => true,
    'scssNestedCheck' => true,
    // 'home' => 'accueil',
    'michnhokn.cookie-banner' => true,
    'auth' => [
        'methods' => [
            'password' => ['2fa' => true]
        ]
    ]
];

c::set('routes', array(
    array(
      'pattern' => '(:any)',
      'action'  => function($uid) {
  
        $page = page($uid);
  
        if(!$page) $page = page('architecture')->grandchildren()->findby('uid', $uid);
        if(!$page) $page = site()->errorPage();
  
        return site()->visit($page);
  
      }
    ),
    array(
       'pattern' => 'architecture/(:any)/(:any)',
       'action'  => function($issue, $album) {
         return go($album);
       }
    )
  ));

// 'routes' => [
//     [
//         'pattern' => '(:any)',
//         'action'  => function ($uid) {
//             $page = page($uid);
//             if (!$page) $page = page('scenographie/' . $uid);
//             if (!$page) $page = page('architecture/' . $uid);
//             if (!$page) $page = site()->errorPage();
//             return site()->visit($page);
//         }
//     ],
//     [
//         'pattern' => 'scenographie/(:any)',
//         'action'  => function ($uid) {
//             go($uid);
//         }
//     ],
//     [
//         'pattern' => 'architecture/(:any)',
//         'action'  => function ($uid) {
//             go($uid);
//         }
//     ]
// ]


 