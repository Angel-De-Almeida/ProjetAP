<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>@yield('title', 'SitoScan')</title>
</head>
<body>

    <header>

    <nav class="navbar">
        <div class="navbar-top">
            <h1 class="display-1"> <a href="/"> SitoScan </a> </h1>
            <div class="auth">
                <div class="login"> <a href="{{ route('dashboard')}}"> Login </a> </div>
                <div class="register"> <a href="{{ route('register')}}">Register </a> </div>
            </div>
        </div>
        <div class="navbar-bot">
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="{{ route('liste')}}">CRUD</a> </li>
                <li> <a href="contact">Contact</a> </li>
            </ul>
        </div>
    </nav>

    </header>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
