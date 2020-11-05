<?php

use \PHPUnit\Framework\TestCase;

class BasicExample extends TestCase
{
    public function testAddingTwoPlusTwoEqualsFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
