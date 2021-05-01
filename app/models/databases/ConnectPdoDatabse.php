<?php


namespace app\models\databases;

use app\interfaces\IConnectDatabase;

class ConnectPdoDatabse implements IConnectDatabase
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO("mysql:host=localhost; charset=utf8; dbname=paratestar","root","");
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function connectDatabase()
    {
        return $this->pdo;
    }
}