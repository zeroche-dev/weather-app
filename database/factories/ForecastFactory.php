<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ForecastRegion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class ForecastFactory extends Factory
{
    protected static function randomizeWeatherType(): string {
        switch(rand(1, 3))
        {
            case 1:
                return "Sunny";
                break;
            case 2:
                return "Windy";
                break;
            case 3:
                return "Cloudy";
                break;
        }
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'forecast_region_id' => ForecastRegion::factory(),
            'temperature' => 0,
            'weather_type' => self::randomizeWeatherType(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    public function forDay($day)
    {
        return $this->state([
            'forecast_region_id' => ForecastRegion::factory(),
            'temperature' => rand(10, 24),
            'weather_type' => self::randomizeWeatherType(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
