<?php

namespace App\Http\Controllers\JadwalAkademik;

use Illuminate\Http\Request;

class JadwalController
{
    public function index()
    {
        return view('jadwal_akademik.jadwal_pelajaran.index');
    }
    
}