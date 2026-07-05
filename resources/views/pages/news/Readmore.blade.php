@include('pages.layout.navbarforconten')

<section class="news-detail">
    <div class="container">

        <!-- Back -->
        <a href="/#news" class="back-btn">← Back</a>

        <!-- Header -->
        <div class="news-header">
            <span class="news-date">
                {{ $news->created_at ? \Carbon\Carbon::parse($news->created_at)->format('F d, Y') : 'N/A' }}
            </span>
            <h1 class="news-title">{{ $news->judul ?? 'No Title' }}</h1>
            <p class="news-subtitle">
                {{ Str::limit($news->deskripsi ?? '', 150) }}
            </p>
            @if($news->anggota)
                <p style="color: #888; margin-top: 10px;">create By {{ $news->anggota->nama ?? 'Unknown' }}</p>
            @endif
        </div>

        <!-- Image -->
        @if($news->gambar_url)
            <div class="news-image">
                <img src="{{ $news->gambar_url }}" alt="{{ $news->judul }}" style="width:100%; height:100%; object-fit:cover; border-radius:15px;">
            </div>
        @endif

       

        <!-- News Konten (Additional Content) -->
        @if($news->konten && $news->konten->count() > 0)
            <div class="news-additional-content">
                <h2 style="color: #FF0033; margin: 40px 0 20px 0;"> Information</h2>
                @foreach($news->konten->sortBy('urutan') as $konten)
                    <div class="news-konten-item">
                        @if($konten->tipe === 'text')
                        <div class="konten-rich-text">
                            {!! $konten->isi_text !!}
                        </div>
                        @elseif($konten->tipe === 'image' && $konten->file_url)
                            <div style="margin: 20px 0; border-radius: 10px; overflow: hidden;">
                                <img src="{{ $konten->file_url }}" alt="news content" style="width: 100%; height: auto; object-fit: cover; max-height: 400px;">
                            </div>
                        @elseif($konten->tipe === 'file' && $konten->file_url)
                            <a href="{{ $konten->file_url }}" class="file-download-btn" download>
                                📥 Download File
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>

@include('pages.footer.conten')

<style>
    body {
    margin: 0;
    padding: 0;
    background: #000;
    min-height: 100%;
    overflow-x: hidden;
}
.news-detail {
    min-height: 100vh;
    background: linear-gradient(135deg, #050505, #0A0A0A);
    color: white;
    padding: 120px 20px;
}

/* Container biar gak terlalu lebar di layar besar */
.news-detail .container {
    max-width: 1000px;
    margin: auto;
}

/* Back button */
.back-btn {
    color: #00CFFF;
    text-decoration: none;
    transition: 0.3s;
    font-size: 0.9rem;
}

.back-btn:hover {
    color: #FF0033;
}

/* Header */
.news-header {
    margin-top: 30px;
    margin-bottom: 40px;
}

.news-date {
    color: #888;
    font-size: 0.9rem;
}

.news-title {
    font-size: 3rem;
    margin: 10px 0;
    color: #FF0033;
    text-shadow: 0 0 20px rgba(255, 0, 51, 0.6);
    line-height: 1.2;
}

.news-subtitle {
    color: #aaa;
    max-width: 600px;
    font-size: 1rem;
}

/* Image */
.news-image {
    height: 300px;
    background: linear-gradient(45deg, #111, #222);
    border-radius: 15px;
    margin: 40px 0;
}

/* Content */
.news-content {
    max-width: 700px;
    line-height: 1.8;
    color: #ccc;
    font-size: 1rem;
}

.news-content p {
    margin-bottom: 20px;
}

/* Additional Content */
.news-additional-content {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.news-konten-item {
    background: rgba(15, 15, 15, 0.8);
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    border-left: 4px solid #FF0033;
}

.file-download-btn {
    display: inline-block;
    background: linear-gradient(135deg, #FF0033, #FF6666);
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    transition: 0.3s;
    margin-top: 10px;
}

.file-download-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 0, 51, 0.4);
}

/* ========================= */
/* 🔥 RESPONSIVE BREAKPOINTS */
/* ========================= */

/* Tablet */
@media (max-width: 992px) {
    .news-title {
        font-size: 2.4rem;
    }

    .news-image {
        height: 250px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .news-detail {
        padding: 100px 15px;
    }

    .news-title {
        font-size: 2rem;
    }

    .news-subtitle {
        font-size: 0.95rem;
    }

    .news-content {
        font-size: 0.95rem;
    }

    .news-image {
        height: 200px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .news-title {
        font-size: 1.6rem;
    }

    .news-image {
        height: 160px;
        border-radius: 10px;
    }

    .news-detail {
        padding: 80px 12px;
    }
}
</style>