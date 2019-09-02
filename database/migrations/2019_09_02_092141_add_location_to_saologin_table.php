<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationToSaologinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('saologin_infos', function (Blueprint $table) {
            //
            $table->enum('location',['台灣','香港'])->after('phone')->default('台灣');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('saologin_infos', function (Blueprint $table) {
            //
        });
    }
}
