<?php

namespace App;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'root', '');
    }
    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute();
    }
    public function query($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if ($res !== false) return $sth->fetchAll();
        return [];
    }
}