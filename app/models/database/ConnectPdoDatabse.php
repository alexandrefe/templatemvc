<?php


namespace app\models\database;

use app\interfaces\database\IConnectDatabase;
use PDO;

class ConnectPdoDatabse implements IConnectDatabase
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost; charset=utf8; dbname=totest","root","");
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function connectDatabase()
    {
        return $this->pdo;
    }
}