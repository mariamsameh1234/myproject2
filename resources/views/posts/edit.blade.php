<form action="/posts/{{$post['id']}}" method="post">
    @method('put')
    @csrf
    <input type="text" placeholder="Title" value="{{$post['title']}}" name="Title"><br>
    <input type="text" placeholder="Body" value="{{$post['body']}}"name="Body"><br>
    <input type="text" placeholder="Create By" value="{{$post['create_by']}}"name="Create By"><br>
    <input type="submit" value="Update">
</form> 
