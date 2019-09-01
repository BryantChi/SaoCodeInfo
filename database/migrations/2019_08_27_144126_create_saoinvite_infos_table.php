<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaoinviteInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saoinvite_infos', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('loginId');
            $table->string('loginfbUid')->unique()->nullable();
            $table->string('invitefbUid')->unique()->nullable();
            $table->string('inviteTime');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saoinvite_infos');
    }
}
