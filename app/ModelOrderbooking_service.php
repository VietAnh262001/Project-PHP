<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ModelOrderbooking_service extends Model
{
    protected $table = 'booking_room_service';
    protected $fillable = ['booking_room_id','room_id','name','price','status','resturent_service_id','quatity'];

    public function scopeBookingservice($query)
    {
    	$query = DB::table('booking_room_service')
    	->join('booking_room','booking_room.booking_room_id','=','booking_room_service.booking_room_id')
    	->join('room','room.room_id','=','booking_room_service.room_id')
    	->select('booking_room_service.*')
    	->get();
    	return $query;
    }
    
}
