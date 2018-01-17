<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreColumnsToNulisticeEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nulistice_events', function(Blueprint $table){
            $table->string('session_title')
                  ->after('time');
            $table->text('keynote')->nullable()
                  ->after('session_title');
            $table->boolean('status')->default(0)
                  ->after('keynote');
            $table->string('presenter')
                  ->after('status');   
            $table->string('presenter_country')
                  ->after('presenter');   
            $table->string('presenter_country_flag')
                  ->after('presenter_country');   
            $table->string('chair')
                  ->after('presenter_country_flag');
            $table->string('chair_country')
                  ->after('chair');
            $table->string('chair_country_flag')
                  ->after('chair_country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nulistice_events', function(Blueprint $table){
            $table->dropColumn('session_title');
            $table->dropColumn('keynote');
            $table->dropColumn('status');
            $table->dropColumn('presenter');
            $table->dropColumn('presenter_country');
            $table->dropColumn('presenter_country_flag');
            $table->dropColumn('chair');
            $table->dropColumn('chair_country');            
            $table->dropColumn('chair_country_flag');            
        });
    }
}
