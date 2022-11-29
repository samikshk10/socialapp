<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
function dashboard(){
    return view('dashboard');
}

function login(){
    return view('login');
}

function register(){
    return view('register');
}

}
