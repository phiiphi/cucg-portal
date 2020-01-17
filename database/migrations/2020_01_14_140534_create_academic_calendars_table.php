<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_calendars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('week');
            $table->longText('activity')->nullable();
            $table->string('color',7);
            $table->dateTime('start');
            $table->dateTime('end');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_calendars');
    }
}
