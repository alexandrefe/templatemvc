<?php


namespace app\models\database;

use app\interfaces\database\ITypeDatabase;

class TypeDatabase
{
    private $iTypeDatabase;

    public function __construct(ITypeDatabase $iTypeDatabase){
        $this->iTypeDatabase = $iTypeDatabase;
    }

    public function getDatabase(){
        return $this->iTypeDatabase;
    }
}