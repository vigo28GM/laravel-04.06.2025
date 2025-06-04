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
        $book = Book::create([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books/' . $book->id);
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['Book' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        return $book;
    }

    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books/' . $book->id);
    }
}
