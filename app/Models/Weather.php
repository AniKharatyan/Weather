<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * * App\Models\Weather
 *
 * @property string $city
 * @property string $description
 * @property string $temperature
 * @property string $datetime
 */

class Weather extends Model
{
    use HasFactory;

    protected $table = 'weather';

    protected $fillable = [
        'id',
        'coord_lon',
        'coord_lat',
        'weather_id',
        'weather_main',
        'weather_description',
        'weather_icon',
        'main_temp',
        'main_feels_like',
        'main_temp_min',
        'main_temp_max',
        'main_pressure',
        'main_humidity',
        'main_sea_level',
        'main_grnd_level',
        'wind_speed',
        'wind_deg',
        'wind_gust',
        'clouds_all',
        'timezone',
        'name',
        'code',
    ];
}
