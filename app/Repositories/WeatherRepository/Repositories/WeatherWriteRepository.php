<?php

namespace App\Repositories\WeatherRepository\Repositories;

use App\Models\Weather;
use App\Exceptions\SaveErrorException;
use App\Repositories\WeatherRepository\Interfaces\WeatherWriteRepositoryInterface;
use Carbon\Carbon;

class WeatherWriteRepository implements WeatherWriteRepositoryInterface
{
    public function insert($weatherData): void
    {
        $query = Weather::query();

        $query->insert([
            'coord_lon' => $weatherData->coord->lon,
            'coord_lat' => $weatherData->coord->lat,
            'weather_id' => $weatherData->weather[0]->id,
            'weather_main' => $weatherData->weather[0]->main,
            'weather_description' => $weatherData->weather[0]->description,
            'weather_icon' => $weatherData->weather[0]->icon,
            'main_temp' => $weatherData->main->temp,
            'main_feels_like' => $weatherData->main->feels_like,
            'main_temp_min' => $weatherData->main->temp_min,
            'main_temp_max' => $weatherData->main->pressure,
            'main_humidity' => $weatherData->main->humidity,
            'main_sea_level' => $weatherData->main->sea_level ?? null,
            'main_grnd_level' => $weatherData->main->grnd_level ?? null,
            'main_pressure' => $weatherData->main->pressure,
            'wind_speed' => $weatherData->wind->speed,
            'wind_deg' => $weatherData->wind->deg,
            'wind_gust' => $weatherData->wind->gust ?? null,
            'clouds_all' => $weatherData->clouds->all,
            'timezone' => $weatherData->timezone,
            'name' => $weatherData->name,
            'code' => $weatherData->cod,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
