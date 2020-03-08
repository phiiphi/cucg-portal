<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('studentid',50);
            $table->string('password',225);
            $table->string('name',50);
            $table->string('phone',50);
            $table->string('email',50);
            $table->string('dob',50);
            $table->string('nationality',50);
            $table->string('programme',50);
            $table->string('ProgrammeOption');
            $table->string('level',50);
            $table->string('semester',50);
            $table->string('academic_year',50);
            $table->string('status',50);
            $table->longText('courses');
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
        Schema::dropIfExists('registered_courses');
    }
}
