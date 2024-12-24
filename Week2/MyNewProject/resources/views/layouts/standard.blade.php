<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>.form-container{
    width: 70%;
    margin:0 auto;
    max-width: 800px;
    padding: 20px;
    background-color: #f8f9fa;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }</style>


    <title>@yield('title')</title>
</head>
<body>
@include('header')
@yield('content')
</body>
</html>
