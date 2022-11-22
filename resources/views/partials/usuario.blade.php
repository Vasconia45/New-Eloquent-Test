<th>
    <form action="{{ route('usuario.delete', $usuario->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <tr>{{ $usuario->id }} <-></tr>
        <tr>{{ $usuario->nombre }} <->  </tr>
        <tr>{{ $usuario->apellido }}</tr>
        <tr><button type="submit">Delete</button></tr>
        <br>
    </form>
</th>