@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($horses as $horse)
        <div class="card" style="width: 18rem;">
        <form action="{{ route('horse', ['id' => $horse->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $horse->id }}" name="horse_id">
            <img src="https://images.pexels.com/photos/13745207/pexels-photo-13745207.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $horse->name }}</h5>
            <p class="card-text">Típusa: {{ $horse->breed }}
                <br>
        {{ $horse->gender }}<br></p>
            <button class="btn btn-primary" type="submit">Tovább</button>
            </div>
        </form>
        </div>
        @endforeach
    </div>
</div>
@endsection