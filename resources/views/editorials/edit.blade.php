<x-layout>
    <h2>EDITAR EDITORIAL</h2>

    <form action="{{ route('editorials.update', $editorial->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Nombre</label>
        <input type="text" name="name" value="{{ $editorial->name }}">
        <label>Dirección</label>
        <input type="text" name="address" value="{{ $editorial->address }}">
        <label>Telefono</label>
        <input type="text" name="phone" value="{{ $editorial->phone }}">
        <input type="submit" value="GUARDAR EDITORIAL">
    </form>
</x-layout>
