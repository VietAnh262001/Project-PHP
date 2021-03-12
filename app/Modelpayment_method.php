<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelpayment_method extends Model
{
    protected $table = 'payment_method';
    protected $fillable = ['id','name','status','prioty'];
}
