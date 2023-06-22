@extends('layouts.app')
@section('content')
@foreach ($horses as $horse)
<form action="{{ action('App\Http\Controllers\HorsesController@update', $horse->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Stable Id: <input type="number" name="stable_id" value="{{ $horse->stable_id }}">
    <br>
    Name: <input type="text" name="name" value="{{ $horse->name }}">
    <br>
    Age: <input type="number" name="age" value="{{ $horse->age }}">
    <br>
    Breed: <input type="text" name="breed" value="{{ $horse->breed }}">
    <br>
    Gender: <input type="text" name="gender" value="{{ $horse->gender }}">
    <br>
    Coat: <input type="text" name="coat" value="{{ $horse->coat }}">
    <br>

    <button class="btn btn-primary" type="submit">Send</button>
</form>
@endforeach

@endsection