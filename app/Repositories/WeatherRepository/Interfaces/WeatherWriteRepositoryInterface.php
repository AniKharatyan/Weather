<?php

namespace App\Repositories\WeatherRepository\Interfaces;

use App\Models\Weather;

interface WeatherWriteRepositoryInterface
{
    public function insert($weatherData): void;
}
