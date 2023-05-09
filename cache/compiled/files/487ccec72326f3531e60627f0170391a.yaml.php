<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/spots.yaml',
    'modified' => 1682514415,
    'size' => 4645,
    'data' => [
        'title' => 'Spots',
        'description' => 'Manage Parking Spots',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/spots'
                ],
                'menu' => [
                    'list' => [
                        'route' => '/spots',
                        'title' => 'Spots',
                        'icon' => 'fa-car',
                        'authorize' => [
                            0 => 'admin.spots.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'template' => 'spots',
                'permissions' => [
                    'admin.spots' => [
                        'type' => 'crudpl',
                        'label' => 'Spots'
                    ]
                ],
                'list' => [
                    'fields' => [
                        'name' => [
                            'link' => 'edit'
                        ],
                        'status' => NULL,
                        'leasee' => NULL,
                        'end' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.name ?? \'New Parking Spot\' }}'
                    ]
                ],
                'preview' => [
                    'enabled' => false,
                    'route' => NULL
                ],
                'export' => [
                    'enabled' => true,
                    'title' => 'CSV',
                    'formatter' => [
                        'class' => 'Grav\\Framework\\File\\Formatter\\CsvFormatter'
                    ]
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
                        'type' => 'spots',
                        'layout' => 'default'
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Plugin\\Parking\\Flex\\Types\\Spots\\SpotObject',
                'collection' => 'Grav\\Plugin\\Parking\\Flex\\Types\\Spots\\SpotCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\FolderStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://parking/spots',
                        'indexed' => true,
                        'key' => 'name'
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'name',
                        1 => 'lot_name',
                        2 => 'status',
                        3 => 'leasee',
                        4 => 'email'
                    ]
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'lot_title' => [
                    'type' => 'section',
                    'underline' => true,
                    'title' => 'Lot Info'
                ],
                'lot' => [
                    'type' => 'select',
                    'label' => 'Lot',
                    'size' => 'medium',
                    'help' => 'The lot in which the spot is located',
                    'data-options@' => '\\Grav\\Plugin\\Parking::getLots',
                    'flex-disabled@' => 'exists',
                    'flex-hidden@' => 'exists',
                    'flex-readonly@' => 'exists',
                    'options' => [
                        '' => 'Lot List'
                    ]
                ],
                'lot_name' => [
                    'type' => 'hidden',
                    'label' => 'Lot Name'
                ],
                'number' => [
                    'type' => 'text',
                    'label' => 'Number',
                    'flex-disabled@' => 'exists',
                    'flex-readonly@' => 'exists',
                    'size' => 'x-small',
                    'help' => 'The number of the spot in the lot'
                ],
                'status' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'readonly' => true,
                    'label' => 'Status'
                ],
                'reserved' => [
                    'type' => 'text',
                    'label' => 'Reserved For',
                    'toggleable' => true
                ],
                'name' => [
                    'type' => 'hidden',
                    'size' => 'medium',
                    'label' => 'Name',
                    'readonly' => true,
                    'help' => 'The unique identifier of the spot, combines lot & spot number'
                ],
                'rate' => [
                    'type' => 'hidden',
                    'label' => 'Yearly Rate',
                    'readonly' => true,
                    'size' => 'x-small',
                    'help' => 'The yearly rate, pulled from the Lot'
                ],
                'end' => [
                    'type' => 'date',
                    'readonly' => true,
                    'label' => 'Expiry Date'
                ],
                'leases_title' => [
                    'type' => 'section',
                    'underline' => true,
                    'title' => 'Leases'
                ],
                'leases' => [
                    'type' => 'leases',
                    'label' => 'Leases'
                ],
                'leasee' => [
                    'type' => 'hidden',
                    'label' => 'Lessee'
                ],
                'makemodel' => [
                    'type' => 'hidden',
                    'label' => 'Make & Model'
                ],
                'plate' => [
                    'type' => 'hidden',
                    'label' => 'Plate Number'
                ],
                'phone' => [
                    'type' => 'hidden',
                    'label' => 'Phone Number'
                ],
                'email' => [
                    'type' => 'hidden',
                    'label' => 'Email Address'
                ],
                'active_lease.name' => [
                    'type' => 'hidden'
                ]
            ]
        ]
    ]
];
