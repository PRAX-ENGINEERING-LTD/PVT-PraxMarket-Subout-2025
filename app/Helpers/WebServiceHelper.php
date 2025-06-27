<?php

namespace App\Helpers;

// use Config;
use Exception;
use GuzzleHttp;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Config;
use Str;

class WebServiceHelper
{

    public $httpPostHeaders = [
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Accept' => 'application/json',
    ];

    public $httpGetHeaders = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ];

    public $httpPutHeaders = [
        'Content-Type' => 'application/x-www-form-urlencoded',
        'Accept' => 'application/json',
    ];

    public $httpGetMethod = "GET";
    public $httpPostMethod = "POST";
    public $httpPutMethod = "PUT";

    public function call($method, $endpoint, $headers, $params)
    {
        try {
            $client = new GuzzleHttp\Client(['verify' => false]);
            $response = $client->request($method, $endpoint, ['form_params' => $params, 'headers' => $headers]);
        } catch (RequestException $exception) {

            report($exception);

            if ($exception instanceof ClientException) {
                $response = json_decode($exception->getResponse()->getBody());
                if (isset($response->error->errors)) {
                    $messages = array();

                    foreach ($response->error->errors as $key => $value) {
                        array_push($messages, $value[0]);
                    }

                    throw ValidationException::withMessages(['errors' => $messages, 'statusCode' => $exception->getResponse()->getStatusCode()]);
                }

                if (isset($response->error)) {
                    throw ValidationException::withMessages(['errors' => $response->error, 'statusCode' => $exception->getResponse()->getStatusCode()]);
                }
            }

            throw $exception;
        }
        $body = $response->getBody()->getContents();
        return $body;

    }

    

}
