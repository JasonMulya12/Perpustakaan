<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');
    }

    public function authanticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('student');
        }
        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');

    }
}