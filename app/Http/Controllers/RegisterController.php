<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request) {
        
        // Получить все данные в виде массива
        // $data = $request->all();
        // Получить конкретные данные в виде массива
        // $data = $request->only(['name', 'email']);

        // dd(app('request'));
        // dd(app()->make('request'));

        // Получить конкретное поле в виде строки
        // $name = $request->input('name');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password-confirmation');
        $agree = $request->boolean('agreement');
        // dd($email, $name, $agree);

        if(true) {
            return redirect()->back()->withInput();
        }

        // return redirect()->route('home');
    }
}
