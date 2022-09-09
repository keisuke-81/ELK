<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_categories', function (Blueprint $table) {

        $table->unsignedBigInteger('event_id');
        $table->unsignedBigInteger('category_id');
        $table->foreign('event_id')->references('id')->on('events');
        $table->foreign('category_id')->references('id')->on('categories');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_categories');
    }
}
