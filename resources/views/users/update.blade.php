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
    <form action="{{url('user/update')}}" method="post">
        @csrf
    <div class="form-group">
        <input type="hidden" name="userid" value="{{$user->userid}}">
        <label>Name</label>
        <input type="text" name="username" class="form-control" value="{{$user->username }}">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="userpassword" class="form-control">
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="email" name="useremail" class="form-control" value="{{$user->useremail}}">
    </div>
    <div class="form-group">
        <label>Current Role : {{$user->role}}</label>
        <select name="role">
                <option value="1">Student</option>
                <option value="0">Admin</option>
        </select>
    </div>
    <input type="submit">
</form>
</body>
</html>