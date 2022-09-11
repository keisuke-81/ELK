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
            $table->unsignedBigInteger('id',true);
            $table->string('title');
            $table->unsignedBigInteger('school_id');
            $table->string('image_id');
            $table->datetime('event_day');
            $table->string('area')->nullable($value = true);
            $table->integer('target_min_age')->nullable($value = true);
            $table->integer('target_max_age')->nullable($value = true);
            $table->longText('content');
            $table->longText('content_summary')->nullable($value = true);
            $table->integer('price')->unsigned()->nullable($value = true);
            $table->boolean('price_free');
            $table->boolean('my_event');
            $table->string('event_url')->nullable($value = true);
            $table->enum('status',['wait','open','end']);
            $table->softDeletes();
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('school_id')->references('id')->on('schools')->nullable($value = true);



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
