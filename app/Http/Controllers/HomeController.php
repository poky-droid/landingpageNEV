<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Anggota;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        
        // Tambahkan temporary URL untuk setiap gambar
        foreach ($news as $item) {
            if ($item->gambar) {
                $item->gambar_url = Storage::disk('s3')->temporaryUrl($item->gambar, Carbon::now()->addHours(24));
            }
        }

        $totalAnggota = Anggota::all()->count(); // Menghitung jumlah anggota

        
        return view('pages.home.home', compact('news', 'totalAnggota' ));
    }
}
