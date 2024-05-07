@extends('layouts.app')

@section('content')
<div class="container text-white">
    <h1 class="mb-4">{{$action_array['title']}}</h1>
    <img class="mb-4" src="{{$action_array['thumb']}}" alt="">
    <p>{{$action_array['description']}}</p>
</div>
@endsection