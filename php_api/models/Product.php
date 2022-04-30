<?php

include_once "../../config/Database.php";

abstract class Product
{
    public $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    abstract public function read();
}
