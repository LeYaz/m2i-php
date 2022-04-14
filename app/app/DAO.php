<?php

namespace M2i\Framework;


class DAO
{
    private $connection = null;

    public function __construct()
    {
        try {
            $this->connection = new \PDO("mysql:host=mysql;dbname=dbphp", "root", "paris");
        } catch (\PDOException $e) {
            dd($e);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}