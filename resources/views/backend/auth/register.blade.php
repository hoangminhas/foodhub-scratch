<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="password" name="confirmPassword" placeholder="confirm password"><br>
    @if(\Illuminate\Support\Facades\Session::has('msg'))
        <p style="color: red">{{\Illuminate\Support\Facades\Session::get('msg')}}</p>
    @endif
    <button>Register</button>
</form>
</body>
</html>
