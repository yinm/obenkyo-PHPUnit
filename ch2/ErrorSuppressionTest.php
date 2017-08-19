<?php

use PHPUnit\Framework\TestCase;

require 'FileWriter.php';

class ErrorSuppressionTest extends TestCase
{
    public function testFileWriting()
    {
        $writer = new FileWriter;
        $this->assertFalse(@$writer->write('/is-not-writable/file', 'stuff'));
    }
}
