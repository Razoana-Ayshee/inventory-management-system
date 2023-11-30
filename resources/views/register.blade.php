{{--{{ session('message') ?? "" }}--}}
{{--<h3>Registration Form</h3>--}}
{{--<form action="{{route('register')}}" method="POST">--}}
{{--    {{ csrf_field() }}--}}
{{--    <label for="name">Name </label>--}}
{{--    <input type="text" name="name" placeholder="Enter Your Name" value="{{ old('name') }}"><br><br>--}}
{{--   <label for="email">Email </label>--}}
{{--    <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}"><br><br>--}}
{{--    <label for="password">Password</label>--}}
{{--    <input type="password" name="password" placeholder="Enter Your Password" value=""><br><br>--}}
{{--    <label for="password_confirmation">Password </label>--}}
{{--    <input type="password" name="password_confirmation" placeholder="Re-enter Your Password" value=""><br><br>--}}

{{--    <button type="submit">Submit</button><br>--}}
{{--    <a href="{{ route('login') }}">Sign In</a>--}}
{{--</form>--}}


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            color: #343a40;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Registration Form</h3>

    <form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Your Password" value="">

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Re-enter Your Password" value="">

        <button type="submit">Submit</button>

        <a href="{{ route('login') }}">Sign In</a>
    </form>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
