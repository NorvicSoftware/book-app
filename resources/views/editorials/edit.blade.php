<html>
<header>
    <title>EDITAR EDITORIAL</title>
</header>
<body>
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

</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    form {
        width: 300px;
        margin: 50px auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #333;
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }

</style>
