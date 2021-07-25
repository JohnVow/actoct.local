<?php
return [
    'plugin' => [
        'name' => 'UTM Saver',
        'description' => 'Plugin allows to save visitors utm to cookie',
        'author' => 'Andrei Shilov',
    ],
    'config' => [
        'cookie_ttl' => [
            'title' => 'UTM ttl, days',
            'description' => 'Cookies time of living'
        ],
        'cookie_prefix' => [
            'title' => 'Prefix cookie',
            'description' => 'You can set cookie prefix to avoid conflicts with another modules'
        ],
    ],
    'settings' => [
        'label' => 'UTM Saver',
        'description' => 'Setting of UTM Saver module',
    ],
];