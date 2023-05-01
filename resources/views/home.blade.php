<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>

    <body>
        <h1>{{$titolo}}</h1>

        <div>
            Cosa si fa lunedi'?
        </div>
        <div>
            {{$info}}
        </div>
    </body>
</html>
