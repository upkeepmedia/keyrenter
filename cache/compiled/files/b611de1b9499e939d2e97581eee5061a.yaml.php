<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/lots.yaml',
    'modified' => 1682514415,
    'size' => 3666,
    'data' => [
        'title' => 'Lots',
        'description' => 'Manage Parking Lots',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/lots'
                ],
                'menu' => [
                    'list' => [
                        'route' => '/lots',
                        'title' => 'Lots',
                        'icon' => 'fa-map',
                        'authorize' => [
                            0 => 'admin.lots.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'template' => 'default',
                'permissions' => [
                    'admin.lots' => [
                        'type' => 'crudpl',
                        'label' => 'Lots'
                    ]
                ],
                'list' => [
                    'title' => 'name',
                    'fields' => [
                        'name' => NULL,
                        'description' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.name ?? \'New Parking Lot\' }}'
                    ]
                ],
                'preview' => [
                    'enabled' => false,
                    'route' => NULL
                ],
                'export' => [
                    'enabled' => true,
                    'method' => 'jsonSerialize',
                    'formatter' => [
                        'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                    ],
                    'filename' => 'contracts'
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
                        'type' => 'lots',
                        'layout' => 'default'
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Plugin\\Parking\\Flex\\Types\\Lots\\LotObject',
                'collection' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\FolderStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://parking/lots',
                        'indexed' => true
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'name'
                    ]
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'name' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Name',
                    'help' => 'The unique name of the lot (ex: Walnut Street)'
                ],
                'description' => [
                    'type' => 'text',
                    'label' => 'Description',
                    'help' => 'A short description (ex: Located on the corner of East Walnut Street and St. James Alley)'
                ],
                'map' => [
                    'type' => 'file',
                    'label' => 'Map Image',
                    'media_field' => true,
                    'help' => 'Upload an iamge of the parking lot, with numbered spots',
                    'accept' => [
                        0 => 'image/*',
                        1 => 'application/*'
                    ]
                ],
                'yearly_rate' => [
                    'type' => 'number',
                    'size' => 'small',
                    'label' => 'Yearly Rate'
                ],
                'lat' => [
                    'type' => 'text',
                    'label' => 'Latitude'
                ],
                'lng' => [
                    'type' => 'text',
                    'label' => 'Longitude'
                ],
                'aerial' => [
                    'type' => 'hidden',
                    'label' => 'Aerial Shot of the Lot'
                ],
                'spotCount' => [
                    'type' => 'text',
                    'readonly' => true,
                    'label' => 'Total Spots'
                ]
            ]
        ]
    ]
];
