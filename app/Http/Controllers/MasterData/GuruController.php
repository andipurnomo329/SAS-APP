<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use App\Services\MicroserviceConsumer;

class GuruController
{
    protected MicroserviceConsumer $service;

    public function __construct(MicroserviceConsumer $service)
    {
        $this->service = $service;
    }

    public function index(Request $request) {
        $credentials = $request->validate([
            'page'    => 'sometimes|numeric',
            'per_page' => 'sometimes|numeric',
        ]);

        $response = $this->service
            ->setToken(session('api_token'))
            ->performRequest(
                'GET', 'guru/all', [
                    'page' => $request->page,
                    'per_page' => $request->per_page
            ]);
        $status = $response['resCode'];
        
        if (!($status >= 200 && $status < 300)) {
            // return view('error.page'); // jika tidak berhasil maka ke page error/lainnya
        }

        $paginationLinks = collect($response['data']['links'])->map(function($link) {
            return [
                'url'    => url()->current() . '?' . $link['query'],
                'label'  => $link['label'],
                'active' => $link['active'],
            ];
        })->toArray();

        return view('master_data.guru.index', [
            'from' => $response['data']['from'],
            'to' => $response['data']['to'],
            'total' => $response['data']['total'],
            'gurus' => $response['data']['data'],
            'paginationLinks' => $paginationLinks,
        ]);
    }
}
