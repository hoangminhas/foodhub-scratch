<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
<h2>Create User</h2>
<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="number" name="role_id" placeholder="role id"><br>
    <button>Add</button>
    <button type="button"><a href="{{route('users.index')}}">Back</a></button>
</form>
</body>
</html>
