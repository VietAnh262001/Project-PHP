<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
     protected $table = 'room_category';
    protected $fillable = ['category_id','name','slug','image','status','meta_title','meta_descritp','prioty','meta_keyword'];
}
