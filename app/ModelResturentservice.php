<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelResturentservice extends Model
{
    protected $table = 'resturent_service';
    protected $fillable = ['id','name','price','description','image','status'];
}
