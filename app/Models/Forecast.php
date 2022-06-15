<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use \App\Models\ForecastRegion;

class Forecast extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Weather
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function forecastRegion() : BelongsTo
    {
        return $this->belongsTo(ForecastRegion::class);
    }
}
