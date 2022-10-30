@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card justify-content-center text-center">
                <div class="card-header">
                    <h1>Weather App</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('weather.get') }}" method="POST">
                        @csrf
                        <label for="city_name">Enter city name: </label>
                        <input type="text" class="form-control" name="city" id="city_name">
                        <input type="submit" value="Get Weather" class="btn btn-outline-primary w-100">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
