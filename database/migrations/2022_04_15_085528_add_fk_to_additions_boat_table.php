<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToAdditionsBoatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('additions_boat', function (Blueprint $table) {
            $table->foreign('additions_id')
            ->references('id')
            ->on('additions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('boat_id')
            ->references('id')
            ->on('boats')
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
        Schema::table('additions_boat', function (Blueprint $table) {
            $table->dropForeign('boat_id');
            $table->dropForeign('additions_id');
        });
    }
}
