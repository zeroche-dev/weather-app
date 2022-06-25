<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\ForecastRegion;
use \App\Models\Forecast;
use \App\Http\Services\VisualCrossingWeatherService;

class DatabaseSeeder extends Seeder
{

    protected static $cities = [ "Warszawa", "Kraków", "Rzeszów", "Poznań", "Katowice", "Szczecin", "Gdańsk", "Lublin" ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for($i=0; $i < sizeof(self::$cities); $i++){
            $weather = VisualCrossingWeatherService::getDailyForecast(self::$cities[$i]);
            $region = ForecastRegion::factory()->forCity(self::$cities[$i])->create();

            for($j=0; $j<7; $j++)
            {
                Forecast::factory()->forDay($weather['days'][$j])->create(["forecast_region_id" => $region->id]);
            }
        }

    }
}
