<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Validator;
use Response;
use \App\Models\ForecastRegion;
use \App\Http\Services\VisualCrossingWeatherService;
use \App\Http\Services\IpApiGeoLocationService;


class WeatherController extends Controller
{
    public function city(Request $request, $city = null)
    {

        if(!$city)
        {
            $ip = App::environment('local') ? '193.22.91.42' : $request->getClientIp();

            $city = IpApiGeoLocationService::getCityByIp($ip);
            if(!$city) {

                $forecast = ForecastRegion::find(1)->first();
                return to_route('city', ['city' => $forecast->city]);
            }
        }

        //Due to limited api we not every city is supported
        if(!isset($forecast)) {
            $forecast = ForecastRegion::where('city', '=', $city)->first();
            if(!$forecast)
            {
                return to_route('city');
            }
        }

        $days = [];
        $forecasts = $forecast->forecasts()->getModels();
        for($i = 0; $i < 7; $i++)
        {
            $days[$i] =date('l m-d', strtotime($forecasts[$i]->datetime));
        }

        return view("weather", ["forecasts" => $forecast->forecasts()->getModels(),
        "cities" => ForecastRegion::all()->makeHidden('created_at')->makeHidden('updated_at'), "days" => $days, "city" => $city]);
    }

}
