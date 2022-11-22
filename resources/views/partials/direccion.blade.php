<tr>
    <td>{{ $direccion->id }}</td>
    <td>{{ $direccion->calle }}</td>
    <td>{{ $direccion->numero }}</td>
    <td>{{ $direccion->cod_postal }}</td>
    <td>{{ $direccion->municipio }}</td>
    <td>{{ $direccion->usuario_id }}</td>
    <form action="{{ route('direccion.delete', $direccion->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <td><button type="submit">Delete</button></td>
    </form>
</tr>