<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use PDF;
use App\Repositories\BookExcel;
use Maatwebsite\Excel\Facades\Excel;

class ReportBookController extends Controller
{
    protected $books;

    public function __construct(BookRepository $books){
        $this->books = $books;
    }

    public function report(){
        return view('reports.books.index', ['books' => $this->books->getBookActive()]);
    }

    public function reportPDF(){
        $data = [
            "books" => $this->books->getBookActive(),
            'report_book' => "REPORTE DE LIBROS"
        ];
        $pdf = PDF::loadView('reports.books.pdf', $data);
        return $pdf->stream();
    }

    public function reportExcel(){
        $data = [
            "books" => $this->books->getBookActive(),
            'report_book' => "REPORTE DE LIBROS"
        ];
        return Excel::download(new BookExcel($data), "reporte-de-libros.xlsx");
    }
}
