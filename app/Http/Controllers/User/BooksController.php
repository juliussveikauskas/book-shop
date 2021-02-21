<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Mail\BookReport;
use App\Mail\PurchaseConfirmation;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Repository\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $books = auth()->user()->books()->with('authors', 'genres')->orderBy('name', 'ASC')->paginate(20);
        return view('user.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Author $author, Genre $genre)
    {
        $authors = $author->get();
        $genres = $genre->get();
        return view('user.books.form', compact('authors', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookStoreRequest $request, Books $books)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $input['file'] = $request->file('image');
        }
        $books->create($input);
        return redirect()->route('user.books.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book, Author $author, Genre $genre)
    {
        $authors = $author->orderBy('name', 'ASC')->get();
        $genres = $genre->orderBy('name', 'ASC')->get();
        return view('user.books.form', compact('book', 'authors', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('user.books.index');
    }

    public function report(Request $request, Book $book)
    {
        $book = $book->find($request->input('book_id'));
        $comment = $request->input('comment');
        $mail = config('mail.from.address');
        Mail::to(config('mail.from.address'))->send(new BookReport(auth()->user(), $book, $comment));
        $message = 'Report sent successfully!';
        return view('books.show', compact('book', 'message'));
    }

}
