<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Models\Book;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.change-password.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasswordUpdateRequest $request)
    {
        auth()->user()->update(['password'=> bcrypt($request->new_password)]);
        return view('user.change-password.index')->with('success', 'Password updated succesfully');
    }

}
