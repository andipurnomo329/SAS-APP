<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;

class KelasController
{
    public function index()
    {
        return view('master_data.kelas.index');
    }
    
}