<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use \App\Models\ForecastRegion;
class WeatherController extends Controller
{
    public function city($id)
    {
        if(!isset($id))
        { $id=0; }

        $forecast = ForecastRegion::where('id','=', $id)->first();
        if($forecast){

            $days = [];
            for($i = 0; $i < 7; $i++)
            {
                $days[$i] = date('l', strtotime("Today +{$i} days"));
            }

            return view("weather", ["forecasts" => $forecast->forecasts()->getModels(),
            "cities" => ForecastRegion::all()->makeHidden('created_at')->makeHidden('updated_at'), "days" => $days]);

        }else {
            return view("weather", ["forecasts" => [],  "cities" => ForecastRegion::all()->makeHidden('created_at')->makeHidden('updated_at'), "days" => $days]);
        }
    }
}
