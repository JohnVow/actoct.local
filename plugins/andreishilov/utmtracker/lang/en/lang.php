<?php
return [
    'plugin' => [
        'name' => 'UTM Tracker',
        'description' => 'The plugin allows you to track the advertising channel of the visitor by substituting contact information on the page depending on utm_source tag value.',
        'author' => 'Andrei Shilov',
    ],
    'models' => [
        'field' => [
            'name' => 'Field',
            'name_plural' => 'Fields',
            'attributes' => [
                'code' => 'Code',
                'name' => 'Name',
                'default_name' => 'Default value',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Name'
                ],
                'code' => [
                    'label' => 'Code'
                ],
                'default_value' => [
                    'label' => 'Default Value'
                ]
            ],
            'columns' => [
                'name' => [
                    'label' => 'Name'
                ],
                'code' => [
                    'label' => 'Code'
                ],
                'default_value' => [
                    'label' => 'Default value'
                ]
            ],
        ],
        'value' => [
            'name' => 'Value',
            'attributes' => [
                'utm_source' => 'UTM Source',
                'value' => 'Value',
            ],
            'fields' => [
                'utm_source' => [
                    'label' => 'UTM Source'
                ],
                'value' => [
                    'label' => 'Value'
                ],
            ],
            'columns' => [
                'field' => [
                    'label' => 'Field'
                ],
                'utm_source' => [
                    'label' => 'UTM Source'
                ],
                'value' => [
                    'label' => 'Value'
                ],
            ],
        ]
    ]
];