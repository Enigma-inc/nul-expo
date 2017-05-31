<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('organisation')->nullable();
            $table->string('country')->nullable();
            $table->string('country_flag')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('physical_address')->nullable();
            $table->string('abstract')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}
