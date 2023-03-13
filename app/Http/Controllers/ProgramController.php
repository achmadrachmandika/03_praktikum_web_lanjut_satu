<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    
    public function karir()
    {
        return view('program', ['prog1' => 'Program Karir']);
    }

    public function magang()
    {
        return view('program', ['prog1' => 'Program Magang']);
    }

    public function kunjungan()
    {
        return view('program', ['prog1' => 'Program Kunjungan']);
    }
}
