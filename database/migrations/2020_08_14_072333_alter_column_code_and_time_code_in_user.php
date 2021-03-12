<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnCodeAndTimeCodeInUser extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('code')->nullable()->index();
            $table->timestamp('time_code')->nullable();
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn(['timecode','code']);
        });
    }
}
