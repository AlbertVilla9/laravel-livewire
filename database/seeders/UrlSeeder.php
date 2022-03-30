<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Url;
//use DB;

class UrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*
    public function run()
    {
        DB::table('url')->insert(
            ['hash' => 'dewffw', 
            'userid' => '1', 
            'urlvideo' => 'jgdsedghjkjhgf']
        );
    }
    */

    public function run()
    {
        Url::factory(1)->create();
    
    }
}
