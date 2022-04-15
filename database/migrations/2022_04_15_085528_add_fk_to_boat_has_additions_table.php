<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToBoatHasAdditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boat_has_additions', function (Blueprint $table) {
            $table->foreign('boat_id')
            ->references('id')
            ->on('boats')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('addition_id')
            ->references('id')
            ->on('boat_additions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boat_has_additions', function (Blueprint $table) {
            //
        });
    }
}
