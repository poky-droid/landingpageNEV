<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsKonten extends Model
{
    protected $table = 'news_konten';
    public $timestamps = false;

    protected $fillable = [
        'news_id',
        'tipe',
        'isi_text',
        'isi_file',
        'urutan'
    ];

    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
