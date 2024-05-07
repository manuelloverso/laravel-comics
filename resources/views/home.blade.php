@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-3 g-4">
            <div class="card border-0 rounded-0 h-100 text-white">
                <div class="card-img">
                    <img class="w-100 thumb" src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="card-body">
                    <h5 class="text-uppercase">{{$comic['series']}}</h5>
                    @if ($comic['series'] == 'Action Comics')
                    <a class="btn btn-outline-primary" href="{{route('action')}}">SEE MORE</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection