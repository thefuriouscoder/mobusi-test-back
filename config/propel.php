<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 26/2/16
 * Time: 14:45
 */

    return [
        'propel' => [
            'general' => [
                'project' => 'Mobusi Technical Test - API Rest'
            ],
            'paths' => [

            ],
            'database' => [
                'connections' => [
                    'mobusi' => [
                        'adapter'    => 'pgsql',
                        'settings'   => [
                            'charset'   => 'utf8',
                            'queries'   => [
                                'utf8'  => "SET NAMES 'UTF8'"
                            ]
                        ],
                        'classname'  => 'Propel\Runtime\Connection\DebugPDO',
                        'dsn'        => 'pgsql:host=127.0.0.1;port=5432;dbname=mobusi;user=postgres;password=postgres',
                        'user'       => 'postgres',
                        'password'   => 'postgres',
                        'attributes' => []
                    ]
                ]
            ],
           'runtime' => [
                'defaultConnection' => 'mobusi',
                'connections' => ['mobusi']
            ],
            'generator' => [
                'defaultConnection' => 'mobusi',
                'connections' => ['mobusi']
            ]
        ]
    ];
