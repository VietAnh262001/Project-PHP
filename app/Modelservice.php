<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelservice extends Model
{
    protected $table = 'service';
    protected $fillable = ['service_id','name','price','description','image'];
}
