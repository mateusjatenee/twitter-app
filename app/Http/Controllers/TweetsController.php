<?php

namespace App\Http\Controllers;

use App\Notifications\NewTweet;
use App\Tweet;

class TweetsController extends Controller
{
    public function index()
    {
        $tweets = Tweet::forUser(auth()->user());

        return view('tweets.index', [
            'tweets' => $tweets,
        ]);
    }

    public function store()
    {
        request()->validate([
            'content' => ['string', 'max:240'],
        ]);

        $notification = new NewTweet(request('content'));

        auth()->user()->notify($notification);

        return back();
    }
}
