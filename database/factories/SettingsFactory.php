<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Settings;

class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logo_image' => $this->faker->word,
            'slider_title' => $this->faker->text,
            'video_link' => $this->faker->word,
            'video_background_image' => $this->faker->word,
            'advantage_title' => $this->faker->word,
            'email_address' => $this->faker->email,
            'mobile_address' => $this->faker->phoneNumber,
            'location' => $this->faker->address,
            'facebook_address' => "https://facebook.com",
            'twitter' => "https://twitter.com",
            'instagram' => "https://instagram.com",
            'youtube' => "https://youtube.com",
        ];
    }
}
