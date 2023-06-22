@extends('layouts.app')
@section('content')
    
<div class="col" align="center">
    <div class="col-md-3">
     <div class="card">
        <h5 class="card-header">Horses</h5>
        <div class="card-body" style="background-color:rgb(247, 238, 218)">
            <h5 class="card-title">Horses can be managed on this surface.</h5>
            <a href="{{ url('horses') }}" class="btn btn-secondary">Tovább</a>
        </div>
     </div>
    </div>
    <div class="col-md-3">
        <div class="card">
           <h5 class="card-header">Riders</h5>
           <div class="card-body" style="background-color:rgb(247, 232, 198)">
               <h5 class="card-title">Riders can be managed on this surface.</h5>
               <a href="{{ url('riders') }}" class="btn btn-secondary">Tovább</a>
           </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
           <h5 class="card-header">Stables</h5>
           <div class="card-body" style="background-color:rgb(227, 211, 175)">
               <h5 class="card-title">Stables can be managed on this surface.</h5>
               <a href="{{ url('stables') }}" class="btn btn-secondary">Tovább</a>
           </div>
        </div>
    </div>
</div>
@endsection