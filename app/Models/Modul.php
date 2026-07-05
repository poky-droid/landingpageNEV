<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = 'modul';
    public $timestamps = false;

    protected $fillable = [
        'nama_modul',
        'deskripsi',
        'anggota_id'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function konten()
    {
        return $this->hasMany(ModulKonten::class)->orderBy('urutan');
    }

    public function anggotaAkses()
    {
        return $this->belongsToMany(Anggota::class, 'modul_anggota');
    }
}
