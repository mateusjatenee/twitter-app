<?php

namespace App;

use App\Models\User;
use Carbon\Carbon;
use DG\Twitter\Twitter;

class Tweet
{
    public $id;

    public $content;

    public $author;

    public $createdAt;

    public $repliesCount;

    public function __construct($id, $content, $author, $createdAt, $repliesCount)
    {
        $this->id = $id;
        $this->content = $content;
        $this->author = $author;
        $this->createdAt = $createdAt;
        $this->repliesCount = $repliesCount;
    }

    public static function forUser(User $user)
    {
        $twitter = new Twitter(config('services.twitter.client_id'), config('services.twitter.client_secret'), $user->twitter_token, $user->twitter_secret);

        return collect($twitter->load(Twitter::ME))->map(function ($tweet) {
            return new static($tweet->id, $tweet->text, $tweet->user->screen_name, new Carbon($tweet->created_at), 0);
        });
    }

    public function authorLink()
    {
        return 'https://twitter.com/' . $this->author;
    }

    public function link()
    {
        return $this->authorLink() . '/status/' . $this->id;
    }
}
