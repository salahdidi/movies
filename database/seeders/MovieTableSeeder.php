<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \App\Models\Movie::factory(200)->create();
        
        
        
    }
}