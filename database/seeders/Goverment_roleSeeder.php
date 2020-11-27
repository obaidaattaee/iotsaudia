<?php

namespace Database\Seeders;

use App\Models\GovermentRole ;
use Illuminate\Database\Seeder;

class Goverment_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GovermentRole::factory()->count(5)->create();
    }
}
