<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->Increments('booking_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('total');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('note');
            $table->BigInteger('payment_id')->unsigned();
            $table->foreign('payment_id')->references('id')->on('payment_method');
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
        Schema::dropIfExists('booking');
    }
}
