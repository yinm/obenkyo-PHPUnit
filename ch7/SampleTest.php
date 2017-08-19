<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSomething()
    {
        $this->assertTrue(true, 'これは動いているはずですよ');

        $this->markTestIncomplete(
            'このテストはまだ実装されていませんよ'
        );
    }
}