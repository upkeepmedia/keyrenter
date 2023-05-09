<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/themes/keyrenter/blueprints/modular/services.yaml',
    'modified' => 1682633296,
    'size' => 1369,
    'data' => [
        'title' => 'Services',
        '@extends' => 'module',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.title_classes' => [
                                    'type' => 'text',
                                    'label' => 'Title Classes',
                                    'toggleable' => true,
                                    'size' => 'large'
                                ],
                                'header.service_title' => [
                                    'type' => 'section',
                                    'title' => 'Services',
                                    'underline' => true
                                ],
                                'header.position_image' => [
                                    'type' => 'toggle',
                                    'label' => 'Position Image',
                                    'options' => [
                                        'right' => 'Start with Right',
                                        'left' => 'Start with Left'
                                    ]
                                ],
                                'header.services' => [
                                    'name' => 'Services',
                                    'type' => 'list',
                                    'btnLabel' => 'Add Service',
                                    'style' => 'vertical',
                                    'label' => 'Services',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Image'
                                        ],
                                        '.pretext_icon' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Pre-Text Icon'
                                        ],
                                        '.floating_icons' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Floating Icons',
                                            'help' => 'SVG Icons that float up from the cropped part of the image',
                                            'multiple' => true,
                                            'validate' => [
                                                'type' => 'array'
                                            ]
                                        ],
                                        '.text' => [
                                            'type' => 'markdown',
                                            'label' => 'Text'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
