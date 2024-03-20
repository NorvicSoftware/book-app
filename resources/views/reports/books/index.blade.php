@extends('layout')
@section('content')
    <h2>REPORTE DE LIBROS</h2>
    <a href="{{ route('reports.books.pdf') }}" class="styled-button" target="_blank"> IMPRIMIR REPORTE PDF</a>
    <a href="{{ route('reports.books.excel') }}" class="styled-button"> IMPRIMIR REPORTE EXCEL</a>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Subtitulo</th>
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
@endsection
