<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCategory_gallery extends Model
{
    protected $table = 'category_gallery';
    protected $fillable = ['id','name','status'];
}
