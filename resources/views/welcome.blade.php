<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/js/app.js')

        <title>Laravel Model Controller</title>
    </head>
    <body>
        <h1 class="text-center">Laravel Model Controller</h1>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-evenly flex-wrap">
                        @foreach ($movies as $element)
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $element->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Original title: {{ $element->original_title }}</h6>
                                <p class="card-text">Date of release: {{ $element->date }}</p>
                                <p class="card-text">Vote: {{ $element->vote }}</p>
                                <a href="{{ route('SingleMovie', $element->id) }}" class="btn btn-primary">Movie details</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
