<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        // $foo = session()->get('foo');
        // dd($foo);
        return view('login.index');

    }
    public function store(Request $request) {
    //    dd($request->session());
    //     $ip = $request->ip();
    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     $remember = $request->boolean('remember');
        // dd($email, $password, $remember, $ip);

        // return view('home.index');

        // return response('Запрос на вход');

        // return response()->redirectTo('/');

        // $session = session();
        // $session->put('foo', 'bar');
        // $session->forget('foo');
        // dd($session);
        session(['alert' => 'Добро пожаловать']);
        return redirect()->route('home');
    }
}
