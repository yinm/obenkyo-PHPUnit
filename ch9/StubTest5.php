<?php

use PHPUnit\Framework\TestCase;

class StubTest5 extends TestCase
{
    public function testReturnValueMapStub()
    {
//        $stub = $this->createMock(SomeClass::class);
        $stub = $this->getMockBuilder('SomeClass')
                     ->setMethods(['doSomething'])
                     ->getMock();

        // 引数を配列で指定する。配列の最後の値は返り値になる
        // ref: http://qiita.com/putan/items/d40907545e1fbb1ad4aa
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