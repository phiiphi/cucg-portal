<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveAcademicYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_academic_years', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('academicyear_id')->unsigned();
            $table->string('status');

            $table->foreign('academicyear_id')->references('id')->on('academic_years')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('active_academic_years');
    }
}
