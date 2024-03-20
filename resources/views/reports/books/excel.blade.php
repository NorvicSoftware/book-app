<html>
<body>
<h2>{{ $data['report_book'] }}</h2>
<table>
    <tr>
        <th>Titulo</th>
        <th>Subtitulo</th>
        <th>Paginas</th>
        <th>Precio</th>
    </tr>
    @foreach($data['books'] as $book)
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
