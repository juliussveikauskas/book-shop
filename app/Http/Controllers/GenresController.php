<?php

namespace App\Http\Controllers;


use App\Http\Requests\GenreStoreRequest;
use App\Models\Genre;

class GenresController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GenreStoreRequest $request, Genre $genre)
    {
        $genre = $genre->create($request->all());
        return response()->json($genre);
    }

}
