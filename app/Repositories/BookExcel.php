<?php

namespace App\Repositories;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BookExcel implements FromView
{
    protected  $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('reports.books.excel', ['data' => $this->data]);
    }
}
