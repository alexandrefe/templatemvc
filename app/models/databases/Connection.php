<?php


namespace app\models\databases;


use app\interfaces\IConnectDatabase;

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