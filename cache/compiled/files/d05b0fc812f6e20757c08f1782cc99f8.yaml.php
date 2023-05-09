<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/contracts.yaml',
    'modified' => 1682514415,
    'size' => 4595,
    'data' => [
        'title' => 'Contracts',
        'description' => 'Manage your Contracts with eEignature.',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'router' => [
                    'path' => '/contracts'
                ],
                'template' => 'default',
                'permissions' => [
                    'admin.contracts' => [
                        'type' => 'crudpl',
                        'label' => 'Contracts'
                    ]
                ],
                'list' => [
                    'title' => 'title',
                    'fields' => [
                        'id' => NULL,
                        'title' => NULL
                    ]
                ],
                'edit' => [
                    'title' => [
                        'template' => '{{ object.last_name ?? \'Last\' }}, {{ object.first_name ?? \'First Name\' }}'
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
                        'type' => 'contracts',
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
                        'folder' => 'user-data://flex-objects/contracts.json',
                        'indexed' => true,
                        'key' => 'id'
                    ]
                ],
                'search' => [
                    'options' => [
                        'contains' => 1
                    ],
                    'fields' => [
                        0 => 'id',
                        1 => 'title'
                    ]
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'id' => [
                    'label' => 'ID',
                    'type' => 'hidden',
                    'readonly' => true
                ],
                'status' => [
                    'label' => 'Status',
                    'type' => 'text',
                    'readonly' => true
                ],
                'title' => [
                    'label' => 'Title',
                    'type' => 'text',
                    'readonly' => true
                ],
                'markdown_editor' => [
                    'type' => 'editor',
                    'label' => 'Markdown editor',
                    'classes' => 'frontmatter',
                    'indentUnit' => 2
                ],
                'image_upload' => [
                    'label' => 'Upload your image',
                    'type' => 'file',
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ],
                'signers' => [
                    'type' => 'list',
                    'controls' => 'none',
                    'sort' => false,
                    'collapsed' => true,
                    'label' => 'Signers',
                    'style' => 'vertical',
                    'fields' => [
                        '.name' => [
                            'label' => 'Signer name',
                            'type' => 'text',
                            'readonly' => true
                        ],
                        '.id' => [
                            'label' => 'Signer id',
                            'type' => 'text',
                            'readonly' => true
                        ],
                        '.email' => [
                            'label' => 'Signer email',
                            'type' => 'text',
                            'readonly' => true
                        ],
                        '.mobile' => [
                            'label' => 'Signer mobile',
                            'type' => 'text',
                            'readonly' => true
                        ],
                        '.company_name' => [
                            'label' => 'Signer company name',
                            'type' => 'text',
                            'readonly' => true
                        ],
                        '.url' => [
                            'label' => 'Link to document',
                            'type' => 'links',
                            'readonly' => true
                        ],
                        '.events' => [
                            'type' => 'events',
                            'label' => 'Events',
                            'fields' => [
                                '.name' => [
                                    'type' => 'text',
                                    'label' => 'Name',
                                    'readonly' => true
                                ],
                                '.timestamp' => [
                                    'label' => 'Timestamp',
                                    'type' => 'text',
                                    'readonly' => true
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
