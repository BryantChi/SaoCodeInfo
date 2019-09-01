<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaologinInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saologin_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fbUid')->unique()->nullable();
            $table->string('fbName')->nullable();
            $table->string('fbMail')->nullable();
            $table->string('phone')->unique();
            $table->string('SMS_verification')->default(1);
            $table->string('Mail_verification')->default(1);
            $table->string('LoginTime');
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
        Schema::dropIfExists('saologin_infos');
    }
}
