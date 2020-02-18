<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            #$table->string('ProgStatus_id')->primary();
            $table->string('student_id');
            $table->foreign('student_id')->references('index_number')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->string('ProgStatus');

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
        Schema::dropIfExists('program_statuses');
    }
}
