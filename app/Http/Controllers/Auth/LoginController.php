<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $twitterUser = Socialite::driver('twitter')->user();

        $user = User::firstOrCreate([
            'twitter_id' => $twitterUser->id,
        ], [
            'nickname' => $twitterUser->nickname,
            'name' => $twitterUser->name,
            'email' => $twitterUser->email,
            'twitter_token' => $twitterUser->token,
            'twitter_secret' => $twitterUser->tokenSecret,
        ]);

        $user->update([
            'twitter_token' => $twitterUser->token,
            'twitter_secret' => $twitterUser->tokenSecret,
        ]);

        Auth::login($user);

        return redirect('tweets');
    }
}
