<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'publication_year' => 'required|integer',
        ]);

        Book::create($request->all());

        return redirect('/books')->with('success', 'Book created successfully!');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'publication_year' => 'required|integer',
        ]);

        $book = Book::find($id);
        $book->update($request->all());

        return redirect('/books')->with('success', 'Book updated successfully!');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book deleted successfully!');
    }
}
