<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    // Tunjuk halaman register
    public function showRegistrationForm()
    {
        return view('auth.register'); // pastikan blade ni di resources/views/auth/register.blade.php
    }
}
