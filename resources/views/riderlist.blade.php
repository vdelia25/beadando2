@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($riders as $rider)
        <div class="card" style="width: 18rem;">
        <form action="{{ route('rider', ['id' => $rider->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $rider->id }}" name="rider_id">
            <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $rider->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="btn btn-primary" type="submit">Tovább</button>
            </div>
        </form>
        </div>
        @endforeach
    </div>
</div>
@endsection