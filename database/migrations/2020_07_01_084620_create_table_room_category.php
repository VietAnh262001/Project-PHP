<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoomCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_category', function (Blueprint $table) {
            $table->Increments('category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('status');
            $table->string('meta_title');
            $table->string('meta_descritp');
            $table->string('prioty');
            $table->string('meta_keyword');
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
        Schema::dropIfExists('table_room_category');
    }
}
