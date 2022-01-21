<?php

namespace Database\Factories;

use App\Facades\ApiToken;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $app = ApiToken::generate();
        return [
            'name' => $this->faker->name,
            'app_key' => $app['app_key'],
            'app_secret' => $app['app_secret']
        ];
    }
}
