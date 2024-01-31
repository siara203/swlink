<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <title>Login</title>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="post" action="{{ route('login') }}">
        @csrf
        <div class="user-box">
            <input type="text" name="username" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <h4 style="font-"> @include('errors.note')</h4>
        <button class="submit" type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
        </button>
    </form>
</div>
</body>
</html>
