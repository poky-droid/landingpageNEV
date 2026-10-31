<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class ModulController extends Controller
{
    public function index()
    {
        $totalModul = Modul::count();
        return view('pages.modul.index', compact('totalModul'));
    }
}
