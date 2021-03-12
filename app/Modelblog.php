<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelblog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['blog_id','name','slug','image','summary','content','status','meta_key','meta_title','meta_descript','created_at','updated_at'];
}
