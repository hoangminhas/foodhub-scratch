<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
<h2>Update {{$user->name}}</h2>
<form action="{{route('users.update', $user->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{$user->name}}"><br>
    <input type="email" name="email" value="{{$user->email}}"><br>
    <input type="number" name="role_id" value="{{$user->role_id}}"><br>
    <button>Update</button>
</form>
</body>
</html>
