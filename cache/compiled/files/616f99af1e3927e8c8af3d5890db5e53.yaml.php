<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/pages/default.yaml',
    'modified' => 1682514415,
    'size' => 2704,
    'data' => [
        'title' => 'Item',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.featured_image' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Featured Image',
                                    'preview_images' => true,
                                    'size' => 'medium'
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.dropdown' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'Dropdown',
                                            'help' => 'Should the page children be displayed in a dropdown',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                'enabled' => 'PLUGIN_ADMIN.ENABLED',
                                                'disabled' => 'PLUGIN_ADMIN.DISABLED'
                                            ]
                                        ],
                                        'header.toc' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'Table Of Contents',
                                            'help' => 'Enable the automatic ToC for the page',
                                            'default' => 'disabled',
                                            'highlight' => 'enabled',
                                            'options' => [
                                                'enabled' => 'PLUGIN_ADMIN.ENABLED',
                                                'disabled' => 'PLUGIN_ADMIN.DISABLED'
                                            ]
                                        ],
                                        'header.dark' => [
                                            'type' => 'toggle',
                                            'label' => 'Dark Mode',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'sidebar_title' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'Sidebar'
                                ],
                                'header.sidebar' => [
                                    'type' => 'toggle',
                                    'default' => 'right',
                                    'label' => 'Display Sidebar',
                                    'help' => 'Overrides the sidebar displayed on the page',
                                    'options' => [
                                        'right' => 'Right',
                                        'left' => 'Left',
                                        'None' => 'None'
                                    ]
                                ],
                                'header.testimonial' => [
                                    'type' => 'select',
                                    'label' => 'Testimonial',
                                    'size' => 'small',
                                    'toggleable' => true,
                                    'help' => 'Overrides which homepage testimonial displayed in the sidebar',
                                    'options' => [
                                        0 => 'First',
                                        1 => 'Second',
                                        2 => 'Third',
                                        3 => 'Fourth'
                                    ],
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ]
                            ]
                        ],
                        'seo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'seo_title' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'SEO'
                                ],
                                'header.googletitle' => [
                                    'type' => 'text',
                                    'label' => 'Google/SEO Page Title'
                                ],
                                'header.googledesc' => [
                                    'type' => 'textarea',
                                    'rows' => 3,
                                    'label' => 'Meta Description'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
