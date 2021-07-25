<?php
return [
    'plugin' => [
        'name' => 'UTM Tracker',
        'description' => 'Плагин предоставляет возможность определить рекламный канал, приведший посетителя на сайт путем подмены контактных данных на странице, в зависимости от значения тега utm_source.',
        'author' => 'Андрей Шилов',
    ],
    'models' => [
        'field' => [
            'name' => 'Поле',
            'name_plural' => 'Поля',
            'attributes' => [
                'code' => 'Код',
                'name' => 'Название',
                'default_name' => 'Значение по-умолчанию',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Название'
                ],
                'code' => [
                    'label' => 'Код'
                ],
                'default_value' => [
                    'label' => 'Значение по-умолчанию'
                ]
            ],
            'columns' => [
                'name' => [
                    'label' => 'Название'
                ],
                'code' => [
                    'label' => 'Код'
                ],
                'default_value' => [
                    'label' => 'Значение по-умолчанию'
                ]
            ],
        ],
        'value' => [
            'name' => 'Значение',
            'attributes' => [
                'utm_source' => 'UTM Source',
                'value' => 'Значение',
            ],
            'fields' => [
                'utm_source' => [
                    'label' => 'UTM Source'
                ],
                'value' => [
                    'label' => 'Значение'
                ],
            ],
            'columns' => [
                'field' => [
                    'label' => 'Поле'
                ],
                'utm_source' => [
                    'label' => 'UTM Source'
                ],
                'value' => [
                    'label' => 'Значение'
                ],
            ],
        ]
    ]
];