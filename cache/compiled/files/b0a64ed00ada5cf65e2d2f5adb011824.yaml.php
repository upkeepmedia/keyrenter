<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/leases.yaml',
    'modified' => 1682514415,
    'size' => 6217,
    'data' => [
        'title' => 'Leases',
        'description' => 'Manage Leases',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'menu' => [
                    'list' => [
                        'route' => '/leases',
                        'title' => 'Leases',
                        'icon' => 'fa-pencil',
                        'authorize' => [
                            0 => 'admin.pages',
                            1 => 'admin.super'
                        ],
                        'priority' => 3
                    ]
                ],
                'router' => [
                    'path' => '/leases'
                ],
                'template' => 'default',
                'permissions' => [
                    'admin.leases' => [
                        'type' => 'crudpl',
                        'label' => 'Leases'
                    ]
                ],
                'list' => [
                    'title' => 'name',
                    'fields' => [
                        'name' => [
                            'link' => 'edit'
                        ],
                        'spot' => NULL,
                        'status' => NULL,
                        'start' => NULL,
                        'end' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.name ?? \'New Lease\' }}'
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
                        'type' => 'leases',
                        'layout' => 'default'
                    ]
                ]
            ],
            'data' => [
                'object' => 'Grav\\Plugin\\Parking\\Flex\\Types\\Leases\\LeaseObject',
                'collection' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericCollection',
                'index' => 'Grav\\Common\\Flex\\Types\\Generic\\GenericIndex',
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\FileStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://parking/leases',
                        'indexed' => true
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'status',
                        1 => 'name',
                        2 => 'spot'
                    ]
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'columns' => [
                    'type' => 'columns',
                    'fields' => [
                        'left_col' => [
                            'type' => 'column',
                            'fields' => [
                                'left_col_title' => [
                                    'type' => 'section',
                                    'title' => 'Lease Details',
                                    'underline' => true
                                ],
                                'spot' => [
                                    'type' => 'text',
                                    'readonly' => true,
                                    'label' => 'Parking Spot'
                                ],
                                'spot_number' => [
                                    'type' => 'hidden',
                                    'label' => 'Spot Number'
                                ],
                                'lot' => [
                                    'type' => 'hidden',
                                    'label' => 'Lot Name'
                                ],
                                'status' => [
                                    'type' => 'text',
                                    'label' => 'Status',
                                    'size' => 'medium',
                                    'disabled' => true,
                                    'default' => 'Pending Signature'
                                ],
                                'pdf' => [
                                    'type' => 'text',
                                    'readonly' => true,
                                    'label' => 'PDF'
                                ],
                                'start' => [
                                    'type' => 'date',
                                    'size' => 'small',
                                    'label' => 'Start Date',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'end' => [
                                    'type' => 'date',
                                    'size' => 'small',
                                    'label' => 'End date',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'document' => [
                                    'type' => 'link',
                                    'readonly' => true,
                                    'label' => 'Document'
                                ],
                                'payment' => [
                                    'type' => 'select',
                                    'label' => 'Payment',
                                    'default' => 'Pending',
                                    'size' => 'medium',
                                    'options' => [
                                        'Pending' => 'Pending',
                                        'Paid' => 'Paid in Full',
                                        'Free Parking' => 'Free Parking',
                                        'Charged in Portal' => 'Charged in Portal'
                                    ]
                                ],
                                'id' => [
                                    'type' => 'text',
                                    'label' => 'ID',
                                    'readonly' => true,
                                    'help' => 'The unique ID of the Lease',
                                    'size' => 'medium'
                                ],
                                'rate' => [
                                    'type' => 'number',
                                    'label' => 'Yearly Rate'
                                ]
                            ]
                        ],
                        'right_col' => [
                            'type' => 'column',
                            'fields' => [
                                'right_col_title' => [
                                    'type' => 'section',
                                    'title' => 'Leasee Info',
                                    'underline' => true
                                ],
                                'name' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Leasee Name',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'email' => [
                                    'type' => 'email',
                                    'size' => 'medium',
                                    'label' => 'Leasee Email'
                                ],
                                'phone' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Leasee Phone'
                                ],
                                'resident' => [
                                    'type' => 'toggle',
                                    'label' => 'RPG Resident',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'No',
                                        1 => 'Yes'
                                    ],
                                    'validate' => [
                                        'type' => 'boolean'
                                    ]
                                ],
                                'makemodel' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Vehicle Make & Model'
                                ],
                                'year' => [
                                    'type' => 'number',
                                    'size' => 'small',
                                    'label' => 'Vehicle Year'
                                ],
                                'color' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Vehicle Color'
                                ],
                                'plate' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Vehicle Plate'
                                ],
                                'state' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Vehicle State'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
