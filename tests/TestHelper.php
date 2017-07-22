<?php

use
	Phalcon\Di,
	Phalcon\Di\FactoryDefault,
	Phalcon\Loader;

ini_set("display_errors", 1);
error_reporting(E_ALL);
define("ROOT_PATH", __DIR__);
define('PATH_INCUBATOR', __DIR__ . '/../vendor/phalcon/incubator/');

set_include_path(
    ROOT_PATH . PATH_SEPARATOR . get_include_path()
);

// Required for phalcon/incubator
include __DIR__ . "/../vendor/autoload.php";

// Use the application autoloader to autoload the classes
// Autoload the dependencies found in composer
$loader = new Loader();

$loader->registerDirs([
    ROOT_PATH,
    realpath(__DIR__ . '/../app/models/'),
    realpath(__DIR__ . '/../app/controllers/')
]);

$loader->registerNamespaces([
    'App\Controllers' => realpath(__DIR__ . '/../app/controllers/'),
    'App\Models'      => realpath(__DIR__ . '/../app/models/'),
    // 'Phalcon'         => PATH_INCUBATOR.'Library/Phalcon/'
    'Test'         => __DIR__
    // 'Phalcon\Test'      => realpath(__DIR__ . '/../tests/'),
    // 'Phalcon\Test\Mocks' => realpath(__DIR__ . '/mocks/')
]);
$loader->register();

$di = new FactoryDefault();

Di::reset();

$config = include('../app/config/config.ini');
$config->application->controllersDir = '../app/controllers/';
$config->application->modelsDir = '../app/models/';

$di->setShared('config', $config);

$di->set('db', function () use ($config) {
  return new Phalcon\Db\Adapter\Pdo\Mysql((Array)$config->databasetest);
});

$di->setShared('guestsController', '\App\controllers\GuestsController');
// Add any needed services to the DI here

// die(print_r($di));
Di::setDefault($di);