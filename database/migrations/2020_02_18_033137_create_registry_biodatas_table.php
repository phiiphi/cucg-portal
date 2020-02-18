<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistryBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registry_biodatas', function (Blueprint $table) {
            $table->integer('Entry Number');
            $table->string('Student Number',13)->unique();
            $table->string('Legon id');
            $table->string('Lastname');
            $table->string('Othername');
            $table->date('Date of Birth');
            $table->char('Gender');
            $table->string('Permanent Address');
            $table->integer('Phone Number');
            $table->string('Home Town');
            $table->string("Marital Status");
            $table->string('Faculty');
            $table->string('Programme');
            $table->integer('Level');
            $table->integer('Level of Entry');
            $table->string('Admission Type');
            $table->string('Student Stream');
            $table->string('Year of Admission');
            $table->string('Active Status');
            $table->string('Entry Qualification');
            $table->string('Admission Status');
            $table->integer('Aggregate');
            $table->string('Nationality');

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
        Schema::dropIfExists('registry_biodatas');
    }
}
