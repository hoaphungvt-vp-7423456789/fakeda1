<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
    /**
     * Nếu bảng nào có 2 cột created_at và udpate_at thì timestamps sẽ bằng true
     * Còn nếu bảng nào không có 2 cột đó thì timestamps bằng false
     * Timestamps này sau này sẽ tự động cập nhật thông tin 2 cột đó
     * Mà mình không cần quan tâm phải cập nhật 2 cột đó thế nào nữa
     *  */
    public $timestamps = false;
    /**
     * Khai báo fillable các trường sẽ thay đổi thông tin 
     * để phục vụ cho việc insert product và update product nhanh hơn
     * vì sql này thư viện illuminate giúp mình
     */
    protected $fillable = [
        'name'
    ];
}
