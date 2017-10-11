<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitionRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exhibition_register', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->string('business');
            $table->string('email');
            $table->string('country');
            $table->string('country_flag');
            $table->string('country_phone_code');
            $table->string('phone');
            $table->text('summary');
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
        Schema::dropIfExists('exhibition_register');
    }
}
