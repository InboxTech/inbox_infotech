<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_desc');
            $table->text('long_desc');
            $table->string('meta_tags')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('con_tag')->nullable();
            $table->string('imaage')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('noindex_tag');
            $table->string('tax1')->nullable();
            $table->string('tax2')->nullable();
            $table->string('tax3')->nullable();
            $table->string('tax4')->nullable();
            $table->string('tax5')->nullable();
            $table->string('createdby')->nullable();
            $table->string('updatedby')->nullable();
            $table->string('status')->nullable();
            $table->string('deleted_at')->nullable();

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
        Schema::dropIfExists('services');
    }
}
