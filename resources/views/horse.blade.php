@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($horses as $horse)
        <div class="card" style="width: 18rem;">
            <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $horse->name }}</h5>
            <p class="card-text">Típusa: {{ $horse->breed }}
                <br>
            Szörméje: {{ $horse->coat }}
        <br>
        {{ $horse->gender }}
    </p>
            </div>
        </div>
        @endforeach
</div>
@endsection