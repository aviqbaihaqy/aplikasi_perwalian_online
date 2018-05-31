<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * menampilkan profile user
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('profile');
    }
}
