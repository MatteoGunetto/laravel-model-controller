<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')

        <title>Laravel Model Controller</title>
    </head>
    <body>
        <h1 class="text-center">Single Movie</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div >
                        <img style="height: 300px; width: 200px" src="{{ $movie->img_path }}" alt="">
                    </div>
                    <h3>{{ $movie->title }}</h3>
                    <p>Vote: {{ $movie->vote }}</p>
                </div>
            </div>
        </div>

    </body>
</html>
