<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    //

    public function registeruser(Request $req)
    {
        // dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        user::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password)
        ]);
        // return redirect('/login');
        return redirect()->route('login');
    }


    public function loginuser(Request $req){
       
        {
            //  dd($req->all());
            $req->validate([
                'email'=>'required|email',
                'password'=>'required'
            ]);

            if(Auth::attempt($req->only('email','password'))){
                return redirect()->route('dashboard');
                
            }else{
                
                return back()->with('fail','User Not Found!');
            }
           
            // return redirect('/login');
            // return redirect()->route('login');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
