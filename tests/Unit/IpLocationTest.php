<?php

namespace Tests\Unit;

use Tests\TestCase;
use \App\Http\Services\IpApiGeoLocationService;
use \Illuminate\Support\Facades\Config;

class IpLocationTest extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        Config::set('services.ipapi.endpoint', 'http://api.ipapi.com/');
        Config::set('services.ipapi.key', 'fcf0d17b819da033e5ff2665f93ad0a7');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {

        $ip = trim(shell_exec("dig +short myip.opendns.com @resolver1.opendns.com"));
        dd(IpApiGeoLocationService::getCityByIp($ip));

        dd("Wtf");
        $this->assertTrue(true);
    }
}
