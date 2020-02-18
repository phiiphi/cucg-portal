<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('index_number',13)->unique();
            $table->string('last_name');
            $table->string('other_names');
            $table->string('email')->unique();
            $table->boolean('isverified')->default(false);
            $table->integer('phone')->unique();
            $table->string('gender');
            $table->integer('level');
            $table->string('password');
            $table->rememberToken();

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
        Schema::dropIfExists('students');
    }
}
