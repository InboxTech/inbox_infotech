<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_qualifications', function (Blueprint $table) {
            $table->id('aqid');
            $table->integer('job_application_id');
            $table->string('name_of_the_examination');
            $table->string('name_of_the_boardoruniversity');
            $table->string('name_of_the_institution');
            $table->date('year_of_passing');
            $table->string('cgpa');
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
        Schema::dropIfExists('applicant_qualifications');
    }
}
