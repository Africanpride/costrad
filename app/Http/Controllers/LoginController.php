<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        try {
            // Get the authenticated user from the Google OAuth provider
            // $familyName = $user->getRaw()['family_name'];
            // dd($user->user['given_name']);
            $existingUser = User::where('google_id', $user->id)->first();
            if ($existingUser) {
                // If the user already exists, log them in and redirect to the homepage
                Auth::login($existingUser);
                // $existingUser->updateProfilePhoto($existingUser->getAvatar());
                return redirect('/');
            } else {

                $firstName = $user->user['given_name'];
                $lastName = $user->user['family_name'];
                $email = $user->user['email'];
                $google_id = $user->user['id'];
                $avatar = $user->user['picture'];

                $newUser = User::create([
                    'firstName' => $user->user['given_name'],
                    'lastName' => $user->user['family_name'],
                    'email' => $user->user['email'],
                    'google_id' => $user->user['id'],
                    'participant' => true,
                    'password' => Hash::make(Str::random(12))
                ]);

                $newUser->forceFill([
                    'avatar' => $user->avatar,
                ])->save();


                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
           dd($e);
            return redirect('login')->withErrors(['error' => 'Unable to authenticate with Google. Please try again later.']);
        }
    }
}
