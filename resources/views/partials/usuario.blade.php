<tr>
        <td>{{ $usuario->id }} </td>
        <td>{{ $usuario->nombre }} </td>
        <td>{{ $usuario->apellido }}</td>
        @if(!isset($usuario->direccion->cod_postal))
            <td>-<td>
        @else
            <td>{{ $usuario->direccion->cod_postal }}</td>
        @endif
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