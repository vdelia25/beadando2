@extends('layouts.app')
@section('content')
<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f7eeda;
}
</style>
<a href="{{ url('/horses/add') }}" <button type="button" class="btn btn-success">New Horse</button> </a>
    
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Stable id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">Breed</th>
        <th scope="col">Coat</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($horses as $horse )
      <tr>
        <td>{{ $horse->id }}</td>
        <td>{{ $horse->stable_id }}</td>
        <td>{{ $horse->name }}</td>
        <td>{{ $horse->age }}</td>
        <td>{{ $horse->gender }}</td>
        <td>{{ $horse->breed }}</td>
        <td>{{ $horse->coat }}</td>
        <td>
            <form action="{{ route('horses.edit',
            $horse->id) }}">
            @csrf
             <button class="btn btn-primary btn-sm" type="submit">Edit</button>
        </form>
    
            <form action="{{ route('horses.delete',
            $horse->id) }}" method="post">
            @csrf
            @method('DELETE')
             <button class="btn btn-danger btn-sm" type="submit">Delete</button>
        </form>
  

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


@endsection