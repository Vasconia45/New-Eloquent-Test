<tr>
        <td>{{ $usuario->id }} </td>
        <td>{{ $usuario->nombre }} </td>
        <td>{{ $usuario->apellido }}</td>
        <td>{{ $dir->calle}}</td>
        <td>
            <form action="{{ route('usuario.delete', $usuario->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
        <td>
            <form action="{{ route('usuario.post', $usuario->id) }}" method="POST">
                @csrf
                <button type="submit">Ver Posts</button>
            </form>
        </td>
</tr>