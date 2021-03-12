<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modeluseradmin extends Model
{
    protected $table = 'useradmin';
    protected $fillable = ['admin_id','admin_email','admin_password','admin_name','admin_phone'];
}
