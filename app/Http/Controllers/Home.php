<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Home extends Controller
{
    //
    function dashboard()
    {

        $data = Post::all();
        return view('dashboard', compact('data'));
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }
}
