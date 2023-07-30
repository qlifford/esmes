<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    @vite('resources/css/app.css')

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li class="p-2"><a href="/">Home</a></li>
            <li class="p-2"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="p-2"><a href="{{ route('posts') }}">Blog</a></li>
        </ul>
        <ul class="flex items-center">
            @if ((auth()->user()))
                <li class="p-2">
                    <a href="">{{ auth()->user()->name }}</a>
                </li>  

                <li class="p-2">
                    <form action="{{ route('logout') }}" method="POST"  class="inline p-1">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>                
            @else
                <li class="p-2">
                    <a href="{{ route('register') }}">Register</a>
                </li>
                <li class="p-2">
                    <a href="{{ route('login') }}">Login</a>
                </li>
            @endif        
        </ul>
    </nav>
    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</body>
</html>