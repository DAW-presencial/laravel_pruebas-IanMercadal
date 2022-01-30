<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="container text-center">
            <div class="row m-2">
                <div class="col">
                    <h1>Agenda de Contactos</h1>
                </div>

                <div class="col">
                    @auth
                        <button class="btn btn-outline-primary"><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a></button>
                    @else
                    <button class="btn btn-outline-primary"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></button>
            
                    @if (Route::has('register'))
                        <button class="btn btn-outline-primary"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></button>
                    @endif
                    @endauth
                </div>
            </div>
            


        </div>
    @yield('content')
</body>
</html>