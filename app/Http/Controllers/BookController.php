<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::orderBy('publication_date')->get();

        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function show(int $id): View
    {
        $book = Book::findOrFail($id);

        return view('books.show', [
            'book' => $book,
        ]);
    }
}
