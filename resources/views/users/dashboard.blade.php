
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color:white;
            color: white;
            padding: 10px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>User Dashboard</h1>
</header>

<nav>
    <div style="display: flex; justify-content: center; gap: 10px;">
    <a href="#">Home</a> |
    <a href="#">Profile</a> |
    <a href="#">Settings</a> |
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    </div>
</nav>

<main>
    <section>
        <h2>Welcome, User!</h2>
        <p>This is your user dashboard. Customize it as needed.</p>
    </section>

    <section>
        <h2> Activities</h2>
        <ul>
            <a href="{{ route('products.list') }}">
                <button style="padding: 10px; margin: 10px; cursor: pointer;"> Product Management</button>
            </a>
        </ul>
    </section>
</main>

<footer>
    &copy; 2023 User Dashboard
</footer>

</body>
</html>
