@extends('layout')
@section('content')
    <h2>EDITAR LIBRO</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Titulo</label>
        <input type="text" name="title" value="{{ $book->title }}">
        <label>Subtitulo</label>
        <input type="text" name="subtitle" value="{{ $book->subtitle }}">
        <label>Paginas</label>
        <input type="text" name="numberPage" value="{{ $book->numberPage }}">
        <label>Lenguaje</label>
        <input type="text" name="language" value="{{ $book->language }}">
        <label>Descripcoion</label>
        <input type="text" name="description" value="{{ $book->description }}">
        <label>Estado</label>
        <input type="text" name="status" value="{{ $book->status }}">
        <label>Precio</label>
        <input type="text" name="price" value="{{ $book->price }}">
        <label>Editorial</label>
        <select id="editorial_id" name="editorial_id" class="styled-select">
            @foreach($editorials as $editorial)
                @if($editorial->id == $book->editorial_id)
                    <option value="{{ $editorial->id }}" selected>{{ $editorial->name }}</option>
                @else
                    <option value="{{ $editorial->id }}">{{ $editorial->name }}</option>
                @endif
            @endforeach
        </select>
        <label>Genero</label>
        <select id="gender_id" name="gender_id" class="styled-select">
            @foreach($genders as $gender)
                @if($gender->id == $book->gender_id)
                    <option value="{{ $gender->id }}" selected>{{ $gender->name }}</option>
                @else
                    <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="GUARDAR LIBRO">
    </form>
@endsection

