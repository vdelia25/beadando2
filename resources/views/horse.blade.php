@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($horses as $horse)
        <div class="card" style="width: 25rem;">
            <img src="https://images.pexels.com/photos/7671245/pexels-photo-7671245.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $horse->name }}</h5>
            <p class="card-text">Fajta: {{ $horse->breed }}
                <br>
            Szőrzet: {{ $horse->coat }}
        <br>
        {{ $horse->gender }}
        <br>
        {{ $horse->age }}<br>
    </p>
            </div>
        </div>
        @endforeach
</div>
@endsection