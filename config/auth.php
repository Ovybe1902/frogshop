<?php
// config/auth.php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'clients',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'clients',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'clients',
            'hash' => false,
        ],
    ],

    'providers' => [
        'clients' => [
            'driver' => 'eloquent',
            'model' => App\Models\Client::class,
        ],

        // 'users' => [
        //     'driver' => 'eloquent',
        //     'model' => App\Models\User::class,
        // ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    'passwords' => [
        'clients' => [
            'provider' => 'clients',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
