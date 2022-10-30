<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function main()
    {
        return view('welcome');
    }
    public function index(Request $request)
    {
        $city = $request->input('city');
        $weather_key = config('app.weather_key');
        $weather_aqi = config('app.weather_aqi');
        $url = 'http://api.weatherapi.com/v1/current.json?key=' . $weather_key . '&q=' . $city . '&aqi' . $weather_aqi;
        $client = new \GuzzleHttp\Client();
        $res = $client->get($url);
        if ($res->getStatusCode() == 200) {
            $j = $res->getBody();
            $obj = json_decode($j);
            $city_name = $obj->location->name;
            $region_name = $obj->location->region;
            $country_name = $obj->location->country;
            $current_time = $obj->location->localtime;
            $current_weather = $obj->current->temp_c;
            $current_weather_text = $obj->current->condition->text;
            $current_weather_icon = $obj->current->condition->icon;
            return view('weather', compact('city_name', 'region_name', 'country_name', 'current_time', 'current_weather', 'current_weather_text', 'current_weather_icon'));
        }
    }
}
