<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\ForecastRegion;
use \App\Models\Forecast;

class DatabaseSeeder extends Seeder
{
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

        for($i=0; $i<11; $i++){
            $region = ForecastRegion::factory()->forCity($i)->create();
            for($j=0; $j<7; $j++)
            {
                Forecast::factory()->forDay($j)->create(["forecast_region_id" => $region->id]);
            }
        }

    }
}
