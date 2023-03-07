<?php

namespace App\Models;

use PDO;

class Model
{
    private $hostname = 'localhost';
    private $dbname = 'da1';
    private $username = 'root';
    private $password = '';
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
