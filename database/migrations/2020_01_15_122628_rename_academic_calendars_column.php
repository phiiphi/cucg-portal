<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAcademicCalendarsColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('academic_calendars', function (Blueprint $table) {
            $table->renameColumn('week', 'title');
            $table->renameColumn('activity', 'description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('academic_calendars', function (Blueprint $table) {
            $table->renameColumn('title', 'week');
            $table->renameColumn('registration', 'activity');
        });
    }
}
