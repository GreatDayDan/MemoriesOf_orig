<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moEvents', function (Blueprint $table) {
            $table->id();
//            $table->foreignid('post_id')->references('id')->on('posts');
            $table->foreignid('user->id')->references('id')->on('users');
            $table->string('event');
            $table->string('description');
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
        Schema::dropIfExists('moevents');
    }
}
