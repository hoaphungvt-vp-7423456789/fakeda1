<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// use App\Models\BaseModel;
use PDO;
use PDOException;

class Brands extends Model
{
    protected $table = 'brands';
<<<<<<< HEAD
    function pdo_get_connection()
    {
        $dburl = "mysql:host=localhost;dbname=da1;charset=utf8";
        $username = 'root';
        $password = '';
=======
    public $timestamps = false;
    protected $fillable =[
        'name'
    ];

>>>>>>> b3b5449ba37a3548d02f134b6185ae18d49d6e43

        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    /**
     * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
     * @param string $sql câu lệnh sql
     * @param array $args mảng giá trị cung cấp cho các tham số của $sql
     * @throws PDOException lỗi thực thi câu lệnh
     */
    function pdo_execute($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    /**
     * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
     * @param string $sql câu lệnh sql
     * @param array $args mảng giá trị cung cấp cho các tham số của $sql
     * @return array mảng các bản ghi
     * @throws PDOException lỗi thực thi câu lệnh
     */
    function pdo_query($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    /**
     * Thực thi câu lệnh sql truy vấn một bản ghi
     * @param string $sql câu lệnh sql
     * @param array $args mảng giá trị cung cấp cho các tham số của $sql
     * @return array mảng chứa bản ghi
     * @throws PDOException lỗi thực thi câu lệnh
     */
    function pdo_query_one($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    /**
     * Thực thi câu lệnh sql truy vấn một giá trị
     * @param string $sql câu lệnh sql
     * @param array $args mảng giá trị cung cấp cho các tham số của $sql
     * @return giá trị
     * @throws PDOException lỗi thực thi câu lệnh
     */
    function pdo_query_value($sql)
    {
        $sql_args = array_slice(func_get_args(), 1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return array_values($row)[0];
        } catch (PDOException $e) {
            throw $e;
        } finally {
            unset($conn);
        }
    }
    function insert_brands($tenloai)
    {
        $sql = "insert into brands(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_brands($id)
    {
        $sql = "delete from brands where id=" . $id;
        pdo_execute($sql);
    }
    function loadall_brands()
    {
        $sql = "select * from brands order by id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone($id)
    {
        $sql = " select * from brands where id=" . $id;
        $dm = pdo_query_one($sql);
        return $dm;
    }
    function update_brands($id, $tenloai)
    {
        $sql = "update brands set name='" . $tenloai . "'where id=" . $id;
        pdo_execute($sql);
    }
}
