<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('firstName');
            $table->string('lastName'); 
            $table->string('email')->unique();
            $table->integer('phoneNumber'); 
            $table->string('mission'); 
            $table->string('logoURL'); 
            $table->string('bannerURL'); 
            $table->string('siteLink'); 
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
