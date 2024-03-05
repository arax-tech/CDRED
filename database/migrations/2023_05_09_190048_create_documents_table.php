<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('application_id');
            $table->string('id_proof')->nullable('');
            $table->string('name_change_evidence')->nullable('');
            $table->string('work_experience_letter')->nullable('');
            $table->string('appointment_letter')->nullable('');
            $table->string('pay_slips')->nullable('');
            $table->string('resume')->nullable('');
            $table->string('salary_statement')->nullable('');
            $table->string('apprenticeship_certificate')->nullable('');
            $table->string('affidavit')->nullable('');
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
        Schema::dropIfExists('documents');
    }
}
