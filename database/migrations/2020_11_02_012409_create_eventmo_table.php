<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventmoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventmos', function (Blueprint $table) {
            $table->id();
            $table->string('eventname');
            $table->string('description');
            $table->integer('userid');
            $table->integer('familyid');
            $table->integer('postsid');
            $table->nullableTimestamps('updated_at');
            $table->nullableTimestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventmos');
    }
}
