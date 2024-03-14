<?php

namespace App\Repositories;


use App\Models\Book;

class BookRepository
{
    public function getBookActive(){
        return Book::whereIn('status', ['activo', 'Bloqueado'])->get();
    }
}
