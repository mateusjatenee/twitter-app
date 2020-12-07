<?php

namespace App;

class Twitter
{
    public $content;

    public $author;

    public $createdAt;

    public $likesCount;

    public function __construct($content, $author, $createdAt, $likesCount)
    {
        $this->content = $content;
        $this->author = $author;
        $this->createdAt = $createdAt;
        $this->likesCount = $likesCount;
    }
}
