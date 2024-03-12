<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Gender;
use App\Models\Editorial;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::whereIn('status', ['activo', 'Bloqueado'])->get();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genders = Gender::all();
        $editorials = Editorial::all();
        return view('books.create', ['genders' => $genders, 'editorials' => $editorials]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->subtitle = $request->subtitle;
        $book->numberPage = $request->numberPage;
        $book->language = $request->language;
        $book->description = $request->description;
        $book->status = $request->status;
        $book->price = $request->price;
        $book->gender_id = $request->gender_id;
        $book->editorial_id = $request->editorial_id;
        $book->save();
        return redirect()->action([BookController::class, 'index']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genders = Gender::all();
        $editorials = Editorial::all();
        $book = Book::find($id);
        return view('books.edit', ['book' => $book, 'genders' => $genders, 'editorials' => $editorials]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->subtitle = $request->subtitle;
        $book->numberPage = $request->numberPage;
        $book->language = $request->language;
        $book->description = $request->description;
        $book->status = $request->status;
        $book->price = $request->price;
        $book->gender_id = $request->gender_id;
        $book->editorial_id = $request->editorial_id;
        $book->save();
        return redirect()->action([BookController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->status = "Eliminado";
        $book->save();
        //$book->delete();
        return redirect()->action([BookController::class, 'index']);
    }
}
