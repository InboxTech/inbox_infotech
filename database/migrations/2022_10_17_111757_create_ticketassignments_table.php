<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketassignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketassignments', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_id');
            $table->integer('toassignuser_id')->nullable;
            $table->integer('myassignuser_id')->nullable;
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
        Schema::dropIfExists('ticketassignments');
    }
}
