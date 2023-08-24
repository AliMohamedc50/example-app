<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <style>
        form {
            background: wheat;
        }
    </style>

</head>
<body>
    <form action="{{Route('blogs.store')}}" method="post">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title"><br>
        <label for="">countent</label>
        <input type="text" name="content"><br>
        <input type="submit" value="add" name="add">
    </form>
</body>
</html>