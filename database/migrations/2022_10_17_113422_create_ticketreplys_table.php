<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketreplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketreplys', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_id');
            $table->string('image')->nullable;
            $table->string('comment')->nullable;
            $table->integer('commentby')->nullable;            
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
        Schema::dropIfExists('ticketreplys');
    }
}
