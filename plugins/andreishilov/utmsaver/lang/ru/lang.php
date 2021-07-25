<?php
return [
    'plugin' => [
        'name' => 'UTM Saver',
        'description' => 'Плагин позволяет сохранять utm-метки посетителя в cookie',
        'author' => 'Андрей Шилов',
    ],
    'config' => [
        'cookie_ttl' => [
            'title' => 'UTM ttl, дней',
            'description' => 'Время жизни cookie'
        ],
        'cookie_prefix' => [
            'title' => 'Префикс cookie',
            'description' => 'Можно указать для избежания конфликтов имен cookie с другими модулями'
        ],
    ],
    'settings' => [
        'label' => 'UTM Saver',
        'description' => 'Настройки модуля UTM Saver',
    ],
];