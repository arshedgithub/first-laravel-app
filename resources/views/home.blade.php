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

    <h2>Create Post</h2>
    <form action="/create-post" method="post">
        @csrf
        <input type="text" name="title" placeholder="title">
        <br><br>
        <textarea name="body" rows="10" placeholder="body content..."></textarea>
        <br><br>
        <button>save</button>
    </form>

    <h2>All Posts</h2>
    @foreach ($posts as $post)
    <div style="background-color: antiquewhite; margin: 10px; padding: 10px">
        <h3>{{$post['title']}}<small><i> by {{$post->user->name}}</i></small></h3>
        {{$post['body']}}
        <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
        <form action="/delete-post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </div>
        
    @endforeach

    @else

    <div>
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>

    <div>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>

    @endauth

</body>
</html>