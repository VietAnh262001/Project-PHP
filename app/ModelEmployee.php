<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelEmployee extends Model
{
    protected $table = 'employee';
    protected $fillable = ['id','name','image','status','description','position','created_at','updated_at'];
}
