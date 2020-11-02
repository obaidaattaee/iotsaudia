<?php

namespace Database\Seeders;

use App\Models\Chance ;
use Illuminate\Database\Seeder;

class ChanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chance ::factory()->count(5)->create();
    }
}
