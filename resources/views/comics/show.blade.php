@extends('layouts.app')


@section('content')

<h1 class="card-title text-left">{{$comic['series']}}</h1>
<img class="card-img-top" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">


@endsection
