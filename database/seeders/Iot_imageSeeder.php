<?php

namespace Database\Seeders;

use App\Models\IotImage ;
use Illuminate\Database\Seeder;

class Iot_imageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IotImage::factory()->count(5)->create();
    }
}
