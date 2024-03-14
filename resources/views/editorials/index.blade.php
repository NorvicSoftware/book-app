<x-layout>
    <h2>EDITORIALES</h2>
    <a href="/editorials/create" class="styled-button">Crear nueva Editorial</a>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Dirección</td>
            <td>Celular</td>
            <td>Acción</td>
        </tr>
        @foreach($editorials as $editorial)
            <tr>
                <td>{{ $editorial->name }}</td>
                <td>{{ $editorial->address }}</td>
                <td>{{ $editorial->phone }}</td>
                <td>
                    <a href="editorials/edit/{{ $editorial->id }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
