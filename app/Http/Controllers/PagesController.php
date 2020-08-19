<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function home()
    {
        return view('welcome');
    }

    public function category()
    {
        return view('category');
    }

    public function book()
    {
        return view('book');
    }
}