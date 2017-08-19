<?php

use PHPUnit\Framework\TestCase;

require 'CsvFileIterator.php';

class DataTest3 extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        $dirname = getcwd();
        return new CsvFileIterator($dirname . '/ch2/data.csv');
    }
}