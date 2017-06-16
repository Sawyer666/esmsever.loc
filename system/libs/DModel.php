<?php

class DModel extends DataBase
{
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'esmsever_db';
        parent::__construct(array('host' => $host, 'username' => $user, 'passwd' => $pass, 'dbname' => $dbname));
    }
}

?>