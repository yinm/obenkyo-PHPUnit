<?php

use PHPUnit\Framework\TestCase;

class StubTest4 extends TestCase
{
    public function testReturnSelf()
    {
//        $stub = $this->createMock(SomeClass::class);
        $stub = $this->getMockBuilder('SomeClass')
                     ->setMethods(['doSomething'])
                     ->getMock();

        $stub->method('doSomething')
             ->will($this->returnSelf());

        $this->assertSame($stub, $stub->doSomething());
    }
}