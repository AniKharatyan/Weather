<?php

namespace App\Providers;

use Carbon\Laravel\ServiceProvider;
use App\Repositories\WeatherRepository\Repositories\WeatherReadRepository;
use App\Repositories\WeatherRepository\Repositories\WeatherWriteRepository;
use App\Repositories\WeatherRepository\Interfaces\WeatherReadRepositoryInterface;
use App\Repositories\WeatherRepository\Interfaces\WeatherWriteRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            WeatherReadRepositoryInterface::class,
            WeatherReadRepository::class
        );

        $this->app->bind(
            WeatherWriteRepositoryInterface::class,
            WeatherWriteRepository::class
        );
    }
}
