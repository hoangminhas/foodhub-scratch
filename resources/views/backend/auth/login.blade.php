<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form action="{{route('login')}}" method="post">
    @csrf
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    @if(\Illuminate\Support\Facades\Session::has('error'))
        <p style="color: red">{{\Illuminate\Support\Facades\Session::get('error')}}</p>
    @endif
    <button>Login</button>
</form>
</body>
</html>
