<?php


namespace app\models\database;

use app\interfaces\database\IConnectDatabase;

class Connection implements IConnectDatabase
{
    private $iConnectDatabase;

    public function __construct(IConnectDatabase  $iConnectDatabase)
    {
        $this->iConnectDatabase = $iConnectDatabase;
    }

    public function connectDatabase()
    {
        return $this->iConnectDatabase->connectDatabase();
    }
}