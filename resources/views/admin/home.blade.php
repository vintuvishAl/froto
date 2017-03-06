@extends('layouts.app')


@section('content')


    <h1>order summary</h1>
    @if{{ Auth::user() }}
    @foreach ($posts as $post) <h1> {{$post->user->name}}</h1> @endforeach

@stop