@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($comics as $key => $comic)
        <div class="col-12 col-md-4 col-lg-3 g-4">
            <div class="card border-0 rounded-0 h-100 text-white">
                <div class="card-img">
                    <img class="w-100 thumb" src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="title text-uppercase">{{$comic['series']}}</h5>
                    <a class="btn btn-outline-primary" href="{{route('comic',['id' => $key])}}">SEE MORE</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection