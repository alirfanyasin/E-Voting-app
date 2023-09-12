<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $role = User::where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // if ($role == 'admin') {
            return redirect()->intended('app/dashboard');
            // }
            // if ($role == 'pengurus') {
            //     return redirect()->intended('dashboard');
            // }
        }

        return back()->withErrors(['message' => 'Email atau Password Anda salah!']);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
