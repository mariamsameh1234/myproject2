<h2>Are you sure you want to delete post number {{ $post }}?</h2>

<form action="/posts/{{ $post }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
