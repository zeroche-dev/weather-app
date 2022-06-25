<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forecasts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('forecast_region_id');
            $table->date('datetime');
            $table->float('tempmax');
            $table->float('tempmin');
            $table->float('temp');
            $table->float('feelslikemax');
            $table->float('feelslikemin');
            $table->float('feelslike');
            $table->float('dew');
            $table->float('humidity');
            $table->float('snow');
            $table->float('snowdepth');
            $table->float('windgust');
            $table->float('windspeed');
            $table->float('winddir');
            $table->float('pressure');
            $table->float('cloudcover');
            $table->float('visibility');
            $table->float('solarradiation');
            $table->float('solarenergy');
            $table->float('uvindex');
            $table->float('severerisk');
            $table->time('sunrise');
            $table->time('sunset');
            $table->float('moonphase');
            $table->string('conditions');
            $table->string('description');
            $table->string('icon');

            $table->foreign('forecast_region_id')->references('id')->on('forecast_regions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forecasts');
    }
};
