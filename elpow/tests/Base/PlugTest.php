<?php

namespace ElPow\Base;

class PlugTest extends \PHPUnit_Framework_TestCase {

    public function testNewPlug()
    {
        $this->assertNotNull(new Plug());
    }
}
