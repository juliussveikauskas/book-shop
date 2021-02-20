<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ReviewStoreRequest;
use App\Models\Book;
use App\Models\Review;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewStoreRequest $request, Review $review)
    {
        $review->updateOrCreate([
            'user_id' => $request->input('user_id'),
            'book_id' => $request->input('book_id')
        ], $request->all());
        return redirect()->route('books.show', [$request->input('book_id')]);
    }

}
