<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisiController extends Controller
{

    function index()
    {
        $anggota = Anggota::all();

        $totalAnggota = $anggota->count();
        return view('pages.divisions.conten', compact('totalAnggota'));
    }
}
    