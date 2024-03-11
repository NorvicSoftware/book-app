<html>
<header>
    <title>CREAR LIBRO</title>
</header>
<body>
<h2>CREAR LIBRO</h2>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <label>Titulo</label>
    <input type="text" name="title">
    <label>Subtitulo</label>
    <input type="text" name="subtitle">
    <label>Paginas</label>
    <input type="text" name="numberPage">
    <label>Lenguaje</label>
    <input type="text" name="language">
    <label>Descripcoion</label>
    <input type="text" name="description">
    <label>Estado</label>
    <input type="text" name="status">
    <label>Precio</label>
    <input type="text" name="price">
    <label>Editorial</label>
    <select id="editorial_id" name="editorial_id" class="styled-select">
        @foreach($editorials as $editorial)
            <option value="{{ $editorial->id }}">{{ $editorial->name }}</option>
        @endforeach
    </select>
    <label>Genero</label>
    <select id="gender_id" name="gender_id" class="styled-select">
        @foreach($genders as $gender)
            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="GUARDAR LIBRO">
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

    .styled-select {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        appearance: none; /* Para quitar la apariencia nativa del sistema operativo */
        -webkit-appearance: none; /* Para navegadores basados en WebKit, como Chrome y Safari */
        -moz-appearance: none; /* Para navegadores basados en Gecko, como Firefox */
        background: url('arrow-down.png') no-repeat right; /* Añade una flecha personalizada en el lado derecho del select */
    }

</style>
