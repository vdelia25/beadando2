@extends('layouts.app')
@section('content')
<style>
.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: #e3d3af;
}
</style>
<a href="{{ url('/stables/add') }}" <button type="button" class="btn btn-success">New Stable</button> </a>
    
<table class="table table-striped table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">County</th>
        <th scope="col">City</th>
        <th scope="col">Street</th>
        <th scope="col">Number</th>
        <th scope="col">Phone</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($stables as $stable )
      <tr>
        <td>{{ $stable->id }}</td>
        <td>{{ $stable->name }}</td>
        <td>{{ $stable->county }}</td>
        <td>{{ $stable->city }}</td>
        <td>{{ $stable->street }}</td>
        <td>{{ $stable->number }}</td>
        <td>{{ $stable->phone }}</td>
        <td>
            <form action="{{ route('stables.edit',
            $stable->id) }}">
            @csrf
             <button class="btn btn-primary btn-sm" type="submit">Edit</button>
        </form>
    
            <form action="{{ route('stables.delete',
            $stable->id) }}" method="post">
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