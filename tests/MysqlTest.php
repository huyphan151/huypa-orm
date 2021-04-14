<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Mysql;

class MysqlTest extends TestCase
{
    public function testMysqlConnection()
    {
        $mysql = new Mysql();
        $result = $mysql->connect('127.0.0.1', 'root','');
        $this->assertTrue($result);
    }
}
?>