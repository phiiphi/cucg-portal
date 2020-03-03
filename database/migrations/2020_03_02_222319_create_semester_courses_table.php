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
            $table->integer('course_code')->unique();
            $table->integer('semestercoursesregistration_id');

            $table->foreign('course_code')->references('course_code')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('semestercoursesregistration')->references('id')->on('student_course_registrations')->onUpdate('cascade')->onDelete('cascade');
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
