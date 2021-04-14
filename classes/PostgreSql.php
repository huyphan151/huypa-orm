<?php
namespace App;


class PostgreSql
{
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;
    private $port;

    public function connect($setServerName, $setPort, $setDatabaseName, $setUserName, $setPassword)
    {
        $this->serverName = $setServerName;
        $this->userName = $setUserName;
        $this->password = $setPassword;
        $this->databaseName = $setDatabaseName;
        $this->port = $setPort;
        $connection = pg_connect("host = $this->serverName port = $this->port dbname = $this->databaseName user= $this->userName password = $this->password");

        if (!($connection)) {
            return false;
        }
        else {
            echo "successful connect";
            return true;
        }
    }
}