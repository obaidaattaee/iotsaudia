<?php

namespace Database\Seeders;

use App\Models\IotUsage ;
use Illuminate\Database\Seeder;

class Iot_usageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IotUsage::factory()->count(5)->create();
    }
}
