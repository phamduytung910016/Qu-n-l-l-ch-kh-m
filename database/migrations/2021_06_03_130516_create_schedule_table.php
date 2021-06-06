<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('dob')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('sex');
            $table->string('home_address')->nullable();
            $table->integer('service_id');
            $table->string('room_patients')->nullable();
            $table->string('reason')->nullable();
            $table->date('date');
            $table->integer('time_id');
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
        Schema::dropIfExists('schedule');
    }
}
