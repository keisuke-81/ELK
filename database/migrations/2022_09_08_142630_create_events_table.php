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
            $table->unsignedBigIncrements('id',true);
            $table->string('title');
            $table->unsignedBigIncrements('school_id');
            $table->datetime('event_day');
            $table->string('area');
            $table->integer('target_min_age');
            $table->integer('target_max_age');
            $table->longText('content');
            $table->longText('constnt_summary');
            $table->integer('price');
            $table->boolean('price_free');
            $table->boolean('my_event');
            $table->string('event_url');
            $table->enum('status',['wait','open','end']);
            $table->softDeletes();
            $table->timestamps('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamps('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('school_id')->references('id')->on('users');


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
