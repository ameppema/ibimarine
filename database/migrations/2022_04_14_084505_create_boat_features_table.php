<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoatFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boat_features', function (Blueprint $table) {
            $table->id();
            $table->text('length')->nullable('-');
            $table->text('beam')->nullable('-');
            $table->text('engines')->nullable('-');
            $table->text('c_velocity')->nullable('-');
            $table->text('max_speed')->nullable('-');
            $table->text('fuel_comsuption')->nullable('-');
            $table->text('pax')->nullable('-');
            $table->text('bathroom')->nullable('-');
            $table->text('cabins')->nullable('-');
            $table->text('year')->nullable('-');
            $table->text('port')->nullable('-');
            $table->text('model')->nullable('-');

            $table->unsignedBigInteger('boat_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boat_features', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }
}
