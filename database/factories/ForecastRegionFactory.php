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

    protected static $cities = [ "Warszawa", "Kraków", "Łódź", "Wrocław", "Poznań", "Gdańsk", "Szczecin", "Bydgoszcz", "Lublin", "Białystok", "Rzeszów" ];
    
    public function definition()
    {
        return [
            'city' => self::$cities[0],
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    public function forCity($i) {
        return $this->state([
            'city' =>self::$cities[$i],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
