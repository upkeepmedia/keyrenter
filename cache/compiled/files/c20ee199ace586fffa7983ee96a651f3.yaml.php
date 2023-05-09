<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/georgespapas/dev/keyrenter/user/config/plugins/flex-objects.yaml',
    'modified' => 1683638872,
    'size' => 365,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'directories' => [
            7 => 'blueprints://flex-objects/pages.yaml',
            10 => 'blueprints://flex-objects/upkeep.yaml',
            11 => 'blueprints://flex-objects/user-accounts.yaml',
            12 => 'blueprints://flex-objects/user-groups.yaml'
        ]
    ]
];
