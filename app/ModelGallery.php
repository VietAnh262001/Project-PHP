<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGallery extends Model
{
    protected $table = 'gallery';
    protected $fillable = ['id','name','image','status','prioty',];
}
