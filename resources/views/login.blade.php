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
    <form action="{{ url('user/loginRequest') }}" method="post">
    @csrf

    <label>email</label>
    <input type="text" name="useremail">
    <label>password</label>
    <input type="text" name="userpassword">
    <input type="submit">
    </form>
</body>
</html>