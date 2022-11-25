<tr>
    <td>{{ $tema->nombre }}</td>
    <td>
        <form action="{{ route('tema.delete', $tema->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>