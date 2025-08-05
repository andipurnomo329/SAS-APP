<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;

class GuruController
{
    public function index()
    {
        return view('master_data.guru.index');
    }
    
}