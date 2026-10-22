<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModulKonten extends Model
{
    protected $table = 'modul_konten';
    public $timestamps = false;

    protected $fillable = [
        'modul_id',
        'tipe',
        'isi_text',
        'isi_file',
        'urutan'
    ];

    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }
}
