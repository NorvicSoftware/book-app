<html>
<header>
    <title>MOSTRAR LIBRO</title>
</header>
<body>
<h2>MOSTAR LIBRO</h2>
<label> Titulo: {{ $book->title }}</label><br>
<label> SubTitulo: {{ $book->subtitle }}</label><br>
<label> Paginas: {{ $book->numberPage }}</label><br>
<label> Idioma: {{ $book->language }}</label><br>
<label> Descripcion: {{ $book->description }}</label><br>
<label> Estado: {{ $book->status }}</label><br>
<label> Precio: {{ $book->price }}</label><br>
<label> Genero: {{ $book->gender->name }}</label><br>
<label> Editorial: {{ $book->editorial->name }}</label>

<form action="{{ route('books.delete', $book->id) }}", method="POST">
    @csrf
    {{ method_field('DELETE') }}
    <input type="submit" value="ELIMINAR LIBRO" onclick="return confirmDelete('Realmente quiere elimiar el libro seleccionado')">
</form>
</body>
</html>
<script>
    function confirmDelete(value){
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
