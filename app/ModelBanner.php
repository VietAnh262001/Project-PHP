<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBanner extends Model
{
    protected $table = 'banner';
    protected $fillable = ['id','name','image','link','prioty','position','status','descript'];
}
