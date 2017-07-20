<?php

use Phalcon\Di;
use Phalcon\Test\UnitTestCase as PhalconTestCase;

abstract class UnitTestCase extends PhalconTestCase
{
    /**
     * @var bool
     */
    private $_loaded = false;

    public function setUp(\Phalcon\DiInterface $di = NULL, \Phalcon\Config $config = NULL)
    {
        $di = new \Phalcon\Di\FactoryDefault();
        // die(print_r($di));

        $config = include('../app/config/config.php');
        $config->application->controllersDir = '../app/controllers/';
        $config->application->modelsDir = '../app/models/';

        $di->setShared('config', $config);

        $di->setShared('db', function () use ($config) {
          return new Mysql((Array)$config->databasetest);
        });

        $di->setShared('atividadesService', '\App\Services\AtividadesService');

        $di->set('modelsManager', function() {
            return new \Phalcon\Mvc\Model\Manager();
        });
        $di->set('modelsMetadata', function() {
            return new \Phalcon\Mvc\Model\MetaData();
        });

        parent::setUp($di);
        // $di = Di::getDefault();

        // Load any additional services that might be required during testing
        
        // die(print_r($di));
        // Get any DI components here. If you have a config, be sure to pass it to the parent
        $this->setDi($di);

        $this->_loaded = true;
    }

    /**
     * Check if the test case is setup properly
     *
     * @throws \PHPUnit_Framework_IncompleteTestError;
     */
    // public function __destruct()
    // {
    //     if (!$this->_loaded) {
    //         throw new \PHPUnit_Framework_IncompleteTestError(
    //             "Please run parent::setUp()."
    //         );
    //     }
    // }
}
