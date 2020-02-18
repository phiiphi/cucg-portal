<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            #$table->string('ProgramOpt_id')->primary();
            $table->string('student_id');
            $table->foreign('student_id')->references('index_number')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Option_name');

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
        Schema::dropIfExists('program_options');
    }
}
