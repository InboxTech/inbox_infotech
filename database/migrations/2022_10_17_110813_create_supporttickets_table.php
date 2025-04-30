<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupportticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supporttickets', function (Blueprint $table) {
            $table->id();
            $table->integer('cust_id');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->integer('project_id');
            $table->string('subject');
            $table->string('priority')->nullable;
            $table->string('message');
            $table->string('status');
            $table->string('finalstatus');
            $table->dateTime('approxclosetime')->nullable;
            $table->string('image')->nullable;
            $table->integer('replystatus')->nullable;
            $table->timestamp('deleted_at')->nullable;
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
        Schema::dropIfExists('supporttickets');
    }
}
