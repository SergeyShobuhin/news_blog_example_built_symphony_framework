<?php
//сервис погоды и ключ от сюда https://www.meteosource.com/client

namespace App\Service;

class GismeteoApi
{
    private const API_URL = 'https://www.meteosource.com/api/v1/free/point';

//    private $key;

    public function __construct(private $apiKey)
    {
    }

    public function gismeteo()
    {
        $curl = curl_init();

//        широты Новосибирска
        $lat = '54.9833';
        $lon = '82.8964';

        $url = self::API_URL . "?lat={$lat}&lon={$lon}&sections=all&timezone=UTC&language=en&units=metric&key={$this->apiKey}";

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Получаем ответ в виде строки

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return ['error' => $error];
        }

        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $data = json_decode($response, true);
        curl_close($curl);

        return $data;
    }
}
