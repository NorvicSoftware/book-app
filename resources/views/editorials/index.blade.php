<html>
<header>
    <title>EDITORIALES</title>
</header>
<body>
<h2>EDITORIALES</h2>
<table>
    <tr>
        <td>Nombre</td>
        <td>Dirección</td>
        <td>Celular</td>
    </tr>

    @foreach($editorials as $editorial)
    <tr>
        <td>{{ $editorial->name }}</td>
        <td>{{ $editorial->address }}</td>
        <td>{{ $editorial->phone }}</td>
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