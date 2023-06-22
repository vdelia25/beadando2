@extends('layouts.app')
@section('content')
<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #f7e8c6;
}
</style>
<a href="{{ url('/riders/add') }}" <button type="button" class="btn btn-success">New Rider</button> </a>
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Stable id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($riders as $rider )
      <tr>
        <td>{{ $rider->id }}</td>
        <td>{{ $rider->stable_id }}</td>
        <td>{{ $rider->name }}</td>
        <td>{{ $rider->age }}</td>
        <td>{{ $rider->email }}</td>
        <td>
            <form action="{{ route('riders.edit',
            $rider->id) }}">
            @csrf
             <button class="btn btn-primary btn-sm" type="submit">Edit</button>
        </form>
    
            <form action="{{ route('riders.delete',
            $rider->id) }}" method="post">
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