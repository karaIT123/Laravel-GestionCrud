@extends('default')

@section('content')
    <h1 class="mt-5">Bravo !</h1>

    <a class="btn btn-primary" href=" {{ action('App\Http\Controllers\LinksController@show',['id'=> $link->id]) }}">
        {{ action('App\Http\Controllers\LinksController@show',['id'=> $link->id]) }}
    </a>
@stop
