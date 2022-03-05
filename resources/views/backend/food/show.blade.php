<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food detail</title>
</head>
<body>
<h2>Detail of {{$food->name}}</h2>
<table border="10">
    <thead>
    <tr>
        <th>Food Code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{$food->food_code}}</td>
        <td>{{$food->name}}</td>
        <td>{{$food->description}}</td>
        <td>{{$food->price}}</td>
    </tr>
    </tbody>
</table>
<a href="{{route('food.index')}}">Back</a>
</body>
</html>
