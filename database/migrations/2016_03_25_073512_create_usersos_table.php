<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_sos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('facebook_id');
            $table->string('username', 60);
            $table->string('email', 60);
            $table->string('avatar');
            $table->string('facebook_token', 250);
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_sos');
    }
}
