<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modellocation extends Model
{
   protected $table = 'location';
   protected $fillable = ['location_id','name','status','prioty'];
}
