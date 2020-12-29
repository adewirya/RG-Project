<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>HOMEPAGE DI SINI NTAR</h1>
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
    <a href="{{route('leader.create')}}" class="btn btn-primary mt-5"
            style="display: block; margin:auto; width:50%">
        Insert New Leader
    </a>
</body>
</html>