<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelroomservice extends Model
{
    protected $table = 'rooms_service';
    protected $fillable = ['id','service_id','room_id','status'];
}
