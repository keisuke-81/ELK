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
        $table->integar('tel');
        $table->integer('kids_age');
        $table->string('comment')->nullable($value = true);
        $table->softDeletes()->nullable($value = true);
        $table->foreign('event_id')->references('id')->on('events');
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
        Schema::dropIfExists('event_users');
    }
}
