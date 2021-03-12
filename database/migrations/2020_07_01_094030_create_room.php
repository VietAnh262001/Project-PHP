<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('room', function (Blueprint $table) {
            $table->Increments('room_id');
            $table->string('name');
            $table->string('image');
            $table->float('price',13,3);
            $table->string('description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')
            ->on('room_category')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('content');
            $table->string('area');
            $table->string('bed');
            $table->string('bath');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('location_id')
            ->on('location')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('room');
    }
}
