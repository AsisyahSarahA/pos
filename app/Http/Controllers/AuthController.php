<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function proseslogin(Request $request)
    {
        // data identitas untuk veriifikasi uuser

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return Redirect::back()->withErrors([
            'email' => 'Login gagal, email atau password salah.',
        ]);

        // return back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ]);

    }

    public function proseslogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        // $request->session()->regenerateToken();

        return redirect('/');

    }
}
