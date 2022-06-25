<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ForecastRegion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Weather>
 */
class ForecastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'forecast_region_id' => ForecastRegion::factory(),
            'datetime' => date('Y-m-d'),
            'tempmax' => 0,
            'tempmin' => 0,
            'temp' => 0,
            'feelslikemax' => 0,
            'feelslikemin' => 0,
            'feelslike' => 0,
            'dew' => 0,
            'humidity' => 0,
            'snow' => 0.0,
            'snowdepth' => 0.0,
            'windgust' => 0,
            'windspeed' => 0,
            'winddir' => 0,
            'pressure' => 0,
            'cloudcover' => 0,
            'visibility' => 0,
            'solarradiation' => 0,
            'solarenergy' => 0,
            'uvindex' => 0,
            'severerisk' => 0,
            'sunrise' => '00:00:00',
            'sunset' => '00:00:00',
            'moonphase' => 0,
            'conditions' => '',
            'description' => '',
            'icon' => '',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    public function forDay($day)
    {
        //array merge is unsafe
        return $this->state([
            'forecast_region_id' => ForecastRegion::factory(),
            'datetime' => date('Y-m-d', strtotime($day['datetime'])),
            'tempmax' => $day['tempmax'],
            'tempmin' => $day['tempmin'],
            'temp' => $day['temp'],
            'feelslikemax' => $day['feelslikemax'],
            'feelslikemin' => $day['feelslikemin'],
            'feelslike' => $day['feelslike'],
            'dew' => $day['dew'],
            'humidity' => $day['humidity'],
            'snow' => $day['snow'],
            'snowdepth' => $day['snowdepth'],
            'windgust' => $day['windgust'],
            'windspeed' => $day['windspeed'],
            'winddir' => $day['winddir'],
            'pressure' => $day['pressure'],
            'cloudcover' => $day['cloudcover'],
            'visibility' => $day['visibility'],
            'solarradiation' => $day['solarradiation'],
            'solarenergy' => $day['solarenergy'],
            'uvindex' => $day['uvindex'],
            'severerisk' => $day['severerisk'],
            'sunrise' => $day['sunrise'],
            'sunset' => $day['sunset'],
            'moonphase' => $day['moonphase'],
            'conditions' => $day['conditions'],
            'description' => $day['description'],
            'icon' => $day['icon'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
