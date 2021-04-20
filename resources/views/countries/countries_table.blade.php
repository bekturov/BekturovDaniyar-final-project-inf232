<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/country.css') }}">
    <title>Document</title>
</head>
<body>
<header>
        <div><a style="text-decoration: none;" href="{{URL::route('add-people', ['lang' => App::getLocale()])}}">@lang('lang.main')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('people', ['lang' => App::getLocale()])}}">@lang('lang.people')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('send-mail', ['lang' => App::getLocale()])}}">@lang('lang.mail')</a></div>
    </header>
    <div>
        <h1>@lang('lang.search')</h1>
        <h2>@lang('lang.didnt')</h2>
        <h2>@lang('lang.addCount') <a href="{{URL::route('add-countries', ['lang' => App::getLocale()])}}">@lang('lang.there')</a></h2>
    </div>
    <div class="container">
    <table style="font-size: 20px;">
        <tr>
            <td>ID</td>
            <td>@lang('lang.flag')</td>
            <td class="name">@lang('lang.name')</td>
            <td>@lang('lang.population')</td>
            <td>@lang('lang.area')</td>
</tr>
@forelse ($countries as $country)
            <tr>
                <td>{{$country->id}}</td>
                <td><img src="{{$country->photo}}" width="50px" height="20px"></td>
                <td class="name">{{$country->name}}</td>
                <td>{{$country->population}}</td>
                <td>{{$country->area}}</td>
            </tr>
    @empty
        <p>Nothing at the moment.</p>
    @endforelse
    </table>

</div>
</body>
</html>