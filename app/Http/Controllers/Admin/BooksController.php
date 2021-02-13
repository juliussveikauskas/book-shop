<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookStoreRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Repository\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {
        $books = $book->orderBy('name', 'ASC')->paginate(20);
        return view('admin.books.index', compact('books'));
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
        return view('admin.books.form', compact('authors', 'genres'));
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
        return redirect()->route('admin.books');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.form', compact('book'));
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
        return redirect()->route('admin.books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books');
    }
}
