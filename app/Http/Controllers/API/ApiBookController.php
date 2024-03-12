<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class ApiBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $books = Book::all();
        $books = Book::whereIn('status', ['activo', 'Bloqueado'])->get();
        return response()->json($books);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        $book = Book::find($id);
//        $book->delete();
        $book = Book::find($id);
        $book->status = "Eliminado";
        $book->save();
        return response()->json(['response' => "El libro fue eliminado correctamente"]);
    }
}
