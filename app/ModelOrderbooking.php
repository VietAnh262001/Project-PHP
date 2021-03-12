<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class ModelOrderbooking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['booking_id','user_id','name','email','phone','address','city','country','total','start_date','end_date','note','payment_id','status'];

    

public function scopeBooking($query)
{
    $query = DB::table('booking')
    ->join('user','user.user_id','=','booking.user_id')
    ->join('payment_method','payment_method.id','=','booking.payment_id')
    ->select('booking.*','user.name as user_name','payment_method.name as payment_name')
    ->get();

    return $query;
}
}
