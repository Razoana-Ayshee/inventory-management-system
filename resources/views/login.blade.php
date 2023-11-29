<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<h3>Login</h3>
{{ session('message') ?? "" }}
<form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    <br>
    <label> Password</label>
    <input type="password" name="password" placeholder="Password">
    <br>
    <button type="submit">Login</button>
    <br>
    <a href="{{ route('register') }}">Sign Up</a>
</form>
</body>
</html>
