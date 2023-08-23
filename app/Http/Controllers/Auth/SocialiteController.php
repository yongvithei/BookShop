<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
class SocialiteController extends Controller
{
    public function redirect($provider, $role){
        session(['socialite_role' => $role]);
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        try {
            $role = session('socialite_role', 'user');

            $socialUser = Socialite::driver($provider)->user();

            $user = User::where([
                'provider' => $provider,
                'provider_id' => $socialUser->id
            ])->first();

            if ($user) {
                Auth::login($user);
                return redirect('/admin/dashboard');
            }
            if(User::where('email', $socialUser->getEmail())->exists()){
                return redirect('/login?from=admin')->withErrors(['login' => 'This email uses a different method to login']);
            }
            // If the user doesn't exist with the given provider and provider ID,
            // proceed to create a new user with Google authentication.

            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'username' => User::generateUserName($socialUser->getNickname()),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'provider_token' => $socialUser->token,
                'role'=>$role,
                'email_verified_at' => now(),
            ]);

            Auth::login($user);

            return redirect('/admin/dashboard');
        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
