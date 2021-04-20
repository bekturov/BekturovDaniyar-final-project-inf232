<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mail.css') }}">
    <title>Send Email</title>
</head>
<body>
<header>
        <div><a style="text-decoration: none;" href="{{URL::route('people', ['lang' => App::getLocale()])}}">@lang('lang.people')</a></div>
        <div><a style="text-decoration: none;" href="{{URL::route('countries', ['lang' => App::getLocale()])}}">@lang('lang.countries')</a></div>
    </header>
    <div>
    <h1>@lang('lang.question')</h1>
</div>
<div class="bg_color">
    <form method="POST" action="{{ route('send-mail')}}">
        @csrf
        <input type="text" name="sender" placeholder="sender"><br>
        <input class="message" type="text" name="message" placeholder="message"><br>
        <input class="button" type="submit" name="send" value="Send">
    </form>
</div>
</body>
</html>  