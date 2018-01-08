<?php

use Illuminate\Database\Seeder;
use App\NulisticeEvent;

class NulisticeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(NulisticeEvent::class,1)->create();
    }
}
