<?php
use PHPUnit\Framework\TestCase;

class ArrayWeakComparisonTest extends TestCase
{
    public function testEquality() {
        $this->assertSame(
            [1, 2, 3, 4, 5, 6],
            [1, 2, 3, 4, 5, 6]
        );
    }
}