@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @foreach ($stables as $stable)
    <div class="card" style="width: 18rem;">
    <form action="{{ route('stable', ['id' => $stable->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $stable->id }}" name="id">
        <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $stable->name }}</h5>
        <p class="card-text">
            {{ $stable->county }}
            <br>
            {{ $stable->city }}
            <br>
            {{ $stable->street }}
            <br>
            {{ $stable->number }}
            <br>
            {{ $stable->phone }}<br>
        </p>
        <button class="btn btn-primary" type="submit">Tovább</button>
        </div>
    </form>
    </div>
    @endforeach
</div>
</div>
@endsection