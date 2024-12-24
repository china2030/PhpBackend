@extends('layouts.standard')

@section('title')пользователь Чингиз @endsection

@section('content')
    <h1>пользователь {{$personName}}</h1>

    <table>
        <tr>
            <th>Аты</th>
            <th>Каласы</th>
            <th>Жасы</th>
        </tr>
        //@foreach($results as $person)
            @foreach($request as $news)
            <tr>
                <td>{{$person->FirstName}}</td>
                <td>{{$person->City}}</td>
                <td>{{$person->Age}}</td>
            </tr>
        @endforeach
    </table>
@endsection
