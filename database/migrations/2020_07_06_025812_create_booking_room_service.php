<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRoomService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_room_service', function (Blueprint $table) {
            $table->integer('booking_room_id')->unsigned();
            $table->foreign('booking_room_id')->references('booking_room_id')
            ->on('booking_room')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('room_id')
            ->on('room')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('status');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('service_id')
            ->on('service')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('quatity');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_room_service');
    }
}
