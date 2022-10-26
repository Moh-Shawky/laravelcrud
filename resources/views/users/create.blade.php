<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('user/store') }}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="username">
    <label>email</label>
    <input type="text" name="useremail">
    <label>password</label>
    <input type="text" name="userpassword">
        <select name="role">
                <option value="1">Student</option>
                <option value="0">Admin</option>
        </select>
        <label>government</label>
    <div class="form-group">
        <select name="government">
            @foreach($governments as $gov){
                <option value="{{$gov->govid}}">{{$gov->govname}} </option>
    @endforeach
        </select>
    </div>
    <label>courses</label>
    <div class="form-group">
        <select name="courses">
            @foreach($courses as $cou){
                <option value="{{$cou->couid}}">{{$cou->couname}} </option>    @endforeach
        </select>
    </div>
    <input type="submit">
    </form>
</body>
</html>