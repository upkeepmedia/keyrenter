<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/fields.yaml',
    'modified' => 1682514415,
    'size' => 1529,
    'data' => [
        'title' => 'IDX Standard Fields',
        'description' => 'IDX Listings using the Spark API',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'list' => [
                    'fields' => [
                        'Label' => [
                            'link' => 'edit'
                        ]
                    ]
                ]
            ],
            'data' => [
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\SimpleStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://fields'
                    ]
                ],
                'ordering' => [
                    'storage_key' => 'ASC'
                ]
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'SiteVisible' => [
                    'type' => 'toggle',
                    'label' => 'Site Visible',
                    'options' => [
                        0 => 'No',
                        1 => 'Yes'
                    ],
                    'default' => 0,
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'ResourceUri' => [
                    'type' => 'text',
                    'label' => 'Resource URI'
                ],
                'MlsVisible' => [
                    'type' => 'array',
                    'label' => 'MLS Visible',
                    'value_only' => true
                ],
                'Searchable' => [
                    'type' => 'toggle',
                    'label' => 'Searchable',
                    'options' => [
                        0 => 'No',
                        1 => 'Yes'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'Defaults' => [
                    'type' => 'array',
                    'label' => 'Defaults'
                ],
                'HasList' => [
                    'type' => 'toggle',
                    'label' => 'Has List',
                    'options' => [
                        0 => 'No',
                        1 => 'Yes'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'MaxListSize' => [
                    'type' => 'number',
                    'label' => 'Max List Size'
                ],
                'Type' => [
                    'type' => 'text',
                    'label' => 'Field Type'
                ],
                'MultiSelect' => [
                    'type' => 'toggle',
                    'label' => 'MultiSelect',
                    'options' => [
                        0 => 'No',
                        1 => 'Yes'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'FieldCategory' => [
                    'type' => 'text',
                    'label' => 'Field Category'
                ],
                'Label' => [
                    'type' => 'text',
                    'label' => 'Field Label'
                ],
                'Payloads' => [
                    'type' => 'array',
                    'label' => 'Payloads',
                    'value_only' => true
                ]
            ]
        ]
    ]
];
