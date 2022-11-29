<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    //
    function dashboard()
    {

        $data = Post::where('user_id', auth()->user()->id)->get();

        // $data = Post::all();
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

    function add()
    {
        return view('addpost');
    }
}
