<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'foto',
        'password',
        'divisi_id',
        'jabatan_id'
    ];

    protected $hidden = ['password'];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function modul()
    {
        return $this->hasMany(Modul::class);
    }

    public function aksesModul()
    {
        return $this->belongsToMany(Modul::class, 'modul_anggota');
    }
}
