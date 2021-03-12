<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeluser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id','name','email','phone','address','password','created_at','updated_at'];
}
