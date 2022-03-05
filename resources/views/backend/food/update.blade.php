<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Food</title>
</head>
<body>
<h2>Update {{$food->name}}</h2>
<form action="{{route('food.update', $food->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{$food->name}}"><br>
    <input type="text" name="description" value="{{$food->description}}"><br>
    <input type="text" name="price" value="{{$food->price}}"><br>
    <input type="number" name="food_code" value="{{$food->food_code}}"><br>
    <button>Update</button>
</form>
</body>
</html>
