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
            <p class="card-text"><br>
        </p>
            
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
            <img src="https://images.pexels.com/photos/7671245/pexels-photo-7671245.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $horse->name }}</h5>
            <p class="card-text">Típusa: {{ $horse->breed }}
                <br>
        {{ $horse->gender }}<br></p>
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
           <img src="https://images.pexels.com/photos/883630/pexels-photo-883630.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
           <div class="card-body">
           <h5 class="card-title">{{ $rider->name }}</h5>
           <p class="card-text">Kor: {{ $rider->age }}</p>
           <button class="btn btn-primary" type="submit">Tovább</button>
           </div>
       </form>
       </div>
       @endforeach
   </div>
</div>
@endsection