@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url("horses/add/save") }}" method="post" enctype="multipart/form-data">
    @csrf
    
    Stable Id: <input type="number" name="stable_id">
    <br>
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    Breed: <input type="text" name="breed">
    <br>
    Gender: <input type="text" name="gender">
    <br>
    Coat: <input type="text" name="coat">
    <br>

    <button type="button" class="btn btn-outline-success">New Horse</button>
</form>
</div>


@endsection