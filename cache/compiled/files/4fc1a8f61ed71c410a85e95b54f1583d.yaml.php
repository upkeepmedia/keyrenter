<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/reviews.yaml',
    'modified' => 1682514415,
    'size' => 3370,
    'data' => [
        'title' => 'Reviews',
        'description' => 'Grade.us Reviews',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/reviews'
                ],
                'menu' => [
                    'list' => [
                        'route' => '/reviews',
                        'title' => 'Reviews',
                        'icon' => 'fa-star',
                        'authorize' => [
                            0 => 'admin.reviews.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'permissions' => [
                    'admin.reviews' => [
                        'type' => 'crudpl',
                        'label' => 'Reviews'
                    ]
                ],
                'list' => [
                    'fields' => [
                        'author' => [
                            'link' => 'edit'
                        ],
                        'rating' => NULL,
                        'date' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.name ?? \'New Review\' }}'
                    ]
                ],
                'preview' => [
                    'enabled' => false,
                    'route' => NULL
                ],
                'export' => [
                    'enabled' => true,
                    'method' => 'csvSerialize',
                    'formatter' => [
                        'class' => 'Grav\\Framework\\File\\Formatter\\CsvFormatter'
                    ],
                    'filename' => 'reviews'
                ]
            ],
            'site' => [
                'templates' => [
                    'collection' => [
                        'paths' => [
                            0 => 'flex/{TYPE}/collection/{LAYOUT}{EXT}'
                        ]
                    ],
                    'object' => [
                        'paths' => [
                            0 => 'flex/{TYPE}/object/{LAYOUT}{EXT}'
                        ]
                    ],
                    'defaults' => [
                        'type' => 'reviews',
                        'layout' => 'default'
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericObject',
                'collection' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\SimpleStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://reviews',
                        'indexed' => true,
                        'key' => 'id'
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'author'
                    ]
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'id' => [
                    'type' => 'hidden'
                ],
                'author' => [
                    'type' => 'readonly',
                    'label' => 'Author',
                    'size' => 'medium'
                ],
                'type' => [
                    'type' => 'text',
                    'label' => 'Source'
                ],
                'rating' => [
                    'type' => 'text',
                    'label' => 'Rating',
                    'size' => 'small'
                ],
                'content' => [
                    'type' => 'textarea',
                    'label' => 'Content',
                    'size' => 'medium'
                ],
                'url' => [
                    'type' => 'readonly',
                    'label' => 'Link'
                ],
                'date' => [
                    'type' => 'datetime',
                    'label' => 'Date Created'
                ]
            ]
        ]
    ]
];
