<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    public $timestamps = false;

    protected $fillable = ['nama_divisi'];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
