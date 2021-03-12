<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_room', function (Blueprint $table) {
            $table->Increments('booking_room_id');
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')->references('booking_id')->on('booking');
            $table->string('price');
            $table->string('status');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('room_id')->on('room');
            $table->string('adults');
            $table->string('childrens');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_room');
    }
}
