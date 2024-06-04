<?php

namespace App\Service;

class RandomImage
{
    private const API_URL = 'https://api.unsplash.com/photos/random/?client_id=YOUR_ACCESS_KEY';
    public function __construct(private readonly string $key)
    {
    }

    public function getRandomImage()
    {
        return self::API_URL . $this->key;
    }

}