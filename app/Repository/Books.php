<?php

namespace App\Repository;

use App\Models\Book;

class Books
{
    /** @var Book */
    protected $city;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function create($data = [])
    {
        if (!empty($data['file'])) {
            $data['image'] = time() . '.' . $data['file']->getClientOriginalExtension();
            $destinationPath = storage_path('app/public');
            $data['file']->move($destinationPath, $data['image']);
        }
        $book = $this->book->create($data);
        if (!empty($data['authorIds'])) {
            $book->authors()->sync($data['authorIds']);
        }
        if (!empty($data['genreIds'])) {
            $book->genres()->sync($data['genreIds']);
        }
        return $book;
    }
}
