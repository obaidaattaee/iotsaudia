<?php

namespace Database\Seeders;

use App\Models\Advantage ;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advantage ::factory()->count(5)->create();
    }
}
