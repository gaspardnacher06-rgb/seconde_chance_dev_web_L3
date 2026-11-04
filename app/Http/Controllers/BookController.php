<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Http\Request;

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
    public function create(){
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required|string|max:150',
            'summary'=>'required|string',
            'publication_date'=>'required|date',
            'page_count'=>'required|int',

        ]);
        $book = Book::create($validated);
        return redirect('/books'.$book->id.'edit')->with('success','Livre créer!!!!');
    }

    public function update(Request $request, int $id){
        $validated=$request->validate([
            'title'=>'required|string|max:150',
            'summary'=>'required|string',
            'publication_date'=>'required|date',
            'page_count'=>'required|int',
        ]);
        $book = Book::findOrFail($id);
        $book->update($validated);
        return redirect('/books/'.$book->$id);
    }
    public function destroy(int $id){
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books');

    }
    public function edit(int $id){
        $book = Book::findOrFail($id);
        return view('books.edit',['book'=>$book]);
    }

    
}
