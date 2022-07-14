@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <h1>{{$comic->title}}</h1>
    <p>
        {!!$comic->description!!}
    </p>
    <h4 style="text-transform:uppercase;">
        {!!$comic->type!!}
    </h4>
    <p>
        <strong>$ {!!$comic->price!!}</strong>
    </p>
    <a class="btn btn-light" href="{{route('comics.index')}}">Home</a>
@endsection