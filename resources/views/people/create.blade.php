<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <title>Document</title>
</head>
<body>
<header>
        <div><a style="text-decoration: none;" href="{{URL::route('people', ['lang' => App::getLocale()])}}">@lang('lang.people')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('countries', ['lang' => App::getLocale()])}}">@lang('lang.countries')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.mail')</a></div>
    </header>
<div><h1>@lang('lang.add')</h1></div>
<div><h2>@lang('lang.check')</h2></div>
<div><h2>@lang('lang.if')</h2></div>
<div class="bg_color">
<form method="POST" action="{{ route('add-people', ['lang' => App::getLocale()]) }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="photo" accept="image/png,image/jpeg">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="surname" placeholder="surname">
    <input type="number" name="age" placeholder="age">
    <input type="number" name="country_id" placeholder="country_id">
    <button type="submit">Add</button>
</form>
</div>
</body>
</html>