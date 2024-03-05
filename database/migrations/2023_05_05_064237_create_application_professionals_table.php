<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_professionals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('application_id');
            $table->string('country')->nullable();
            $table->string('internship')->nullable();
            $table->string('company')->nullable();
            $table->string('whether')->nullable();
            $table->string('experience_duration')->nullable();
            $table->string('experience_type')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_contact')->nullable();
            $table->string('designation')->nullable();
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
        Schema::dropIfExists('application_professionals');
    }
}
