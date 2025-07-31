<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;

class SiswaController
{
    public function index()
    {
        return view('MasterData.DataSiswa');
    }
    
}