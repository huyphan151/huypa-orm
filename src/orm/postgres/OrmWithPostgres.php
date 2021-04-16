<?php
namespace App;

class OrmWithPostgres
{   
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;
    private $port;

    public function connect()
    {
        $this->serverName = '127.0.0.1';
        $this->userName = 'postgres';
        $this->password = 123;
        $this->databaseName = 'postgres';
        $this->port = 5432;
        $connection = pg_connect("host = $this->serverName port = $this->port dbname = $this->databaseName user= $this->userName password = $this->password");

        if (!($connection)) {
            return false;
        }
        else {
            echo "successful connect";
            return true;
        }
    }

    public function select($table)
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