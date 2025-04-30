<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_exps', function (Blueprint $table) {
            $table->id('aeid');
            $table->integer('job_application_id');
            $table->string('company_name');
            $table->string('position');
            $table->string('details');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('reason_for_job_change');
            $table->string('other');
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
        Schema::dropIfExists('applicant_exps');
    }
}
