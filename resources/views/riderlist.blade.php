@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($riders as $rider)
        <div class="card" style="width: 18rem;">
        <form action="{{ route('rider', ['id' => $rider->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $rider->id }}" name="rider_id">
            <img src="https://images.pexels.com/photos/5368686/pexels-photo-5368686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $rider->name }}</h5>
            <p class="card-text">Kor: {{ $rider->age }}<br></p>
            <button class="btn btn-primary" type="submit">Tovább</button>
            </div>
        </form>
        </div>
        @endforeach
    </div>
</div>
@endsection