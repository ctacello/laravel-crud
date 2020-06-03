<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    <body>
        @include('inc.header')

        @if (Request::is('/'))
            @include('inc.hello')
        @endif

        <div class="container mt-3">

            @include('inc.messages')

            <div class="row">
                <div class="col-8 ">
                    @yield('content') 
                </div>
                <div class="col-4">
                    @include('inc.aside')
                </div>
            </div>
        </div>
    
        @include('inc.footer')
    </body>
</html>