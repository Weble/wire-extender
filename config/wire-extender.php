<?php

return [
    /*
     * Define middlewares for the `livewire/embed` route.
     * Add the 'web' middleware if you want to support sessions.
     */
    'middlewares' => [
        // 'web',
    ],

    'embed_route' => env("WIRE_EXTENDER_EMBED_ROUTE", 'livewire/embed')
];
