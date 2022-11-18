<th>
    <form action="" method="POST">
        @csrf
        @method('DELETE')
        <tr>{{ $usuario->id }} <-></tr>
        <tr>{{ $usuario->nombre }} <->  </tr>
        <tr>{{ $usuario->apellido }}</tr>
        <br>
        <tr><button type="submit" formaction="">Delete</button></tr>
    </form>
</th>