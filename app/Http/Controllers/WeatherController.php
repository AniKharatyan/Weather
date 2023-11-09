<?php

namespace App\Http\Controllers;

use App\Http\Resources\WeatherResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Repositories\WeatherRepository\Interfaces\WeatherReadRepositoryInterface;

class WeatherController extends Controller
{
    protected WeatherReadRepositoryInterface $weatherReadRepository;

    public function __construct(WeatherReadRepositoryInterface $weatherReadRepository)
    {
        $this->weatherReadRepository = $weatherReadRepository;
    }

    public function showWeather(): AnonymousResourceCollection
    {
        $weather = $this->weatherReadRepository->getWeatherData();

        return WeatherResource::collection($weather);
    }
}
