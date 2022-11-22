<th>
    <form action="{{ route('direccion.delete', $direccion->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <tr>{{ $direccion->id }} <-></tr>
        <tr>{{ $direccion->calle }} <-></tr>
        <tr>{{ $direccion->numero }} <-></tr>
        <tr>{{ $direccion->cod_postal }} <-></tr>
        <tr>{{ $direccion->municipio }} <-></tr>
        <tr>{{ $direccion->usuario_id }}</tr>
        <tr><button type="submit">Delete</button></tr>
        <br>
    </form>
</th>