@extends('layouts.app')

@section('content')
<style></style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   

                </div>
            </div>
            <?php
            $stables = DB::select('SELECT * FROM stable') 
            ?>
            <div class="row">
                @foreach ($stables as $stable)
                <div class="card" style="width: 18rem;">
                <form action="{{ route('stable', ['id' => $stable->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $stable->id }}" name="id">
                    <img src="https://images.pexels.com/photos/357321/pexels-photo-357321.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $stable->name }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button class="btn btn-primary" type="submit">Tovább</button>
                    </div>
                </form>
                </div>
                @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
