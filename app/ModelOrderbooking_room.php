<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ModelOrderbooking_room extends Model
{
    protected $table = 'booking_room';
    protected $fillable = ['booking_room_id','booking_id','name','price','status','room_id','start_date','end_date'];

    public function scopeBookingroom($query)
    {
    	$query = DB::table('booking_room')
    	->join('booking','booking.booking_id','=','booking_room.booking_id')
    	->join('room','room.room_id','=','booking_room.room_id')
    	->select('booking_room.*','room.name as room_name','room.room_id')
    	->get();

    	return $query;
    }
}
