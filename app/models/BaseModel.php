<?php

namespace App\Models;

use PDO;

class BaseModel
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
    public static function all()
    {
        $model = new static;
        $query = "SELECT * FROM " . $model->table;
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
        static function destroy($id)
    {
        $model = new static;
        $query = "DELETE FROM " . $model->table . " WHERE ID  = $id";
        // dd($query);
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
    }
    static function find($id)
    {
        $model = new static;
        $query = "SELECT * FROM " . $model->table . " WHERE ID  = $id";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }
    static function where($col, $con, $val){
        $model = new static;
        // vì là nn thông dịch nên thuộc tính tạo ra lúc nào cx đc khác vs nn biên dịch như jav c#
        $model->query = "SELECT * FROM " . $model->table . " WHERE $col $con '$val'";
        // dd($model->query);
        return $model;
    }
    public function andWhere($col, $con, $val){
        $this->query .= "and $col $con '$val'";
        return $this;
    }
    public function get(){
        $stmt = $this->conn->prepare($this->query);
        $stmt -> execute();
        return $stmt->fetchAll();
    }
}
