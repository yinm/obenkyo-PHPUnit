<?php

use PHPUnit\Framework\TestCase;

class StubTest3 extends TestCase
{
    public function testReturnArgumentStub()
    {
        $stub = $this->createMOck(SomeClass::class);

        $stub->method('doSomething')
             ->will($this->returnArgument(0));

        $this->assertEquals('foo', $stub->doSomething('foo'));
        $this->assertEquals('bar', $stub->doSomething('bar'));
    }
}