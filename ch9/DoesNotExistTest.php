<?php
// ref: https://github.com/sebastianbergmann/phpunit-mock-objects/issues/322

use PHPUnit\Framework\TestCase;

class DoesNotExistTest extends TestCase
{
    public function testClassThatDoesNotExistCanBeDoubledUsingMockBuilder()
    {
        $o = $this->getMockBuilder('DoesNotExist')->getMock();

        $this->assertInstanceOf('DoesNotExist', $o);
    }
}