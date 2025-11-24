<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    /**
     * Redirect ke Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google Callback
     */
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $this->loginOrRegister($user, 'google');
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal log masuk dengan Google. Sila cuba lagi.');
        }
    }

    /**
     * Redirect ke Facebook OAuth
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Handle Facebook Callback
     */
    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $this->loginOrRegister($user, 'facebook');
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal log masuk dengan Facebook. Sila cuba lagi.');
        }
    }

    /**
     * Logic untuk login atau register
     */
    private function loginOrRegister($socialUser, $provider)
    {
        // Cari user berdasarkan email atau social ID
        $user = User::where('email', $socialUser->getEmail())->first();

        if ($user) {
            // User sudah wujud, update social ID jika belum ada
            if (!$user->{$provider . '_id'}) {
                $user->update([
                    $provider . '_id' => $socialUser->getId()
                ]);
            }
        } else {
            // Buat user baru
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                $provider . '_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
                'role' => 'pengguna', // Default role
                'email_verified_at' => now(),
                'password' => bcrypt(Str::random(32)), // Random password untuk social auth
            ]);
        }

        // Login user
        Auth::login($user, remember: true);

        // Simpan session
        session(['user_role' => $user->role]);

        return $user;
    }
}
