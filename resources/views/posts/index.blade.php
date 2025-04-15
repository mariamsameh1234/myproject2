<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
<a href="/posts/create">Add new post</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>create by</th>
        </tr>
        @foreach($posts as $posts)
            <tr>
                <td>{{$posts['id']}}</td>
                <td>{{$posts['title']}}</td>
                <td>{{$posts['body']}}</td>
                <td>{{$posts['create_by']}}</td>
                <td><a href="/posts/{{$posts['id']}}">view</a></td>
                <td><a href="/posts/{{$posts['id']}}/edit">Edit</a></td>
                <td>
                <form action="/posts/<%=post['id']%>" method="post">
                 @method('delete')
                 @csrf
                 <input type="submit" value="Delete">
                 </form>
                </td>

            </tr>
        @endforeach
    </table>
</body>
</html> 
