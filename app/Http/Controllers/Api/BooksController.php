<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::active()->with('authors', 'genres')->paginate(5);
        return BookResource::collection($books);
    }

    public function show(Book $book)
    {
        return new BookResource($book->append('description'));
    }
}
