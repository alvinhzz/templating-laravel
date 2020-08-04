<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formulir()
    {
        return view('register');
    }

    public function welcome(Request $req)
    {
        $first_name  = $req->input('firstName');
        $last_name   = $req->input('lastName');
        $gender      = $req->input('gender');
        $nation      = $req->input('nation');
        $bio         = $req->input('bio');

        return view('welcome', [
            'name'   => $first_name . " " . $last_name,
            'gender' => $gender,
            'nation' => $nation,
            'bio'    => $bio
        ]);
    }
}
