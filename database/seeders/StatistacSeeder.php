<?php

namespace Database\Seeders;

use App\Models\Statistac ;
use Illuminate\Database\Seeder;

class StatistacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statistac::factory()->count(5)->create();
    }
}
