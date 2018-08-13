<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Repository
    |--------------------------------------------------------------------------
    |
    | These values are root of your application logic. These values are used when the
    | framework needs to place the application's values in a notification or
    | any other location as required by the application or its packages.
    |
    */

    $storage = '/storage/uploads',

    $temp = $storage . '/temp/',

    'path' => [
        'absolute' => $relative = $storage . '/images/',
        'relative' => $relative,
        'default' => $default = $relative . 'default.png',
        'temp' => $temp
    ],

    ];