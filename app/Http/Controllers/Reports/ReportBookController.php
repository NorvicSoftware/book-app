<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Repositories\BookRepository;

class ReportBookController extends Controller
{
    protected $books;

    public function __construct(BookRepository $books){
        $this->books = $books;
    }

    public function report(){
        return view('reports.books.index', ['books' => $this->books->getBookActive()]);
    }
}
