<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function($table){
            $table->increments('id');
            $table->string('user');
            $table->string('name');
            $table->string('image');
            $table->string('password', 60);
            $table->string('salt', 60);
            $table->tinyInteger('level');
            $table->enum('status',['1', '0']);
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
        Schema::drop('user');
    }
}
