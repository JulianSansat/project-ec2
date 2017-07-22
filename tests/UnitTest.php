<?php

namespace Test;

// use Phalcon\Test\PhalconTestCase;

class UnitTest extends PhalconTestCase
{
    protected $last_inserted;
    
    public function testActivityCreate()
    {
        $this->assertEquals('ok', 'notOk', 'testing');
    }

    public function testActivityList()
    {
        $atividadesListResponse = $this->di->getShared('guestsController')->getAtividadeList();

        #$this->assertEquals(
        #    $atividadesListResponse,
        #    [],
        #    "This is OK"
        #);
    }
}