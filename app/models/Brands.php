<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
class Brands extends Model
{
    protected $table = 'brands';
function insert_brands($tenloai){
    $sql="insert into brands(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_brands($id){
    $sql="delete from brands where id=".$id;
    pdo_execute($sql);
}
function loadall_brands(){
    $sql=" select * from brands order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone($id){
    $sql=" select * from brands where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_brands($id,$tenloai){
    $sql="update brands set name='".$tenloai."'where id=".$id;
    pdo_execute($sql);
}


}
