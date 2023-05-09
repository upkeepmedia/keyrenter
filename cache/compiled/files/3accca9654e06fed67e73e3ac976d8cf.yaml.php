<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/blueprints/flex-objects/idx.yaml',
    'modified' => 1682514415,
    'size' => 1983,
    'data' => [
        'title' => 'IDX Listings',
        'description' => 'IDX Listings using the Spark API',
        'type' => 'flex-objects',
        'config' => [
            'admin' => [
                'menu' => [
                    'list' => [
                        'hidden' => false,
                        'route' => '/idx',
                        'title' => 'IDX Listings',
                        'icon' => 'fa-home',
                        'authorize' => [
                            0 => 'admin.idx.list',
                            1 => 'admin.super'
                        ],
                        'priority' => 2
                    ]
                ],
                'list' => [
                    'title' => 'address',
                    'fields' => [
                        'header.published' => [
                            'field' => [
                                'type' => 'toggle',
                                'label' => 'Published'
                            ],
                            'width' => 10
                        ],
                        'header.address' => [
                            'link' => 'edit'
                        ],
                        'header.city' => NULL
                    ]
                ]
            ],
            'data' => [
                'storage' => [
                    'class' => 'Grav\\Framework\\Flex\\Storage\\FolderStorage',
                    'options' => [
                        'formatter' => [
                            'class' => 'Grav\\Framework\\File\\Formatter\\JsonFormatter'
                        ],
                        'folder' => 'user-data://listings',
                        'pattern' => '{FOLDER}/{KEY}/listing',
                        'indexed' => true,
                        'key' => 'Id'
                    ]
                ],
                'ordering' => [
                    'storage_key' => 'ASC'
                ]
            ]
        ]
    ]
];
