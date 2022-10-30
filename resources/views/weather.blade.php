@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h1>header with weather</h1>
                    <h3>City: {{ $city_name }}</h3>
                    <h2>Region : {{ $region_name }}</h2>
                    <h2>Country : {{ $country_name }}</h2>
                    <p>current time: {{ $current_time }}</p>
                    <p>current weather: {{ $current_weather }} C</p>
                    <p>weather: {{ $current_weather_text }}</p>
                    <p>Icon: <img src="{{ $current_weather_icon }}" alt="img"></p>
                </div>
                <a href="{{ route('weather.main') }}" class="btn btn-outline-primary">Back To Main</a>
            </div>
        </div>
    </div>
@endsection
