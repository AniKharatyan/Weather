<?php

namespace App\Repositories\WeatherRepository\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface WeatherReadRepositoryInterface
{
    public function getWeatherData(): Collection|array;
}
