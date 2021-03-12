<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResturentServiceRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resturent_service_room', function (Blueprint $table) {
            $table->id();
            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('room_id')
            ->on('room')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('image');
            $table->string('prioty');
            $table->string('status');
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
        Schema::dropIfExists('resturent_service_room');
    }
}
