<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function home(Request $request)
    {
        $fname=$request->input('fname');
        $lname=$request->input('lname');

        return view('home', ['fname' => $fname, 'lname' => $lname]);
    }
}
