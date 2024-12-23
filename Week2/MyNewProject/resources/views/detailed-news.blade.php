@extends('layouts.standard')

@section ('title'){{$news->title}} @endsection

@section('content')
    <h1>News</h1>
    <div class ="alert alert-info" style="...">
        <h3>{{$news->title}}</h3>
        <p>{{$news->author_name}}</p>
        <img src="{{$news->image_url}}" alt="image">
        <p id="message" class="form-control" >{{$news->text}}</p>
        <p><small>{{$news->created_at}}</small></p>
        <a href="{{route('update-news-page',$news->id)}}"><button class="btn btn-primary">Update</button></a>
        <form action="{{route('delete-news',$news->id)}}" method ="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection

