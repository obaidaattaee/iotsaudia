<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		// \App\Models\User::factory(10)->create();
		//
		\App\Models\User::create([
			"name" => "Admin",
			"email" => "admin@admin.com",
			"password" => bcrypt("123123123"),
		]);
		$this->call([
		    SettingsSeeder::class ,
            AdvantageSeeder::class,
            ChanceSeeder::class,
            Goverment_roleSeeder::class,
            Iot_imageSeeder::class,
            Iot_usageSeeder::class,
            StatistacSeeder::class,
        ]);
	}
}
