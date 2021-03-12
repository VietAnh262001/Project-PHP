<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomRagrating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_ragrating', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('room_id')->on('room');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->string('star_number');
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
        Schema::dropIfExists('room_ragrating');
    }
}
