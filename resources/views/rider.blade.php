@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($riders as $rider)
        <div class="card" style="width: 25rem;">
            <img src="https://images.pexels.com/photos/883630/pexels-photo-883630.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $rider->name }}</h5>
            <p class="card-text">Kor: {{ $rider->age }}
                <br>
            Email: {{ $rider->email }}<br>
            </p>
            </div>
        </div>
        @endforeach
</div>
@endsection