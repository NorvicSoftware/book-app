@extends('layout')
@section('content')
    <h2>{{ __('Book create') }}</h2>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>{{ __('Title') }}</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
         <p>{{ $message }}</p>
        @enderror
        <label>{{ __('subtitle') }}</label>
        <input type="text" name="subtitle" value="{{ old('subtitle') }}">
        @error('subtitle')
        <p>{{ $message }}</p>
        @enderror
        <label>{{ __('Number page') }}</label>
        <input type="text" name="numberPage" value="{{ old('numberPage') }}">
        @error('numberPage')
        <p>{{ $message }}</p>
        @enderror
        <label>Lenguaje</label>
        <input type="text" name="language" value="{{ old('language') }}">
        @error('language')
        <p>{{ $message }}</p>
        @enderror
        <label>Descripcoion</label>
        <input type="text" name="description" value="{{ old('description') }}">
        <label>Estado</label>
        <input type="text" name="status" value="{{ old('status') }}">
        @error('status')
        <p>{{ $message }}</p>
        @enderror
        <label>Precio</label>
        <input type="text" name="price" value="{{ old('price') }}">
        <label>Editorial</label>
        <select id="editorial_id" name="editorial_id" class="styled-select">
            @foreach($editorials as $editorial)
                <option value="{{ $editorial->id }}">{{ $editorial->name }}</option>
            @endforeach
        </select>
        @error('editorial_id')
        <p>{{ $message }}</p>
        @enderror
        <label>Genero</label>
        <select id="gender_id" name="gender_id" class="styled-select">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>
        @error('gender_id')
        <p>{{ $message }}</p>
        @enderror
        <input type="submit" value="{{ __('Save book') }}">
    </form>
@endsection

