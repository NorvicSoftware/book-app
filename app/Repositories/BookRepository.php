<?php

namespace App\Repositories;


use App\Models\Book;

class BookRepository
{
    public function getBookActive(){
        //return Book::whereIn('status', ['activo', 'Bloqueado'])->get();
        //return Book::all();
        //return Book::where('language', '=', 'Español')->get(); //select * from books where language = 'Español';
        return Book::whereNotIn('status', ['Eliminado'])->get();

    }
}
