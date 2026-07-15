<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Modul;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Anggota;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        
        foreach ($news as $item) {
            if ($item->gambar) {
                $item->gambar_url = Storage::disk('s3')->temporaryUrl($item->gambar, Carbon::now()->addHours(24));
            }
        }

        $totalAnggota = Anggota::count();

        $totalSysadminMembers = Anggota::whereHas('divisi', function ($q) {
            $q->where('nama_divisi', 'Sysadmin');
        })->count();

        $totalNetworkingMembers = Anggota::whereHas('divisi', function ($q) {
            $q->where('nama_divisi', 'Networking');
        })->count();

        $totalCybersecurityMembers = Anggota::whereHas('divisi', function ($q) {
            $q->where('nama_divisi', 'Cyber Security');
        })->count();

        $totalModul = Modul::count();

        return view('pages.home.home', compact(
            'news',
            'totalAnggota',
            'totalSysadminMembers',
            'totalNetworkingMembers',
            'totalCybersecurityMembers',
            'totalModul'
        ));
    }
}