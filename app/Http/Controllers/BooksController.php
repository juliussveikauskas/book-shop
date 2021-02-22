<?php

namespace App\Http\Controllers;


use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use App\Repository\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Books $booksRepository)
    {
        $books = $booksRepository->activeBooks($request->all(), true);
        return view('index', compact('books'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book = $book->active()->with('reviews.user')->withAvg('reviews','rating')->findOrFail($book->id);
        return view('books.show', compact('book'));
    }
    
}
