<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books.index', ['Books' => $books]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
        'title' => 'required|unique:books|max:255',
        'author' => 'required',
        'released_at' => 'required'
    ]);

        $book = Book::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'released_at' => $validated['released_at'],
        ]);


        return redirect('/books/' . $book->id)->with("success", "book was created");
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['Book' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
         return view('books.edit', ['Book' => $book]);
    }

    public function update(Request $request, $id) {

        $book = Book::find($id);
        $book->update([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books/' . $book->id)->with("success", "book was updated");;
    }
    public function destroy($id){
        $book = Book::findorfail($id);
        $book->delete();
        return redirect('/books/')->with("success", "book was deleted");;
    }
}
