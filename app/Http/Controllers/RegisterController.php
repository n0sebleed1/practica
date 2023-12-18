<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function register(Request $req){
        $validation = $req->validate([ // Валидация
            'name' => 'required|min:5|max:50',
            'phone' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:50',
            'login' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:50'
        ]);

        $register = new Register(); //ввод данных
        $register->surName = 'NULL';
        $register->name = $req->input('name');
        $register->lastName = 'NULL';
        $register->phone = $req->input('phone');
        $register->email = $req->input('email');
        $register->login = $req->input('login');
        $register->password = $req->input('password');
        $register->status = 'user';

        $register->save();
    }
}
