<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Food</title>
</head>
<body>
<h2>Create Food</h2>
<form action="{{route('food.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="description" placeholder="description"><br>
    <input type="text" name="price" placeholder="price"><br>
    <input type="number" name="food_code" placeholder="food_code"><br>
    <button>Add</button>
    <button type="button"><a href="{{route('food.index')}}">Back</a></button>
</form>
</body>
</html>
