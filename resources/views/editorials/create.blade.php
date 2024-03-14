<x-layout>
    <h2>CREAR EDITORIAL</h2>
    <form action="{{ route('editorials.store') }}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name">
        <label>Dirección</label>
        <input type="text" name="address">
        <label>Telefono</label>
        <input type="text" name="phone">
        <input type="submit" value="GUARDAR EDITORIAL">
    </form>
</x-layout>
