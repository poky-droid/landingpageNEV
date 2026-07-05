<?php

namespace App\Http\Controllers;

use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function sysadmin()
    {
        $anggota = Anggota::whereHas('divisi', function ($q) {
                $q->where('nama_divisi', 'Sysadmin');
            })->get();

            $totalAnggota = $anggota->count(); // Menghitung jumlah anggota

        return view('pages.divisions.ReadmoreSysadmin', compact('anggota', 'totalAnggota'));
     }

    public function cybersecurity()
    {
        $anggota = Anggota::whereHas('divisi', function ($q) {
                $q->where('nama_divisi', 'Cyber Security');
            })->get();
            $totalAnggota = $anggota->count();

        return view('pages.divisions.ReadmoreSyber', compact('anggota', 'totalAnggota'));
    }

    public function networking()
    {
        $anggota = Anggota::whereHas('divisi', function ($q) {
                $q->where('nama_divisi', 'Networking');
            })->get();
            $totalAnggota = $anggota->count();

        return view('pages.divisions.ReadmoreNetworking', compact('anggota', 'totalAnggota'));
    }
    
}