@extends('layout')
@section('content')
    <h2>LIBROS</h2>
    <a href="/books/create" class="styled-button">CREAR NUEVO LIBRO</a>
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
            <td>Acción</td>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }} </td>
                <td>{{ $book->subtitle }}</td>
                <td>{{ $book->numberPage }}</td>
                <td>{{ $book->language }}</td>
                <td>{{ $book->status }}</td>
                <td>{{ $book->price }}</td>
                <td>{{ $book->gender->name }}</td>
                <td>{{ $book->editorial->name }}</td>
                <td>
                    <a href="books/edit/{{ $book->id }}">Editar</a>
                    <a href="books/show/{{ $book->id }}">Ver</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
