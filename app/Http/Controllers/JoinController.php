<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    /**
     * Display the Open Recruitment (Let's Join) page.
     */
    public function index()
    {
        return view('pages.join.index');
    }
}
