<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('order')->unsigned();
            $table->integer('priority')->unsigned();
            $table->integer('is_done')->default(0);
            $table->integer('is_on_progress')->default(0);
            $table->integer('is_over_duedate')->default(0);
            $table->integer('is_pending')->default(1);
            $table->integer('is_interupted')->default(0);
            $table->date('plan_start_date');
            $table->date('actual_start_date')->nullable();
            $table->date('plan_end_date');
            $table->date('actual_end_date')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('phase_id')->unsigned();
            $table->foreign('phase_id')->references('id')->on('phases')->onDelete('cascade');
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
        Schema::dropIfExists('tasks');
    }
}
