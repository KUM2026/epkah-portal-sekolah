<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // hardcode credential untuk testing
        $adminEmail = "admin@gmail.com";
        $adminPassword = "1234";

        // check input
        if ($request->email === $adminEmail && $request->password === $adminPassword) {
            // simpan nama dalam session
            session(['nama' => 'Admin EPKAH']);

            return redirect()->route('admin.dashboard');
        }

        // kalau salah
        return back()->withErrors(['login' => 'Email atau password salah']);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }
}
