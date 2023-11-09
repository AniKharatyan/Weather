<?php

namespace App\Console\Commands;

use Dflydev\DotAccessData\Data;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Repositories\WeatherRepository\Interfaces\WeatherReadRepositoryInterface;
use App\Repositories\WeatherRepository\Interfaces\WeatherWriteRepositoryInterface;

class WeatherUpdateCommand extends Command
{
    protected $signature = 'app:weather-update-command';

    protected $description = 'Update weather every 10 minutes';

    protected WeatherReadRepositoryInterface $weatherReadRepository;

    protected WeatherWriteRepositoryInterface $weatherWriteRepository;

    public const URL = "https://api.openweathermap.org/data/2.5/weather";

    public function __construct(
        WeatherReadRepositoryInterface $weatherReadRepository,
        WeatherWriteRepositoryInterface $weatherWriteRepository
    ) {
        parent::__construct();
        $this->weatherReadRepository = $weatherReadRepository;
        $this->weatherWriteRepository = $weatherWriteRepository;
    }

    public function handle(): void
    {
        try {
            $client = new Client();

            $response = $client->request('GET',self::URL . "?lat=" . env('YEREVAN_LAT') . "&lon=" . env('YEREVAN_LON') . "&appid=" . env('OPEN_WEATHER_MAP_API_KEY'));

            $data = json_decode($response->getBody()->getContents());

            $this->weatherWriteRepository->insert($data);

            $this->info('Data inserted successfully!');
        } catch (\Throwable $exception) {
            throw new $exception;
        }

    }
}
