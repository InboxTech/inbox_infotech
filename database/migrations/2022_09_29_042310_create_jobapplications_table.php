<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobapplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobapplications', function (Blueprint $table) {
            $table->id('job_application_id');
            $table->integer('job_post_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('citizenship');
            $table->date('date_of_birth');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('phone_no');
            $table->string('email_id');
            $table->integer('ready_to_reallocates');
            $table->string('resume');
            $table->string('photo');
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
        Schema::dropIfExists('jobapplications');
    }
}
