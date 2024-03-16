<x-layout>
    <h2>CREAR EDITORIAL</h2>
    <form action="{{ route('editorials.store') }}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="name" maxlength="50" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <label>Dirección</label>
        <input type="text" name="address" maxlength="250" value="{{ old('address') }}">
        @error('address')
            <p>{{ $message }}</p>
        @enderror
        <label>Telefono</label>
        <input type="text" name="phone" maxlength="15" value="{{ old('phone') }}">
        @error('phone')
            <p>{{ $message }}</p>
        @enderror
        <input type="submit" value="GUARDAR EDITORIAL">
    </form>
</x-layout>
