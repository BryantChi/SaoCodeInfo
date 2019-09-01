<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaoadminInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saoadmin_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name')->nullable();
            $table->boolean('is_enabled');
            $table->text('Token')->nullable();
            $table->dateTime('login_at')->nullable();
            $table->timestamps();
        });

        mt_srand((float) microtime() * 10000);
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $charid = strtolower($charid);

        DB::insert('insert into saoadmin_infos (email, password, name, is_enabled, Token, login_at, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', ['admin@powerchi.com.tw', Hash::make('admin'), 'Admin', true, $charid, date("Y-m-d H:i:s"), date("Y-m-d H:i:s"), date("Y-m-d H:i:s")]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saoadmin_infos');
    }
}
