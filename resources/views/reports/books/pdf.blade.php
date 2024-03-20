<html>
<header>
    <title>REPORTE EN PDF</title>
</header>
<body>
<img src="img/logo-norvic.png">
<h2>{{ $report_book }}</h2>
<table>
    <tr>
        <th>Titulo</th>
        <th>SubTitle</th>
        <th>Paginas</th>
        <th>Precio</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->subtitle }}</td>
            <td>{{ $book->numberPage }}</td>
            <td>{{ $book->price }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>

<style>
    h2 {
        color: #1270fc;
        font-size: 32px;
        margin-bottom: 10px;
    }
    img {
        height: 150px;
        width: 500px;
    }
</style>
