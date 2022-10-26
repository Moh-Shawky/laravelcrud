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
    <table>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <th>{{$user->userid }}</th>
            <th>{{$user->username }}</th>
            <th>{{$user->useremail }}</th>
            <th><a href="/user/delete/{{$user->userid}}">Delete</a></th>
            <th><a href="/user/edit/{{$user->userid}}">Edit</a></th>
        </tr>  
        @endforeach
       
    </table>
</body>
</html>