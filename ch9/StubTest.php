<?php

use PHPUnit\Framework\TestCase;

class StubTest extends TestCase
{
    public function testStub()
    {
        $stub = $this->createMock(SomeClass::class);

        $stub->method('doSomething')
             ->willReturn('foo');

        $this->assertEquals('foo', $stub->doSomething());
    }
}