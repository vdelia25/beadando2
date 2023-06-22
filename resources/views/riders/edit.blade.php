@extends('layouts.app')
@section('content')
@foreach ($riders as $rider)
<form action="{{ action('App\Http\Controllers\RidersController@update', $rider->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Stable Id: <input type="number" name="stable_id" value="{{ $rider->stable_id }}">
    <br>
    Name: <input type="text" name="name" value="{{ $rider->name }}">
    <br>
    Age: <input type="number" name="age" value="{{ $rider->age }}">
    <br>
    Email: <input type="email" name="email" value="{{ $rider->email }}">
    <br>
   

    <button class="btn btn-primary" type="submit">Send</button>
</form>
@endforeach

@endsection