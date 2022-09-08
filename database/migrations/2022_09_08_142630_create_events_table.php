<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->datetime('event_day');
            $table->string('area');
            $table->integer('target_min_age');
            $table->integer('target_max_age');
            $table->integer('price');
            $table->boolean('price_free');
            $table->boolean('my_event');
            $table->string('event_url');
            $table->enum('status',[1,2,3]);
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
        Schema::dropIfExists('events');
    }
}
