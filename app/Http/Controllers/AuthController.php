<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginProcess(Request $request) {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return back()->with('error','Email atau password salah');
    }

    public function register() {
        return view('auth.register');
    }

    public function registerProcess(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'umkm'
        ]);
        return redirect('/login');
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
