<?php


class HelloWorldTest extends \PHPUnit\Framework\TestCase
{

    public function testTrueIsEqualTrue()
    {
        $this->assertEquals(true, true);
    }

    public function testTrueIsNotEqualFalse()
    {
        $this->assertNotEquals(true, false);
    }
}