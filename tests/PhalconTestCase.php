<?php

namespace Test;

abstract class PhalconTestCase extends \PHPUnit\Framework\TestCase
{
	protected $di;

    protected function setUp()
    {
        $di = new \Phalcon\Di();
        $this->di = $di->getDefault();
    }
    protected function tearDown()
    {
        $this->di = false;
    }
}