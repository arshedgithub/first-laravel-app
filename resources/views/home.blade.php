<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>

    <div>My First Laravel Project</div>

    @auth
    
    <p>Congrats You are logged in</p>
    <form action="/logout" method="post">
        @csrf
        <button>Logout</button>
    </form>

    @else

    <form action="/register" method="POST">
        @csrf
        <input name="name" type="text" placeholder="name">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="password" placeholder="password">
        <button>Register</button>
    </form>

    @endauth

</body>
</html>