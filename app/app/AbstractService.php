<?php

namespace M2i\Framework;

use M2i\Framework\DAO;

abstract class AbstractService
{
    protected $connection = null;

    public function __construct()
    {
        try {
            $this->connection = (new DAO)->getConnection();
        } catch (\PDOException $e) {
            dd($e);
        }
    }
}