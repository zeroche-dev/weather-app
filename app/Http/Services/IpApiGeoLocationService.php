<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class IpApiGeoLocationService
{
    public static function getCityByIp($ip)
    {
        $response = Http::get(config('services.ipapi.endpoint').$ip,[
            'access_key' => config('services.ipapi.key')
        ]);
        return $response->json()['city'];
    }
}

?>
