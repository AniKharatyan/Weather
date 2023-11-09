<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{

    public function up(): void
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->id();
            $table->float('coord_lon');
            $table->float('coord_lat');
            $table->integer('weather_id');
            $table->string('weather_main');
            $table->string('weather_description');
            $table->string('weather_icon');
            $table->float('main_temp');
            $table->float('main_feels_like');
            $table->float('main_temp_min');
            $table->float('main_temp_max');
            $table->float('main_pressure');
            $table->float('main_humidity');
            $table->float('main_sea_level')->nullable();
            $table->float('main_grnd_level')->nullable();
            $table->float('wind_speed');
            $table->float('wind_deg');
            $table->float('wind_gust')->nullable();
            $table->float('clouds_all');
            $table->integer('timezone');
            $table->string('name');
            $table->integer('code');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weather');
    }
};
