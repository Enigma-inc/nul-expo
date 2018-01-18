<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRerisEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reris_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_title');
            $table->string('title');
            $table->string('room')->nullable();
            $table->string('time');
            $table->text('keynote');
            $table->string('presenter');
            $table->string('presenter_country');
            $table->string('presenter_country_flag');
            $table->string('chair');
            $table->string('chair_country');
            $table->string('chair_country_flag');
            $table->boolean('status')->default(0);
            $table->text('body')->nullable();
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
        Schema::dropIfExists('reris_events');
    }
}
