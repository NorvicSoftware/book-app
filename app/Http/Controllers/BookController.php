<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Gender;
use App\Models\Editorial;
use App\Repositories\BookRepository;

class BookController extends Controller
{
    protected  $books;

    public function __construct(BookRepository $books){
        $this->books = $books;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books' => $this->books->getBookActive()]);
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
        $request->validate([
           'title'=> 'required|min:5|max:50|unique:books,title',
           'subtitle' => 'required',
           'numberPage' => 'required|numeric',
           'status' => 'required|max:15',
            'language' => 'min:5|max:50',
            'gender_id' => 'required|numeric',
            'editorial_id' => 'required|numeric',
        ]);

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
