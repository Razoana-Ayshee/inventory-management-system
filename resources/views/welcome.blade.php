<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Laravel App</title>
</head>
<body>

<div>
    <h1>Welcome to My Laravel App</h1>

    <!-- Registration Button -->
    <a href="{{ route('register') }}">
        <button style="padding: 10px; margin: 10px; cursor: pointer;">Register</button>
    </a>

    <!-- Login Button -->
    <a href="{{ route('login') }}">
        <button style="padding: 10px; margin: 10px; cursor: pointer;">Login</button>
    </a>
</div>

</body>
</html>
