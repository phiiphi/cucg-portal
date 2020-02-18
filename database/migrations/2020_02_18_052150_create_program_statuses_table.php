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
            $table->string('ProgStatus_id');
            $table->string('index_number');
            $table->foreign('index_number')->references('index_number')->on('students')->onDelete('cascade');
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
