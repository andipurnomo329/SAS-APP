<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

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
     * @param array $params
     * @return array
     */
    public function performRequest(string $method, string $uri, array $params = []): array
    {
        $method = strtoupper($method);
        $options = [
            'headers' => [
                'Accept' => 'application/json',
            ],
            'timeout'         => 600,
            'connect_timeout' => 30,
        ];

        // Tambahkan header Authorization bila token di-set
        if ($this->token) {
            $options['headers']['Authorization'] = "Bearer {$this->token}";
        }

        $hasFile = collect($params)->contains(fn($v) =>
            $v instanceof \Illuminate\Http\UploadedFile || is_resource($v)
        );

        if ($method === 'POST') {
            if ($hasFile) {
                $options['multipart'] = $this->buildMultipart($params);
            } else {
                $options['form_params'] = $params;
            }
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
            throw new \Illuminate\Auth\AuthenticationException;
        } elseif ($status == 403) {
            throw new HttpException(403);
        }
        return $response;
    }

    protected function buildMultipart(array $params): array
    {
        $multipart = [];

        foreach ($params as $name => $value) {
            if ($value instanceof \Illuminate\Http\UploadedFile) {
                $multipart[] = [
                    'name'     => $name,
                    'contents' => fopen($value->getRealPath(), 'r'),
                    'filename' => $value->getClientOriginalName(),
                    'headers'  => ['Content-Type' => $value->getMimeType()],
                ];
            } elseif (is_resource($value)) {
                $multipart[] = ['name' => $name, 'contents' => $value];
            } else {
                $multipart[] = ['name' => $name, 'contents' => (string) $value];
            }
        }

        return $multipart;
    }
}
