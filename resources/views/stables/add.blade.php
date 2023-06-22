@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url("stables/add/save") }}" method="post" enctype="multipart/form-data">
    @csrf
    
    Stable Id: <input type="number" name="stable_id">
    <br>
    Name: <input type="text" name="name">
    <br>
    County: <input type="text" name="county">
    <br>
    City: <input type="text" name="city">
    <br>
    Street: <input type="text" name="street">
    <br>
    Number: <input type="number" name="number">
    <br>
    Phone: <input type="tel" name="phone">
    <br>

    <button class="btn btn-primary" type="submit">Send</button>
</form>
</div>


@endsection