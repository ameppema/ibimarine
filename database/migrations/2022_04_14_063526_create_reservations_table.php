<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boat_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('made_by');
            $table->text('client_name');
            $table->text('client_phone');
            $table->integer('status');
            $table->text('observations')->nullable();
            $table->unsignedBigInteger('last_updated_by');

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
        Schema::dropIfExists('reservations');
    }
}
