<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeCardsTable extends Migration
{
    /**php artisan migrate --path=database/migrations/2022_06_01_233514_create_home_cards_table.php
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('image');
            $table->string('route')->default('home');
            $table->string('locale')->default('es');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_cards');
    }
}
