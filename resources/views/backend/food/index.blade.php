<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Index</title>
</head>
<body>
<h2>Food List</h2>
<a href="{{route('food.create')}}">Add Food</a>
<a href="{{route('logout')}}">logout</a>
<table border="20">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($foods as $key=>$food)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$food->name}}</td>
            <td>{{$food->price}}</td>
            <td><a href="{{route('food.show', $food->id)}}">Detail</a></td>
            <td><a href="{{route('food.destroy', $food->id)}}">Delete</a></td>
            <td><a href="{{route('food.edit', $food->id)}}">Update</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
