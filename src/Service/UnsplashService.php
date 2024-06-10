<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UnsplashService
{
//    private const API_URL = 'https://api.unsplash.com/photos/random/?client_id=YOUR_ACCESS_KEY';
    private const API_URL = 'https://api.unsplash.com/photos/random/';

    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly string              $key
    )
    {
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function getRandomImage(): ?string
    {

        $response = $this->client->request(
            'GET',
            'https://api.unsplash.com/photos/random',
            [
                'query' => [
                    'client_id' => $this->key,
                ],
            ]

        );
//        dump($response); exit();

        if ($response->getStatusCode() !== 200) {
            return null;
        }

        $data = $response->toArray();

        dump($response);
        dump($data);

        return $data['urls']['regular'] ?? null;
    }

}