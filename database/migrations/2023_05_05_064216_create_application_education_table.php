<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_education', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('application_id');
            $table->string('country')->nullable();
            $table->string('institute')->nullable();
            $table->string('level')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('application_education');
    }
}
