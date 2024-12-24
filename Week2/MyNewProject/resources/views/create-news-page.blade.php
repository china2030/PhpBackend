@extends('layouts.standard')

@section('title') Publish page @endsection

@section('content')
    <h1>Publish News</h1>
    <div class="form-container">
        <form action="{{route ('create-news-post')}}" method ="POST">
            @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" >
        </div>
        <div class="form-group mb-3">
            <label for="author_name">Author</label>
            <input type="text" class="form-control" name="author_name" id="author_name" >
        </div>
        <div class="form-group mb-3">
            <label for="image_url">Image_url</label>
            <input type="text" class="form-control" name="image_url" id="image_url">
        </div>
        <div class="form-group mb-3">
            <label for="text">Text</label>
            <input type="text" class="form-control" name="text" id="text">
        </div>
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
    </div>
@endsection
