<html>
<header>
<title>LIBROS</title>
</header>
<body>
<h2>LIBROS</h2>
<table>
    <tr>
        <td>Titulo</td>
        <td>Subtitulo</td>
        <td>Paginas</td>
        <td>Lenguaje</td>
        <td>Estado</td>
        <td>Precio</td>
        <td>Genero</td>
        <td>Editorial</td>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->subtitle }}</td>
            <td>{{ $book->numberPage }}</td>
            <td>{{ $book->language }}</td>
            <td>{{ $book->status }}</td>
            <td>{{ $book->price }}</td>
            <td>{{ $book->gender->name }}</td>
            <td>{{ $book->editorial->name }}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
<style>
    html {
        font-size: 16px;
    }

    /* Estilo para la etiqueta BODY */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
    }

    /* Estilo para la etiqueta H2 */
    h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
    }

    /* Estilo para la etiqueta TABLE */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Estilo para la etiqueta TR (filas) */
    tr {
        background-color: #f5f5f5;
    }

    /* Estilo para la etiqueta TH (celdas de encabezado) */
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    /* Estilo específico para las celdas de encabezado TH */
    th {
        background-color: #333;
        color: #7b7474;
    }

    /* Estilo para la etiqueta TD (celdas de datos) */
    td {
        background-color: #fff;
    }

    /* Estilo para la etiqueta TD en filas impares (opcional) */
    tr:nth-child(odd) td {
        background-color: #f9f9f9;
    }

</style>
