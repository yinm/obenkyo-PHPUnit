<?php

use PHPUnit\Framework\TestCase;

class StubTest6 extends TestCase
{
    public function testReturnCallbackStub()
    {
        $stub = $this->getMockBuilder('SomeClass')
                     ->setMethods(['doSomething'])
                     ->getMock();

        $stub->method('doSomething')
             ->will($this->returnCallback('str_rot13'));

        $this->assertSame('fbzrguvat', $stub->doSomething('something'));
    }
}