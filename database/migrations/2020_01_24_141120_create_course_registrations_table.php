<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('session');
            $table->string('firstName');
            $table->string('otherName');
            $table->string('surName');
            $table->string('department');
            $table->integer('level');
            $table->string('semester');
            $table->string('faculty');
            $table->string('course');
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
        Schema::dropIfExists('course_registrations');
    }
}
