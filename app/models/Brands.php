<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
class Brands extends Model
{
    protected $table = 'brands';
    public $timestamps = false;
    protected $fillable =[
        'name'
    ];


}
