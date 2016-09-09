<?php

use Mirahost\NetworkTools\Dig;

class DigTest extends PHPUnit_Framework_TestCase {

    public function testDig()
    {
        $Dig = new Dig;
        $this->assertContains('DiG', $Dig->sendTraceroute('www.example.com'));
    }

}