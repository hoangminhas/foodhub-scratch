<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User detail</title>
</head>
<body>
<h2>Detail of {{$user->name}}</h2>
<table border="10">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role_ID</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->role_id}}</td>
    </tr>
    </tbody>
</table>
<a href="{{route('users.index')}}">Back</a>
</body>
</html>
