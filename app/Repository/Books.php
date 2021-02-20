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
        $book = auth()->user()->books()->create($data);
        if (!empty($data['authorIds'])) {
            $book->authors()->sync($data['authorIds']);
        }
        if (!empty($data['genreIds'])) {
            $book->genres()->sync($data['genreIds']);
        }
        return $book;
    }

    public function activeBooks($params = [], $paginate = false)
    {
        $query = $this->book->active()->with('authors');

        if (!empty($params['search'])) {
            $query = $query->where(function ($q) use ($params) {
                $q->where('books.name', 'LIKE', '%' . $params['search'] . '%');
                $q->orWhereHas('authors', function ($select) use ($params) {
                    $select->where('authors.name', 'LIKE', '%' . $params['search'] . '%');
                });
            });
        }

        $query = $query->orderBy('created_at', 'DESC');

        if(!empty($paginate)){
            return $query->simplePaginate();
        }

        return $query->count();
    }
}
