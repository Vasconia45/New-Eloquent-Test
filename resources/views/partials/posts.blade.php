<tr>
    <td>{{ $post->titulo }}</td>
    <td>{{ $post->texto }}</td>
    <td>
        <form action="" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit">Delete</button>
        </form>
    </td>
    <td>
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <button type="submit">Edit</button>
        </form>
    </td>
</tr>