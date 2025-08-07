<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;

class StaffController
{
    public function index()
    {
        return view('master_data.staff.index');
    }
    
}