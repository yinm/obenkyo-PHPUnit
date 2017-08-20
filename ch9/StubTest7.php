<?php

use PHPUnit\Framework\TestCase;

class StubTest7 extends TestCase
{
    public function testOnConsecutiveCallsStub()
    {
        $stub = $this->getMOckBuilder('SomeClass')
            ->setMethods(['doSomething'])
            ->getMock();

        $stub->method('doSomething')
            ->will($this->onConsecutiveCalls(2, 3, 5, 7));

        $this->assertSame(2, $stub->doSomething());
        $this->assertSame(3, $stub->doSomething());
        $this->assertSame(5, $stub->doSomething());
    }
}
