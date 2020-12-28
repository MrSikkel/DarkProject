<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DateCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DateCourse', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Course_id');
            $table->foreign('Course_id')->references('id')->on('Course');
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
        Schema::dropIfExists('DateCourse');
    }
}
