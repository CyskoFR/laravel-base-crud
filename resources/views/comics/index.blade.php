@extends('layouts.base')

@section('page-title')
    Laravel base CRUD
@endsection

@section('page-content')
    <h1>Comics list:</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Thumb</th>
                <th scope="col">Type</th>
                <th scope="col">Price$</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->price}}</td>
                    <td>
                        <a class="btn btn-light" href="">More</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection