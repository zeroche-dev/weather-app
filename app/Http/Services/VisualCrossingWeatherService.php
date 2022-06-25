<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class VisualCrossingWeatherService
{
    public static function getDailyForecast($city)
    {
        $response = Http::get(config('services.visualcrossing.endpoint')
        .$city,[
            'unitGroup' => 'metric',
            'include' => 'days',
            'contentType'=> 'json',
            'key' => config('services.visualcrossing.key'),
        ]);
        return $response->json();
    }
}

?>
