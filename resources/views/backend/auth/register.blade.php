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
{{--@if($errors->any())--}}
{{--    <ul>--}}
{{--        @foreach($errors->all() as $error)--}}
{{--        <li>{{$error}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endif--}}
<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" value="{{old('name')}}" name="name" placeholder="name"><br>
    <p style="color: red">{{$errors->has('name') ? $errors->first('name') : ""}}</p>
    <input type="email" value="{{old('email')}}" name="email" placeholder="email"><br>
    <p style="color: red">{{$errors->has('email') ? $errors->first('email') : ""}}</p>
    <input type="password" name="password" placeholder="password"><br>
    <p style="color: red">{{$errors->has('password') ? $errors->first('password') : ""}}</p>
    <input type="password" name="confirmPassword" placeholder="confirm password"><br>
    <p style="color: red">{{$errors->has('confirmPassword') ? $errors->first('confirmPassword') : ""}}</p>
    <select name="role_id" id="select">
        <option value="2">Store</option>
        <option value="3">Customer</option>
    </select><br>
@if(\Illuminate\Support\Facades\Session::has('msg'))
        <p style="color: red">{{\Illuminate\Support\Facades\Session::get('msg')}}</p>
    @endif
    <button>Register</button>
</form>
</body>
</html>
