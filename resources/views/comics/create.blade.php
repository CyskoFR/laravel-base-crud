@extends('layouts.base')

@section('page-title')
    New Comic
@endsection

@section('page-content')
    <div class="container my-4">
        <h1>Insert a new Comic</h1>
        <form>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="thumb">Image URL</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <select class="form-select my-3" id="type" name="type">
                <option selected>Select comic type</option>
                <option value="comic book">Comic book</option>
                <option value="graphic novel">Graphic novel</option>
            </select>
            
            <div class="form-group">
                <label for="description">Price $</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>

            <button type="submit" class="btn btn-primary my-3">Create</button>
        </form>
        <a class="btn btn-light" href="{{route('comics.index')}}">Home</a>    
    </div>
@endsection