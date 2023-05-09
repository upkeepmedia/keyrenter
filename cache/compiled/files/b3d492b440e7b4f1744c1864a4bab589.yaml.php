<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/blueprints.yaml',
    'modified' => 1682453725,
    'size' => 1110,
    'data' => [
        'name' => 'Keyrenter',
        'slug' => 'keyrenter',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'Keyrenter',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Georges Papas',
            'email' => 'georges.papas@upkeepmedia.com'
        ],
        'homepage' => 'https://github.com/georges-papas/grav-theme-keyrenter',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/georges-papas/grav-theme-keyrenter/issues',
        'readme' => 'https://github.com/georges-papas/grav-theme-keyrenter/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'production' => [
                    'type' => 'toggle',
                    'label' => 'Production Mode',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
