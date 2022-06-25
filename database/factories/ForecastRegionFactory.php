<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=WeatherForecast>
 */
class ForecastRegionFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition()
    {
        return [
            'city' => 'Rzeszów',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    public function forCity($city) {
        return $this->state([
            'city' => $city,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
