<?php

/**
 * Controllers allow you to separate the logic of your templates from your markup.
 * This is especially useful for complex logic, but also in general to keep your templates clean.
 * In this example, we define the `$salon` variable which is passed to the template
 * More about controllers: https://getkirby.com/docs/guide/templates/controllers
 */

return function ($page) {

    $salon = $page->images()->sortBy("sort");

    return [
        'salon' => $salon
    ];

};
