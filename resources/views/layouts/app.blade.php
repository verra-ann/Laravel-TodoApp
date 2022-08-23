<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDoApp</title>
        <link rel="shortcut icon" href="<?php echo asset('image/pin.png'); ?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-dark bg-primary">
            <!-- Navbar content -->
            <div class="container">
                <a class="navbar-brand">ToDoApp</a>
            </div>
        </nav>

        @yield('head')

        
        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            @yield('footer')
        </div>
    </body>

</html>