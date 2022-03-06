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
{{--@if(count($errors) > 0)--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li>{{$error}}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

<form action="{{route('users.store')}}" method="post">
    @csrf
    <input type="text" name="name" value="{{old('name')}}" placeholder="name"><br>
    @if($errors->has('name'))
        <div class="text-danger">
            <p>{{$errors->first('name')}}</p>
        </div>
    @endif
    <input type="email" name="email" value="{{old('email')}}" placeholder="email"><br>
    @if($errors->has('email'))
        <div class="text-danger">
            <p>{{$errors->first('email')}}</p>
        </div>
    @endif
    <input type="password" name="password" placeholder="password"><br>
    @if($errors->has('password'))
        <div class="text-danger">
            <p>{{$errors->first('password')}}</p>
        </div>
    @endif
    <input type="number" name="role_id" value="{{old('role_id')}}" placeholder="role id"><br>
    @if($errors->has('role_id'))
        <div class="text-danger">
            <p>{{$errors->first('role_id')}}</p>
        </div>
    @endif
    <button>Add</button>
    <button type="button"><a href="{{route('users.index')}}">Back</a></button>
</form>
</body>
</html>
