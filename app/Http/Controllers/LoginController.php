<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $validation = $req->validate([
            'login' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:50'
        ]);
    }
}