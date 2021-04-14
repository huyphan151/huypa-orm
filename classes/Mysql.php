<?php
namespace App;

use mysqli;

class Mysql
{
    private $serverName;
    private $userName;
    private $password;

    public function connect($setServerName, $setUserName, $setPassword)
    {
        $this->serverName = $setServerName;
        $this->userName = $setUserName;
        $this->password = $setPassword;
        $connection = new mysqli($this->serverName, $this->userName, $this->password);

        if (!($connection)) {
            return false;
        }
        else {
            echo "successful connect";
            return true;
        }
    }
}

