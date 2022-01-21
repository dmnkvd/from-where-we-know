<?php

@include_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib/CookieMethods.php';

const DEFAULT_CONTENT = [
    'title' => 'Cookies',
    'text' => 'This site uses cookies, for more info see',
    'text1' => '(link: policy text: PRIVACY POLICY & IMPRINT)',
    'essentialText' => 'Essential',
    'denyAll' => 'Reject all',
    'acceptAll' => 'Accept all',
    'save' => 'OK',
];

Kirby::plugin('michnhokn/cookie-banner', [
    'snippets' => [
        'cookie-modal' => __DIR__ . '/snippets/cookie-modal.php',
        // 'cookie-modal-option' => __DIR__ . '/snippets/cookie-modal-option.php',
    ],
    'translations' => [
        'en' => [
            'michnhokn.cookie-banner' => DEFAULT_CONTENT
        ],
        'de' => [
            'michnhokn.cookie-banner.title' => '',
            'michnhokn.cookie-banner.text' => 'Diese Website verwendet Cookies, weitere Informationen finden Sie unter',
            'michnhokn.cookie-banner.text1' => '(link: policy text: DATENSCHUTZ & IMPRESSUM)',
            'michnhokn.cookie-banner.essentialText' => 'Wesentlich',
            'michnhokn.cookie-banner.denyAll' => 'Alle ablehnen',
            'michnhokn.cookie-banner.acceptAll' => 'Alle zulassen',
            'michnhokn.cookie-banner.save' => 'OK',
        ]
    ],
    'options' => [
        'features' => [],
        'content' => DEFAULT_CONTENT
    ]
]);
