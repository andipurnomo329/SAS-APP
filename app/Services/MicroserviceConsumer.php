<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;

class MicroserviceConsumer
{
    protected Client $http;
    protected string $baseUri;
    protected ?string $token = null;

    public function __construct(string $baseUri)
    {
        $this->baseUri = rtrim($baseUri, '/');
        $this->http    = new Client(['base_uri' => $this->baseUri]);
    }

    /**
     * Atur token untuk digunakan di header Authorization
     */
    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }

    /**
     * Kirim request ke mikroservice, menyertakan Authorization jika ada
     * @param string $method
     * @param string $uri
     * @param $params
     * @return array
     */
    public function performRequest(string $method, string $uri, array $params = []): array
    {
        $method = strtoupper($method);
        $options = [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ];

        // Tambahkan header Authorization bila token di-set
        if ($this->token) {
            $options['headers']['Authorization'] = "Bearer {$this->token}";
        }

        if ($method === 'POST') {
            $options['form_params'] = $params;
        } else {
            $options['query'] = $params;
        }

        try {
            $raw = $this->http->request($method, "/api/{$uri}", $options);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $raw = $e->getResponse();
            } else {
                throw $e;
            }
        }
        $response = json_decode($raw->getBody()->getContents(), true);
        $status = $response['resCode'] ?? 0;

        if ($status == 401) {
            throw new AuthenticationException;
        }
        return $response;
    }
}
