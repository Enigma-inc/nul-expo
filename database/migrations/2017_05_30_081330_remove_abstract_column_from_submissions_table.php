<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAbstractColumnFromSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             if(Schema::hasColumn('submissions', 'abstract')) 
                {
                    Schema::table('submissions', function (Blueprint $table) {
                        
                            $table->dropColumn('abstract');
                    });
                }        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
