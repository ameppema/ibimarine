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
            $table->string('length',100)->default('-')->nullable();
            $table->string('beam',100)->default('-')->nullable();
            $table->string('engines',100)->default('-')->nullable();
            $table->string('c_velocity',100)->default('-')->nullable();
            $table->string('max_speed',100)->default('-')->nullable();
            $table->string('fuel_comsuption',100)->default('-')->nullable();
            $table->string('pax',100)->default('-')->nullable();
            $table->string('bathroom',100)->default('-')->nullable();
            $table->string('cabins',100)->default('-')->nullable();
            $table->string('year',100)->default('-')->nullable();
            $table->string('port',100)->default('-')->nullable();
            $table->string('model',100)->default('-')->nullable();

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
            $table->dropIfExists('boat_features');
        });
    }
}
