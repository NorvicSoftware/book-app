@extends('layout')
@section('content')
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
@endsection

