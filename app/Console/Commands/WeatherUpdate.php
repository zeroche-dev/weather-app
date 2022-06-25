<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Database\Seeders\DatabaseSeeder;
use \App\Models\ForecastRegion;

class WeatherUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update weather in database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   ForecastRegion::where('id','>', 0)->delete();
        $dbs = new DatabaseSeeder();
        $dbs->run();
    }
}
