<?php

namespace App\Http\Controllers;


use App\Http\Requests\AuthorStoreRequest;
use App\Http\Requests\BookStoreRequest;
use App\Models\Author;
use App\Models\Book;
use App\Repository\Books;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorStoreRequest $request, Author $author)
    {
        $author = $author->create($request->all());
        return response()->json($author);
    }

}
