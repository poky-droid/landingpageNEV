<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{

    function index()
    {
        $anggota = Anggota::all();

        $rawCount = $anggota->count();
        $totalAnggota = $rawCount >= 20 ? $rawCount : 20;
        return view('pages.divisions.conten', compact('totalAnggota'));
    }
}
    