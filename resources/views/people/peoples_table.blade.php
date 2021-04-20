<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/peoples_table.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div><a style="text-decoration: none;" href="{{URL::route('add-people', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('countries', ['lang' => App::getLocale()])}}">@lang('lang.countries')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.mail')</a></div>
    </header>
@forelse ($people as $person)
    <div class="container">
        <img src="{{$person->photo}}" width="125px" height="205px">
        <div>
            <h2>@lang('lang.fulname'): {{$person->name}} {{$person->surname}}</h2>
            <h2>@lang('lang.age'): {{$person->age}}</h2>
            <h2>@lang('lang.country'): {{$person->get($person->country_id)}}</h2>
        </div>
    </div>


        
@empty
    <p>NO PEOPLE</p>
@endforelse

</body>
</html>