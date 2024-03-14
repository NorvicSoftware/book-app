<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Reports\ReportBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/editorials', [EditorialController::class, 'index'])->name('editorials.index');
Route::get('editorials/create', [EditorialController::class, 'create'])->name('editorials.create');
Route::post('editorials/create', [EditorialController::class, 'store'])->name('editorials.store');
Route::get('editorials/edit/{id}', [EditorialController::class, 'edit'])->name('editorials.edit');
Route::put('editorials/edit/{id}', [EditorialController::class, 'update'])->name('editorials.update');


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books/create', [BookController::class, 'store'])->name('books.store');
Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('books/edit/{id}', [BookController::class, 'update'])->name('books.update');

Route::get('reports/books', [ReportBookController::class, 'report'])->name('reports.books.report');

Route::get('books/show/{id}', [BookController::class, 'show'])->name('books.show');
Route::delete('books/delete/{id}', [BookController::class, 'destroy'])->name('books.delete');

