<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $tables = [
        'nulistice_events',


    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->cleanDatabase();

         $this->call(NulisticeEventSeeder::class);

        Model::reguard();
        
    }


    public function cleanDatabase()
    {
        
        DB::statement("SET foreign_key_checks=0");
        foreach ($this->tables as $table) {
            // DB::statement("ALTER TABLE ".$table." DISABLE TRIGGER ALL;");
            DB::table($table)->truncate();
            //  DB::statement("ALTER TABLE ".$table." ENABLE TRIGGER ALL;");
        }
        DB::statement("SET foreign_key_checks=1");

    }
}
