<?php

namespace App\Repositories\WeatherRepository\Repositories;

use App\Models\Weather;
use Illuminate\Database\Eloquent\Collection;
use App\Repositories\WeatherRepository\Interfaces\WeatherReadRepositoryInterface;


class WeatherReadRepository implements WeatherReadRepositoryInterface
{
    public function getWeatherData(): Collection|array
    {
        $query = Weather::query();

        return $query->orderBy('created_at', 'desc')->get();
    }
}
