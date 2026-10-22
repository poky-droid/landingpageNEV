<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\Models\News::with('anggota')->get();
        
        // Tambahkan temporary URL untuk setiap gambar
        foreach ($news as $item) {
            if ($item->gambar) {
                $item->gambar_url = Storage::disk('s3')->temporaryUrl($item->gambar, Carbon::now()->addHours(24));
            }
        }
        
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = \App\Models\News::with('anggota', 'konten')->findOrFail($id);
        
        // Tambahkan temporary URL jika ada gambar utama
        if ($news->gambar) {
            $news->gambar_url = Storage::disk('s3')->temporaryUrl($news->gambar, Carbon::now()->addHours(24));
        }
        
        // Tambahkan temporary URL untuk setiap konten file
        if ($news->konten) {
            foreach ($news->konten as $konten) {
                if ($konten->isi_file) {
                    $konten->file_url = Storage::disk('s3')->temporaryUrl($konten->isi_file, Carbon::now()->addHours(24));
                }
            }
        }
        
        return view('pages.news.Readmore', compact('news'));
    }
}
