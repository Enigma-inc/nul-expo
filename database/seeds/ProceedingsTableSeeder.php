<?php

use Illuminate\Database\Seeder;
use App\Proceeding;

class ProceedingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proceedingsStr = file_get_contents('database/seeds/data/proceedings.json');
        $proceedingsArr = json_decode($proceedingsStr, true);

        foreach ($proceedingsArr as $proceeding) {
            Proceeding::create([
                'index' => $proceeding['index'],
                'title' => $proceeding['title'],
                'authors' => $proceeding['authors'],
                'doc' => $proceeding['doc'],

            ]);
        }
    }
}
