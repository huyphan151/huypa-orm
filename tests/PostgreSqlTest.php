<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PostgreSql;

class PostgreSqlTest extends TestCase
{
    public function testMysqlConnection()
    {
        $postgre = new PostgreSql();
        $result = $postgre->connect('127.0.0.1',5432,'postgres','postgres',123);
        $this->assertTrue($result);
    }
}
?>