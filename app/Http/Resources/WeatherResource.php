<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'coord_lon' => $this->resource->coord_lon,
            'coord_lat' => $this->resource->coord_lat,
            'weather_id' => $this->resource->weather_id,
            'weather_main' => $this->resource->weather_main,
            'weather_description' => $this->resource->weather_description,
            'weather_icon' => $this->resource->weather_icon,
            'main_temp' => $this->resource->main_temp,
            'main_feels_like' => $this->resource->main_feels_like,
            'main_temp_min' => $this->resource->main_temp_min,
            'main_temp_max' => $this->resource->main_temp_max,
            'main_humidity' => $this->resource->main_humidity,
            'main_sea_level' => $this->resource->main_sea_level,
            'main_grnd_level' => $this->resource->main_grnd_level,
            'main_pressure' => $this->resource->main_pressure,
            'wind_speed' => $this->resource->wind_speed,
            'wind_deg' => $this->resource->wind_deg,
            'wind_gust' => $this->resource->wind_gust,
            'clouds_all' => $this->resource->clouds_all,
            'timezone' => $this->resource->timezone,
            'name' => $this->resource->name,
            'code' => $this->resource->code,
            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
        ];
    }
}
