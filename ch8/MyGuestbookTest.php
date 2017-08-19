<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

class MyGuestbookTest extends TestCase
{
    use TestCaseTrait;

    /**
     * @return \PHPUnit\DbUnit\Database\DefaultConnection
     */
    public function getConnection()
    {
        $pdo = new PDO('sqlite::memory:');
        return $this->createDefaultDBConnection($pdo, ':momery:');
    }

    /**
     * @return \PHPUnit\DbUnit\DataSet\FlatXmlDataSet
     */
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(__DIR__ . '/_files/guestbook-seed.xml');
    }
}