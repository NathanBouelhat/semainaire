<?php
class ModelsEvenement{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=seminaire", "root", "");
    }
}