<?php


namespace app\models\database;

use app\interfaces\database\ITypeDatabase;
use app\models\database\Connection;
use app\models\database\ConnectPdoDatabse;

class TypePdoDatabase implements ITypeDatabase
{

    private $pdo;
    private $objectPdo;

    public function __construct()
    {
        $this->pdo = new Connection(new ConnectPdoDatabse());
        $this->pdo = $this->pdo->connectDatabase();
    }

    public function prepare($sql)
    {
        $this->objectPdo = $this->pdo->prepare($sql);
    }

    public function bindValue($key, $value)
    {
        $this->objectPdo->bindValue($key, $value);
    }

    public function execute()
    {
        return $this->objectPdo->execute();
    }

    public function rowCount()
    {
        return $this->objectPdo->rowCount();
    }

    public function fetch()
    {
        return $this->objectPdo->fetch();
    }

    public function fetchAll()
    {
        return $this->objectPdo->fetchAll();
    }

    public function commit()
    {
        return $this->pdo->commit();
    }

    public function beginTransaction()
    {
        return $this->pdo->beginTransaction();
    }

    public function rollback()
    {
        return $this->pdo->rollback();
    }

    public function getBind()
    {
        return $this->objectPdo;
    }

}