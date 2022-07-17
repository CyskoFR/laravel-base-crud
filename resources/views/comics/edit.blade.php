@extends('layouts.base')

@section('page-title')
    Modifica {{$comic->title}}
@endsection

@section('page-content')
    <h1>Modifica {{$comic->title}}</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{$comic->description}}</textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Image URL</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <select class="form-select my-3" id="type" name="type">
            <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic book</option>
            <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>Graphic novel</option>
        </select>
        
        <div class="form-group">
            <label for="description">Price $</label>
            <input type="number" class="form-control" id="price" name="price"  step="any" value="{{$comic->price}}">
        </div>

        <button type="submit" class="btn btn-primary my-3">Update</button>
    </form>
    <a class="btn btn-light" href="{{route('comics.index')}}">Home</a>   
@endsection