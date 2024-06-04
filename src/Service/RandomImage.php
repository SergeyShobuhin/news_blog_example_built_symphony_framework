<?php

namespace App\Service;

class RandomImage
{
    //Access Key=uUdatS6483NfCP16P0lek_xfxyBNSVkX_n5dzyJFFKs
    private const API_URL = 'https://api.unsplash.com/photos/random/?client_id=YOUR_ACCESS_KEY';
    public function __construct(private readonly string $key)
    {
    }

    public function getRandomImage()
    {
        return self::API_URL . $this->key;
    }

}