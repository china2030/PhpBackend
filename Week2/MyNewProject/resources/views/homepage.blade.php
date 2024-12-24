@extends('layouts.standard')

@section('title') Домашняя страница @endsection

@section('content')
    <h1> News</h1>
    {{--<a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('about')}}">About</a>--}}
     <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Text</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $newsOne)
            <tr>
                <td>{{$newsOne->title}}</td>
                <td>{{$newsOne->author_name}}</td>
                <td>{{$newsOne->text}}
                <a href="{{route('one-news', $newsOne->id)}}">
                    <button class="btn btn-warning">Details</button></a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection
