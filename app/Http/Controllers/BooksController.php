<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function create(Request $request)
    {
        $book = new Book;
        $book->title = request('title');
        $book->excerpt = request('excerpt');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->cost = request('cost');
        $book->value = request('value');
        $book->released = request('released');
        $book->status = request('status');

        $book->save();
    }

    public function update($book_id)
    {
        // dd($book_id);

        $book = Book::find($book_id);

        $book->title = request('title');
        $book->excerpt = request('excerpt');
        $book->isbn = request('isbn');
        $book->pages = request('pages');
        $book->cost = request('cost');
        $book->value = request('value');
        $book->released = request('released');
        $book->status = request('status');

        $book->save();
    }


    public function deletebook(Request $request)
    {
        Book::find($request->book_id)->delete();
    }
}
