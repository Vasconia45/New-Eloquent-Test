<tr>
    <td>{{ $post->titulo }}</td>
    <td>{{ $post->texto }}</td>
    <td>
        <form action="{{ route('post.delete', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit">Delete</button>
        </form>
    </td>
    <td>
        <form action="{{ route('editpost', $post->id) }}" method="GET">
            <button type="submit">Edit</button>
        </form>
    </td>
</tr>