<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_users', function (Blueprint $table) {

        $table->unsignedBigInteger('id', true);
        $table->unsignedBigInteger('event_id');
        $table->string('name');
        $table->string('kana');
        $table->string('email');
        $table->integer('tel');
        $table->integer('kids_age');
        $table->string('comment')->nullable($value = true);
        $table->softDeletes()->nullable($value = true);
        $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
        $table->foreign('event_id')->references('id')->on('events');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_users');
    }

    
}
