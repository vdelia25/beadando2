@extends('layouts.app')
@section('content')
<div class="container">
    <?php
    $stables = DB::select('SELECT * FROM stable WHERE id=?', [$id]);
    $horses = DB::select('SELECT * FROM horses WHERE stable_id=?', [$id]);
    $riders = DB::select('SELECT * FROM riders WHERE stable_id=?', [$id]);
    ?>
    <div class="row">
        @foreach ($stables as $stable)
        <div class="card" style="width: 18rem;">
            <input type="hidden" value="{{ $stable->id }}" name="id">
            <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $stable->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            
            </div>
        </div>
        @endforeach
    </div>
     <h2>Lovai</h2>
     <div class="row">
        @foreach ($horses as $horse)
        <div class="card" style="width: 18rem;">
        <form action="{{ route('horse', ['id' => $horse->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $horse->id }}" name="horse_id">
            <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $horse->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="btn btn-primary" type="submit">Tovább</button>
            </div>
        </form>
        </div>
        @endforeach
    </div>

    <h2>Lovasai</h2>
    <div class="row">
       @foreach ($riders as $rider)
       <div class="card" style="width: 18rem;">
       <form action="{{ route('rider', ['id' => $rider->id])}}" method="post" enctype="multipart/form-data">
           @csrf
           <input type="hidden" value="{{ $rider->id }}" name="rider_id">
           <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
           <div class="card-body">
           <h5 class="card-title">{{ $rider->name }}</h5>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <button class="btn btn-primary" type="submit">Tovább</button>
           </div>
       </form>
       </div>
       @endforeach
   </div>
</div>
@endsection