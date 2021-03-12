<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelroom extends Model
{
    protected $table = 'room';
    protected $fillable = ['room_id','name','image','price','description','category_id','content','area','bed','bath','location_id','status'];
}
