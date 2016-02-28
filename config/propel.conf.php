<?php
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('mobusi', 'pgsql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
  'settings' =>
  array (
    'charset' => 'utf8',
    'queries' =>
    array (
      'utf8' => 'SET NAMES \'UTF8\'',
    ),
  ),
  'classname' => 'Propel\\Runtime\\Connection\\DebugPDO',
  'dsn' => 'pgsql:host=127.0.0.1;port=5432;dbname=mobusi;user=postgres;password=postgres',
  'user' => 'postgres',
  'password' => 'postgres',
  'attributes' =>
  array (
    'ATTR_EMULATE_PREPARES' => false,
  ),
));
$manager->setName('mobusi');
$serviceContainer->setConnectionManager('mobusi', $manager);
$serviceContainer->setDefaultDatasource('mobusi');