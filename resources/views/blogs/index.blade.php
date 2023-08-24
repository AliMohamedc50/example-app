<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background: #41064d99;
            font-family: sans-serif;
            color: white;
        }
        table th { 
            padding: 10px 15px;
        }
        table .edit {
            background: darkcyan;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            color: antiquewhite;
        }
        .delete {
            background: #c60e0e;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            color: antiquewhite;
        }
    </style>
</head>
<body>
    <div>
        <a href=""></a>
    </div>
    <table border="2">
        <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>content</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
@foreach($blogs as $blog)
            <tr>
                <th>{{$blog->id}}</th>
                <th>{{$blog->title}}</th>
                <th>{{$blog->content}}</th>
                <th>
                    <a class="edit" href="{{route('blogs.edit', $blog->id)}}">Edit</a>
                    <a class="delete" href="{{route('blogs.delete', $blog->id)}}">Delete</a>
                    <!-- <a href=""></a> -->
                </th>
                <!-- <th></th> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('blogs.create')}}">Add new</a>
</body>
</html>