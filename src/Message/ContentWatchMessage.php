<?php

namespace App\Message;

class ContentWatchMessage
{
    public function __construct(
        private readonly string $content,
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }

}