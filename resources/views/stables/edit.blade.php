@extends('layouts.app')
@section('content')
@foreach ($stables as $stable)
<form action="{{ action('App\Http\Controllers\StablesController@update', $stable->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
    Stable Id: <input type="number" name="stable_id">
    <br>
    Name: <input type="text" name="name" value="{{ $stable->name }}">
    <br>
    County: <input type="text" name="county" value="{{ $stable->county }}">
    <br>
    City: <input type="text" name="city" value="{{ $stable->city }}">
    <br>
    Street: <input type="text" name="street" value="{{ $stable->street }}">
    <br>
    Number: <input type="number" name="number" value="{{ $stable->number }}">
    <br>
    Phone: <input type="number" name="number" value="{{ $stable->phone }}">
    <br>

    <button class="btn btn-primary" type="submit">Send</button>
</form>
@endforeach

@endsection