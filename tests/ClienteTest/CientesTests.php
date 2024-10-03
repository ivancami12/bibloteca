<?php

use Doctrine\ORM\Mapping\Entity;
use PHPUnit\Framework\TestCase;

class CientesTests extends TestCase
{
    public function testAddition()
    {
        $calculator = new Entity();
        $this->assertEquals(4, $calculator->add(2, 2));
    }
}