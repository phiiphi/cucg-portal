<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemesterCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('semesterRegcourse_id')->unsigned();
            $table->string('course_id')->unique();


            $table->foreign('course_id')->references('course_code')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('semesterRegcourse_id')->references('id')->on('semester_regcourses');
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
        Schema::dropIfExists('semester_courses');
    }
}
