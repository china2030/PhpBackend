@extends('layouts.standard')
@section('title') docker @endsection
@section('content')
    <form action="">
        <input type="radio" id="html" name="fav_language" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS">
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">JavaScript</label><br><br>
        <input type="submit" value="Submit">

        <img src="https://www.w3schools.com/images/lamp.jpg" alt="Lamp" width="32" height="32">
        <i class="bi bi-pin"></i>
        <button type="button" class="btn btn-danger">
                Кнопка
        </button>
    </form>@endsection

