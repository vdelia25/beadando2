@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url("riders/add/save") }}" method="post" enctype="multipart/form-data">
    @csrf
    
    Stable Id: <input type="number" name="stable_id">
    <br>
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    Email: <input type="email" name="email">
    <br>
    

    <button class="btn btn-primary" type="submit">Send</button>
</form>
</div>


@endsection