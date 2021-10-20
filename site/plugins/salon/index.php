<?php

/**
 * Plugins extend Kirby's core functionality.
 * You can extend/replace almost any system-relevant part.
 * This plugin uses a hook to replace the `{{ salon }}` placeholders used in the note pages
 * with images from the selected album page that servers as salon provider
 * More about plugins: https://getkirby.com/docs/guide/plugins/plugin-basics
 */

Kirby::plugin('tereza/salon', [
    'hooks' => [
        'kirbytags:after' => function ($text, $data, $options) {

            if ($page = $data['parent']->salon()->toPage()) {
                $salon = snippet('salon', ['salon' => $page], true);
            } else {
                $salon = '';
            }

            return str_replace('{{ salon }}', $salon, $text);
        }
    ]
]);
