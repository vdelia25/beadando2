@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($horses as $horse)
        <div class="card" style="width: 18rem;">
        <form action="{{ route('horse', ['id' => $horse->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $horse->id }}" name="horse_id">
            <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $horse->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="btn btn-primary" type="submit">Tovább</button>
            </div>
        </form>
        </div>
        @endforeach
    </div>
</div>
@endsection