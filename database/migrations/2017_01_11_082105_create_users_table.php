<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('gender')->default(0);
            $table->string('address')->nullable();
            $table->text('bio');
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->string('facebook')->nullable();
            $table->string('gmail')->nullable();
            $table->string('github')->nullable();
            $table->string('avatar_image');
            $table->string('grade');
            $table->string('major');
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
