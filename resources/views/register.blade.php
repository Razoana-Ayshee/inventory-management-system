{{--{{ session('message') ?? "" }}--}}
<h3>Registration Form</h3>
<form action="{{route('register')}}" method="POST">
    {{ csrf_field() }}
    <label for="name">Name </label>
    <input type="text" name="name" placeholder="Enter Your Name" value="{{ old('name') }}"><br><br>
   <label for="email">Email </label>
    <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Enter Your Password" value=""><br><br>
    <label for="password_confirmation">Password </label>
    <input type="password" name="password_confirmation" placeholder="Re-enter Your Password" value=""><br><br>

    <button type="submit">Submit</button><br>
    <a href="{{ route('login') }}">Sign In</a>
</form>
