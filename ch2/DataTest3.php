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

        var_dump($dirname);
        var_dump(__FILE__);
        var_dump(dirname(__FILE__));
        var_dump(basename(__FILE__));
        var_dump(__DIR__);
        echo ('-------------\n');

        return new CsvFileIterator($dirname . '/ch2/data.csv');
    }
}