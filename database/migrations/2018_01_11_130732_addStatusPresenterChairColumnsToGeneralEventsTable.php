<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusPresenterChairColumnsToGeneralEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('general_events', function(Blueprint $table){
            $table->boolean('status')->default(0)
                  ->after('body');
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
        Schema::table('general_events', function(Blueprint $table){
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
