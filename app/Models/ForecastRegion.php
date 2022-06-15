<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Forecast;

class ForecastRegion extends Model
{
    use HasFactory;


    /**
     * Get all of the comments for the ForecastRegion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function forecasts() 
    {
        return $this->hasMany(Forecast::class, 'forecast_region_id');
    }
}
