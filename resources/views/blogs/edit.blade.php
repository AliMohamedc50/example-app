<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>
<body>
    <form action="{{Route('blogs.update', $blog->id )}}" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" value="{{$blog->title}}" name="title"><br>
        <label for="">countent</label>
        <input type="text" value="{{$blog->content}}" name="content"><br>
        <input type="submit" value="Add" name="add">
    </form>
</body>
</html>