<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <form action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input name="title" type="text" value="{{$post->title}}">
        <br><br>
        <textarea name="body">{{$post->body}}</textarea>
        <br><br>
        <button>save</button>
    </form>
</body>
</html>