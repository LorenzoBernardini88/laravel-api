<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <title>Document</title>
</head>
<body>
    <div id="app">
        
    </div>
    <script src="{{asset("js/front.js")}}"></script>
</body>
</html>


{{-- @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/admin') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif --}}