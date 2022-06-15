<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Weather App</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <input type="hidden" name="_method" value="GET">
        <input type="hidden" name="city" value="">
        <main class="weather">
            <section class="weather-section city-selection ">
                    @if(count($cities)>0)
                        @foreach ($cities as $item)
                            <a href="{{url('city', ['id' => $item->id])}}" class="city-selection-item black-box">{{$item->city}}</a>
                        @endforeach
                    @endif
            </section>
            <section class="weather-section daily-forecast">
                @if(count($forecasts)>0)
                @for ($i = 0; $i < 7; $i++)
                    <div class="daily-forecast-item black-box">
                        <span class="day">{{$days[$i]}}</span>
                        @switch($forecasts[$i]->weather_type)
                            @case("Sunny")
                                <i class="fa fa-5x fa-sun" style="color: yellow;"></i>
                            @break
                            @case("Cloudy")
                                <i class="fa fa-5x fa-cloud" style="color: white;"></i>
                            @break
                            @case("Windy")
                                <i class="fa fa-5x fa-wind" style="color: white;"></i>
                            @break
                            @default
                        @endswitch
                        <span class="temperature">{{$forecasts[$i]->weather_type}}</span>
                        <span class="weather-type">{{$forecasts[$i]->temperature}} &#x2103;</span>
                        <span class="updated">Updated: {{$forecasts[$i]->updated_at}}</span>
                    </div>
                    @endfor
                @endif
            </section>
        </main>

    </body>
</html>
