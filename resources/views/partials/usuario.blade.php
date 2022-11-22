<tr>
        <td>{{ $usuario->id }} </td>
        <td>{{ $usuario->nombre }} </td>
        <td>{{ $usuario->apellido }}</td>
        <td>
            <form action="{{ route('usuario.delete', $usuario->id) }}" method="POST">
            @csrf
            @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
        <td>
            
        </td>
</tr>