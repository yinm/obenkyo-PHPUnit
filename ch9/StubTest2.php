<?php

use PHPUnit\Framework\TestCase;

class StubTest2 extends TestCase
{
    public function testStub()
    {
        $stub = $this->getMockBuilder('SomeClass')
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        $stub->method('doSomething')
            ->willReturn('foo');

        $this->assertEquals('foo', $stub->doSomething());
    }
}