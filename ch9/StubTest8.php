<?php

use PHPUnit\Framework\TestCase;

class StubTest8 extends TestCase
{
    public function testThrowExceptionStub()
    {
        $stub = $this->getMockBuilder('SomeClass')
            ->setMethods(['doSomething'])
            ->getMock();

        $stub->method('doSomething')
            ->will($this->throwException(new Exception));

        $stub->doSomething();
    }
}