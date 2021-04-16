<?php
namespace App\orm\mysql;

use mysqli;

class OrmWithMysql
{   
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;
    private $connection;

    public function __construct()
    {
        $this->serverName = '127.0.0.1';
        $this->userName = 'root';
        $this->password = '';
        $this->databaseName = 'testOOP';
        $this->connection = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);

        if (!($this->connection)) {
            return false;
        }
        else {
            return true;
        }
    }

    public function selectAll($table)
    {
        $selectRow = $this->connection->query('select * from ' . $table);
        if ($selectRow) {
            return $selectRow;
        }
        else {
            return false;
        }
    }

    public function getByCondition($query)
    {
        $getRow = $this->connection->query($query);
        if ($getRow) {
            return $getRow;
        }
        else {
            return false;
        }
    }

    public function selectById($table , $id)
    {
        $selectRow = $this->connection->query('select * from ' . $table . ' where id = ' . $id);
        if ($selectRow) {
            return $selectRow;
        }
        else {
            return false;
        }
    }

    public function hasMany($table , $targetTable , $targetId)
    {
        $query = 'select * from '.$table." where target_table = '" . $targetTable . "' and target_id = " . $targetId;
        $selectRow = $this->connection->query($query);
        if ($selectRow) {
            return $selectRow;
        }
        else {
            return false;
        }
    }

    public function belongsTo($leftTable , $rightTable , $targetTable , $id)
    {
        $query = 'select ' . $leftTable . '.* from ' . $leftTable .
                 ' join ' . $rightTable .
                 ' on ' . $rightTable . '.target_id = ' . $leftTable . '.id
                   where ' . $rightTable . ".target_table = '" . $targetTable . "' and " . $rightTable . '.id = ' . $id;

        $selectRow = $this->connection->query($query);
        if ($selectRow) {
            return $selectRow;
        }
        else {
            return false;
        }
    }
}

?>