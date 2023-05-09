<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/plugins/webp/blueprints.yaml',
    'modified' => 1677130398,
    'size' => 1212,
    'data' => [
        'name' => 'Webp',
        'slug' => 'webp',
        'type' => 'plugin',
        'version' => '1.4.3',
        'description' => 'Webp image conversion',
        'icon' => 'image',
        'author' => [
            'name' => 'Greenrivers',
            'email' => 'kontakt@greenrivers.pl',
            'url' => 'https://greenrivers.pl/en/'
        ],
        'homepage' => 'https://github.com/greenrivers/grav-plugin-webp',
        'keywords' => 'webp, conversion, image, optimization, plugin, admin',
        'bugs' => 'https://github.com/greenrivers/grav-plugin-webp/issues',
        'docs' => 'https://github.com/greenrivers/grav-plugin-webp/blob/develop/README.md',
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
                'enabled' => [
                    'type' => 'toggle',
                    'outerclasses' => 'conditional condition',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'quality' => [
                    'type' => 'quality',
                    'outerclasses' => 'conditional option option-1',
                    'label' => 'PLUGIN_WEBP.QUALITY_FIELD_LABEL'
                ],
                'conversion' => [
                    'type' => 'conversion',
                    'outerclasses' => 'conditional option option-1',
                    'label' => 'PLUGIN_WEBP.CONVERSION_FIELD_LABEL'
                ],
                'clear_all' => [
                    'type' => 'clear_all',
                    'outerclasses' => 'conditional option option-1',
                    'label' => 'PLUGIN_WEBP.CLEAR_ALL_FIELD_LABEL'
                ]
            ]
        ]
    ]
];
