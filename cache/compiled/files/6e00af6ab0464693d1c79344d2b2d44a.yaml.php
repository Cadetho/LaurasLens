<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/LaurasLens/user/plugins/admin/blueprints/admin/pages/move.yaml',
    'modified' => 1484765327,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'classes' => 'fancy',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::parentsRawRoutes',
                    'data-default@' => '\\Grav\\Plugin\\Admin\\Admin::rawRoute',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ]
                ]
            ]
        ]
    ]
];
