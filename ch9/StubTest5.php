<?php

use PHPUnit\Framework\TestCase;

class StubTest5 extends TestCase
{
    public function testReturnValueMapStub()
    {
        $stub = $this->createMock(SomeClass::class);

        $map = [
            ['a', 'b', 'c', 'd'],
            ['e', 'f', 'g', 'h']
        ];

        $stub->method('doSomething')
             ->will($this->returnValueMap($map));

        $this->assertSame('d', $stub->doSomething('a', 'b', 'c'));
        $this->assertSame('h', $stub->doSomething('e', 'f', 'g'));
    }
}