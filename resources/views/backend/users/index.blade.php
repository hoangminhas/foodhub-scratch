<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
</head>
<body>
<h2>User List</h2>
<a href="{{route('users.create')}}">Add user</a>
<table border="20">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key=>$user)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('users.show', $user->id)}}">Detail</a></td>
            <td><a href="{{route('users.destroy', $user->id)}}">Delete</a></td>
            <td><a href="{{route('users.edit', $user->id)}}">Update</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
