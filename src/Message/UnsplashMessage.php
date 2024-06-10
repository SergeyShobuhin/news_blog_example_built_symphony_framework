<?php

namespace App\Message;

readonly class UnsplashMessage
{
    public function __construct(
        private int $content,
    ) {
    }

    public function getContent(): int
    {
        return $this->content;
    }
}
