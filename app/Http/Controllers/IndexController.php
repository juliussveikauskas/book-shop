<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repository\Books;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Books $booksRepository)
    {
        $input = $request->all();
        $input['status'] = Book::ACTIVE;
        $limit = 10;
        $books = $booksRepository->collectBooks($input)->paginate($limit);
        $totalCount = $booksRepository->collectBooks($input)->count();
        $keyword = !empty($input['search']) ? $input['search'] : null;

        return view('index', compact('books', 'keyword', 'limit', 'totalCount'));
    }


}
