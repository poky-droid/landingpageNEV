@extends('pages.layout.master')

@section('content')

<!-- CYBER GRID OVERLAY -->
<div class="cyber-grid-overlay"></div>

<main class="editorial-news-page">
    <div class="editorial-container">

        <!-- 1. TOP BREADCRUMB & BACK NAVIGATION -->
        <nav class="editorial-topbar">
            <a href="{{ url('/news') }}" class="editorial-back-btn">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                <span>Kembali ke Halaman Berita</span>
            </a>

            <div class="editorial-breadcrumb">
                <span class="bread-dot"></span>
                <a href="{{ url('/news') }}" class="bread-link">NEWS</a>
                <span class="bread-sep">/</span>
                <span class="bread-current">{{ Str::limit($news->judul ?? 'Detail Warta', 36) }}</span>
            </div>
        </nav>

        <!-- 2. WIDE TOP HERO IMAGE (AUTO-SLIDE 4 FOTO) -->
        <div class="editorial-hero-wrap">
            <div class="editorial-hero-frame" id="editorialHeroSlider">
                @php
                    $slideList = (isset($news->gambar_list) && count($news->gambar_list) > 0) 
                        ? $news->gambar_list 
                        : [
                            $news->gambar_url ?? asset('images/news/makrab-cover.jpg')
                        ];
                @endphp
                <div class="editorial-slide-track">
                    @foreach($slideList as $index => $imgUrl)
                        <div class="editorial-slide-item {{ $index === 0 ? 'active-slide' : '' }}">
                            <img src="{{ $imgUrl }}" alt="" class="editorial-backdrop-blur" aria-hidden="true">
                            <img src="{{ $imgUrl }}" alt="{{ $news->judul }} - Slide {{ $index + 1 }}" class="editorial-hero-img">
                        </div>
                    @endforeach
                </div>
                <div class="editorial-hero-vignette"></div>
                <div class="editorial-slider-controls">
                    <div class="editorial-slider-dots">
                        @foreach($slideList as $index => $imgUrl)
                            <span class="hero-dot {{ $index === 0 ? 'active' : '' }}" data-idx="{{ $index }}"></span>
                        @endforeach
                    </div>
                    <div class="editorial-slider-badge">
                        <span id="editorialSliderCounter">1 / {{ count($slideList) }}</span>
                    </div>
                </div>
            </div>
            <div class="editorial-hero-caption">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <span>Dokumentasi Resmi Kegiatan &amp; Arsip Riset Laboratorium Network Evolution Telkom University</span>
            </div>
        </div>

        <!-- 3. ARTICLE HEADLINE & META ROW (PERSIS REFERENSI) -->
        <header class="editorial-article-head">
            <div class="editorial-title-row">
                <h1 class="editorial-title">{{ $news->judul ?? 'Recap of Mini Research Expo HMTT 2026: NEV Tampil di Panggung Riset' }}</h1>
                
                <!-- Action Buttons: Bookmark & Share -->
                <div class="editorial-actions">
                    <button type="button" class="action-icon-btn" id="bookmarkBtn" title="Simpan Artikel" aria-label="Bookmark">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                    </button>
                    <button type="button" class="action-icon-btn" id="shareBtn" title="Bagikan Artikel" aria-label="Share">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                    </button>
                </div>
            </div>

            <!-- Meta Row: Source Icon, Byline, Date, Category in Red, Read Time -->
            <div class="editorial-meta-row">
                <div class="meta-author-group">
                    <span class="source-circle-badge">NEV</span>
                    <span class="meta-byline">Oleh <strong>{{ $news->anggota->nama ?? 'Humas & Kemitraan' }}</strong></span>
                </div>
                <span class="meta-dot">•</span>
                <span class="meta-date">
                    {{ $news->tanggal_format ?? (\Carbon\Carbon::parse($news->created_at)->locale('id')->translatedFormat('l, d M Y') ?? '12 Des 2025') }}
                </span>
                <span class="meta-dot">•</span>
                <a href="{{ url('/news') }}" class="meta-category-red">
                    {{ $news->kategori ?? 'STUDI BANDING' }}
                </a>
                <span class="meta-dot">•</span>
                <span class="meta-read-time">{{ $news->read_time ?? '5 menit baca' }}</span>
            </div>
        </header>

        <!-- 4. 2-COLUMN EDITORIAL BODY: MAIN STORY + TRENDING POST SIDEBAR -->
        <div class="editorial-body-grid">

            <!-- ── LEFT MAIN ARTICLE STORY ── -->
            <article class="editorial-story-col">
                
                <!-- Lead Paragraph / Ringkasan Awal (Italic, Persis Referensi) -->
                @if(!empty($news->lead_text))
                    <p class="editorial-lead">{{ $news->lead_text }}</p>
                @elseif(!empty($news->deskripsi))
                    <p class="editorial-lead">{{ $news->deskripsi }}</p>
                @endif

                <!-- Story Body Paragraphs -->
                <div class="editorial-prose">
                    @if(isset($news->paragraphs) && is_array($news->paragraphs) && count($news->paragraphs) > 0)
                        @foreach($news->paragraphs as $p)
                            <p>{!! nl2br(e($p)) !!}</p>
                        @endforeach
                    @elseif(!empty($news->deskripsi))
                        <p>{{ $news->deskripsi }}</p>
                        <p>Partisipasi aktif dalam kegiatan ini mencerminkan dedikasi laboratorium Network Evolution dalam terus berkontribusi nyata pada kemajuan ekosistem pendidikan teknologi telekomunikasi dan komputasi jaringan.</p>
                        <p>Seluruh fungsionaris dan peneliti muda saling bahu-membahu menyuguhkan eksplorasi teknis yang komprehensif, mulai dari pengujian arsitektur transmisi hingga simulasi skenario lalu lintas jaringan skala besar.</p>
                    @else
                        <p>Network Evolution (NEV) terus mendorong keterlibatan mahasiswa dalam kegiatan ilmiah, riset laboratorium terapan, serta kolaborasi lintas disiplin ilmu.</p>
                    @endif

                    <!-- Pullquote Callout (Gaya Redaksi Modern) -->
                    @if(!empty($news->quote))
                        <blockquote class="editorial-pullquote">
                            <span class="pullquote-symbol">“</span>
                            <p>{{ $news->quote }}</p>
                        </blockquote>
                    @else
                        <blockquote class="editorial-pullquote">
                            <span class="pullquote-symbol">“</span>
                            <p>Di NEV, ini bukan hanya tentang konfigurasi jaringan komputer, melainkan tentang membangun fondasi teknologi masa depan dan teamwork yang tangguh.</p>
                        </blockquote>
                    @endif

                    <!-- Dynamic Konten dari Database (Jika Ada) -->
                    @if(isset($news->konten) && $news->konten->count() > 0)
                        @foreach($news->konten->sortBy('urutan') as $konten)
                            @if($konten->tipe === 'text')
                                <div class="editorial-rich-block">
                                    {!! $konten->isi_text !!}
                                </div>
                            @elseif($konten->tipe === 'image' && $konten->file_url)
                                <figure class="editorial-inline-media">
                                    <img src="{{ $konten->file_url }}" alt="Dokumentasi Tambahan" class="editorial-inline-img">
                                </figure>
                            @elseif($konten->tipe === 'file' && $konten->file_url)
                                <div class="editorial-file-attachment">
                                    <div class="file-icon-box">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    </div>
                                    <div class="file-details">
                                        <span class="file-title">Berkas Resmi Lampiran</span>
                                        <span class="file-sub">Dokumen riset pendukung format PDF/DOCX</span>
                                    </div>
                                    <a href="{{ $konten->file_url }}" class="file-download-btn" download>
                                        <span>Unduh Berkas</span>
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>

                <!-- Topic Tags Footer -->
                <div class="editorial-tags-wrap">
                    <span class="tags-label">TOPIK TERKAIT</span>
                    <div class="tags-badge-list">
                        @if(isset($news->tags) && is_array($news->tags))
                            @foreach($news->tags as $tag)
                                <a href="{{ url('/news') }}" class="tag-pill">{{ $tag }}</a>
                            @endforeach
                        @else
                            <a href="{{ url('/news') }}" class="tag-pill">#NetworkEvolution</a>
                            <a href="{{ url('/news') }}" class="tag-pill">#RisetJaringan</a>
                            <a href="{{ url('/news') }}" class="tag-pill">#TelkomUniversity</a>
                            <a href="{{ url('/news') }}" class="tag-pill">#AdaptiveNetwork</a>
                            <a href="{{ url('/news') }}" class="tag-pill">#OraKonekOraKepenak</a>
                        @endif
                    </div>
                </div>

            </article>


            <!-- ── RIGHT SIDEBAR: TRENDING POST (PERSIS REFERENSI) ── -->
            <aside class="editorial-sidebar-col">

                <div class="trending-post-block">
                    <!-- Heading: Trending Post -->
                    <h3 class="trending-section-title">Trending Post</h3>

                    <div class="trending-list">
                        @if(isset($trendingArticles) && count($trendingArticles) > 0)
                            @foreach($trendingArticles as $index => $trend)
                                @if($index === 0)
                                    <!-- RANK 1: FEATURED CARD DENGAN GAMBAR BESAR MEMBULAT -->
                                    <div class="trending-item featured-trend">
                                        <span class="trend-rank-num">1</span>
                                        <div class="trend-card-main">
                                            <a href="{{ url('/news/' . $trend->id) }}" class="trend-hero-thumb-link">
                                                <div class="trend-hero-thumb-wrap">
                                                    <img src="{{ $trend->gambar_url }}" alt="{{ $trend->judul }}" class="trend-hero-thumb">
                                                    <div class="trend-hero-badge">{{ $trend->kategori }}</div>
                                                </div>
                                            </a>
                                            <h4 class="trend-hero-title">
                                                <a href="{{ url('/news/' . $trend->id) }}">{{ $trend->judul }}</a>
                                            </h4>
                                            <span class="trend-hero-date">{{ $trend->tanggal_format }} • {{ $trend->read_time }}</span>
                                        </div>
                                    </div>
                                @else
                                    <!-- RANK {{ $index + 1 }}: MINI ROWS -->
                                    <div class="trending-item mini-trend">
                                        <span class="trend-rank-num">{{ $index + 1 }}</span>
                                        <div class="mini-trend-content">
                                            <div class="mini-trend-row">
                                                <a href="{{ url('/news/' . $trend->id) }}" class="mini-trend-thumb-wrap">
                                                    <img src="{{ $trend->gambar_url }}" alt="{{ $trend->judul }}" class="mini-trend-thumb">
                                                </a>
                                                <div class="mini-trend-info">
                                                    <h4 class="mini-trend-title">
                                                        <a href="{{ url('/news/' . $trend->id) }}">{{ $trend->judul }}</a>
                                                    </h4>
                                                    <span class="mini-trend-meta">{{ $trend->kategori }} • {{ $trend->tanggal_format }} • {{ $trend->read_time }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <!-- FALLBACK IF DIRECT ACCESSED -->
                            <div class="trending-item featured-trend">
                                <span class="trend-rank-num">1</span>
                                <div class="trend-card-main">
                                    <a href="{{ url('/news/1') }}" class="trend-hero-thumb-link">
                                        <div class="trend-hero-thumb-wrap">
                                            <img src="{{ asset('images/news/studibanding-cover.jpg') }}" alt="Studi Banding Telkom University" class="trend-hero-thumb">
                                            <div class="trend-hero-badge">STUDI BANDING</div>
                                        </div>
                                    </a>
                                    <h4 class="trend-hero-title">
                                        <a href="{{ url('/news/1') }}">Recap of Studi Banding: Diskusi &amp; Sharing Bersama Telkom University Bandung</a>
                                    </h4>
                                    <span class="trend-hero-date">12 Des 2025 • 5 menit baca</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>



            </aside>

        </div>

    </div>
</main>

<!-- TOAST NOTIFICATION COPY LINK -->
<div id="copyToast" class="editorial-toast" role="alert" aria-live="polite">
    Link artikel berhasil disalin ke clipboard! 📋
</div>

<!-- FOOTER (KONSISTEN DENGAN WEB NEV) -->
<section id="footer" class="footer-section">
    @include('pages.footer.conten')
</section>

@endsection

@push('styles')
<style>
/* ============================================================
   EDITORIAL NEWS DETAIL PAGE (THEMED FOR NETWORK EVOLUTION)
   100% Replication of User's Reference Layout in Dark Mode
   Typography: Inter
   ============================================================ */
:root {
    --n-bg-dark: #080808;
    --n-panel-bg: rgba(255, 255, 255, 0.05);
    --n-card-bg: rgba(0, 0, 0, 0.35);
    --n-card-hover: rgba(255, 255, 255, 0.08);
    --n-border-subtle: rgba(255, 255, 255, 0.08);
    --n-border-light: rgba(255, 255, 255, 0.16);
    --n-accent-red: #FF0033;
    --n-text-primary: #ffffff;
    --n-text-muted: rgba(255, 255, 255, 0.65);
    --n-text-body: rgba(255, 255, 255, 0.82);
    --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

body {
    margin: 0;
    padding: 0;
    background-color: #080808 !important;
    background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
    background-size: 66px 66px;
    background-attachment: fixed;
    color: var(--n-text-primary) !important;
    font-family: var(--font-sans);
    overflow-x: hidden;
}

/* Jaring Cyber Background Lembut (Konsisten dengan Modules & News) */
.cyber-grid-overlay {
    position: fixed;
    inset: 0;
    background-color: #080808;
    background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
    background-size: 66px 66px;
    pointer-events: none;
    z-index: 0;
}

.editorial-news-page {
    position: relative;
    z-index: 1;
    padding: calc(var(--nav-h, 64px) + var(--nav-gap, 14px) + 32px) 0 80px;
}

/* Container dengan Padding Seimbang Sesuai Tema (Konsisten dengan Navbar max-width: 1180px) */
.editorial-container {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 clamp(18px, 3.5vw, 36px);
}

/* 1. TOPBAR */
.editorial-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding-bottom: 20px;
    margin-bottom: 26px;
    border-bottom: 1px solid var(--n-border-subtle);
    flex-wrap: wrap;
}

.editorial-back-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: #94a3b8;
    font-size: 13.5px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s ease;
}

.editorial-back-btn:hover {
    color: #ff3355;
    border-color: rgba(255, 0, 51, 0.35);
    background: rgba(255, 0, 51, 0.08);
    transform: translateX(-2px);
}

.editorial-breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.74rem;
    color: var(--n-text-muted);
}

.editorial-breadcrumb .bread-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--n-accent-red);
}

.editorial-breadcrumb .bread-link {
    color: var(--n-text-muted);
    text-decoration: none;
    transition: color 0.2s ease;
}

.editorial-breadcrumb .bread-link:hover {
    color: #fff;
}

.editorial-breadcrumb .bread-sep {
    opacity: 0.4;
}

.editorial-breadcrumb .bread-current {
    color: #fff;
    font-weight: 600;
}


/* 2. WIDE TOP HERO IMAGE (PERSIS REFERENSI) */
.editorial-hero-wrap {
    margin-bottom: 30px;
}

.editorial-hero-frame {
    position: relative;
    width: 100%;
    height: clamp(340px, 52vw, 580px);
    border-radius: 12px;
    overflow: hidden;
    background: #030508;
    border: 1px solid var(--n-border-subtle);
    box-shadow: 0 20px 45px rgba(0, 0, 0, 0.75);
}

.editorial-slide-track {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
}

.editorial-slide-item {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.8s ease-in-out, visibility 0.8s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.editorial-slide-item.active-slide {
    opacity: 1;
    visibility: visible;
}

/* Ambient blurred background - menghilangkan ruang kosong tanpa crop foto */
.editorial-backdrop-blur {
    position: absolute;
    inset: -30px;
    width: calc(100% + 60px);
    height: calc(100% + 60px);
    object-fit: cover;
    object-position: center;
    filter: blur(36px) brightness(0.38);
    transform: scale(1.15);
    pointer-events: none;
    z-index: 1;
}

/* Foto utama tampil utuh 100% TANPA KECROP (object-fit: contain) */
.editorial-slide-item .editorial-hero-img {
    position: relative;
    z-index: 2;
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: 100%;
    object-fit: contain !important;
    object-position: center;
    display: block;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.75);
    transition: transform 0.6s ease;
}

.editorial-hero-frame:hover .editorial-slide-item.active-slide .editorial-hero-img {
    transform: scale(1.015);
}

.editorial-slider-controls {
    position: absolute;
    top: 18px;
    right: 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    z-index: 5;
    background: rgba(4, 4, 6, 0.7);
    padding: 6px 14px;
    border-radius: 20px;
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.15);
}

.editorial-slider-dots {
    display: flex;
    align-items: center;
    gap: 6px;
}

.hero-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.4);
    cursor: pointer;
    transition: all 0.28s ease;
}

.hero-dot.active {
    width: 20px;
    border-radius: 8px;
    background: var(--n-accent-red, #FF0033);
}

.editorial-slider-badge {
    font-size: 0.74rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.9);
    letter-spacing: 0.04em;
}

.editorial-hero-img {
    width: auto;
    max-width: 100%;
    height: 100%;
    object-fit: contain !important;
    object-position: center;
    display: block;
    transition: transform 0.6s ease;
}

.editorial-hero-frame:hover .editorial-hero-img {
    transform: scale(1.015);
}

.editorial-hero-vignette {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.05) 0%, rgba(4, 4, 6, 0.45) 100%);
    pointer-events: none;
}

.editorial-hero-caption {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 14px;
    font-size: 0.74rem;
    color: var(--n-text-muted);
    font-style: italic;
}


/* 3. ARTICLE HEADLINE & META ROW (PERSIS REFERENSI) */
.editorial-article-head {
    margin-bottom: 34px;
    padding-bottom: 24px;
    border-bottom: 1px solid var(--n-border-subtle);
}

.editorial-title-row {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 24px;
    margin-bottom: 16px;
}

.editorial-title {
    font-size: clamp(1.85rem, 3.4vw, 2.75rem);
    font-weight: 800;
    line-height: 1.25;
    letter-spacing: -0.02em;
    color: #ffffff;
    margin: 0;
    flex: 1;
}

.editorial-actions {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-top: 6px;
}

.action-icon-btn {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--n-border-subtle);
    color: var(--n-text-muted);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.22s ease;
}

.action-icon-btn:hover {
    background: rgba(255, 255, 255, 0.12);
    color: #fff;
    border-color: rgba(255, 255, 255, 0.25);
    transform: translateY(-2px);
}

.action-icon-btn.bookmarked {
    background: rgba(255, 0, 51, 0.15);
    color: var(--n-accent-red);
    border-color: rgba(255, 0, 51, 0.4);
}

/* Meta Row (Persis Referensi CNN / Editorial) */
.editorial-meta-row {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;
    font-size: 0.85rem;
    color: var(--n-text-muted);
}

.meta-author-group {
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.source-circle-badge {
    background: var(--n-accent-red);
    color: #fff;
    font-size: 0.62rem;
    font-weight: 900;
    letter-spacing: 0.05em;
    padding: 3px 7px;
    border-radius: 4px;
    display: inline-block;
}

.meta-byline {
    color: var(--n-text-muted);
}

.meta-byline strong {
    color: #ffffff;
    font-weight: 600;
}

.meta-dot {
    opacity: 0.35;
    font-size: 0.9rem;
}

.meta-date {
    color: var(--n-text-muted);
}

/* Category Text In Red (Persis Referensi: "Entertainment") */
.meta-category-red {
    color: var(--n-accent-red);
    font-weight: 700;
    text-decoration: none;
    letter-spacing: 0.02em;
    transition: opacity 0.2s ease;
}

.meta-category-red:hover {
    opacity: 0.85;
    text-decoration: underline;
}

.meta-read-time {
    color: var(--n-text-muted);
}


/* 4. 2-COLUMN BODY GRID */
.editorial-body-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 350px;
    gap: 48px;
    align-items: start;
}

/* ── LEFT MAIN ARTICLE STORY ── */
.editorial-story-col {
    min-width: 0;
}

/* Lead Paragraph (Persis Referensi) */
.editorial-lead {
    font-size: 1.12rem;
    font-style: italic;
    line-height: 1.72;
    color: rgba(255, 255, 255, 0.95);
    margin: 0 0 24px;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
}

.editorial-prose p {
    font-size: 1.02rem;
    line-height: 1.82;
    color: var(--n-text-body);
    margin: 0 0 20px;
}

/* Pullquote */
.editorial-pullquote {
    margin: 30px 0;
    padding: 20px 24px 20px 30px;
    background: rgba(255, 0, 51, 0.04);
    border-left: 4px solid var(--n-accent-red);
    border-radius: 0 8px 8px 0;
    position: relative;
}

.editorial-pullquote .pullquote-symbol {
    font-size: 2.8rem;
    line-height: 1;
    color: var(--n-accent-red);
    display: block;
    margin-bottom: 4px;
    font-family: Georgia, serif;
}

.editorial-pullquote p {
    font-size: 1.08rem;
    font-style: italic;
    line-height: 1.65;
    color: #ffffff;
    margin: 0;
}

.editorial-rich-block {
    margin: 24px 0;
    font-size: 1.02rem;
    line-height: 1.82;
    color: var(--n-text-body);
}

.editorial-inline-media {
    margin: 28px 0;
    border-radius: 8px;
    overflow: hidden;
    border: 1px solid var(--n-border-subtle);
}

.editorial-inline-img {
    width: 100%;
    height: auto;
    display: block;
}

/* File Attachment */
.editorial-file-attachment {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 20px;
    background: var(--n-panel-bg);
    border: 1px solid var(--n-border-subtle);
    border-radius: 8px;
    margin: 26px 0;
    flex-wrap: wrap;
}

.file-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 6px;
    background: rgba(255, 0, 51, 0.1);
    color: var(--n-accent-red);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.file-details {
    flex: 1;
    min-width: 180px;
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.file-title {
    font-weight: 700;
    font-size: 0.92rem;
    color: #fff;
}

.file-sub {
    font-size: 0.74rem;
    color: var(--n-text-muted);
}

.file-download-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 6px;
    background: var(--n-accent-red);
    color: #fff;
    font-size: 0.8rem;
    font-weight: 700;
    text-decoration: none;
    transition: all 0.22s ease;
}

.file-download-btn:hover {
    background: #e0002d;
    color: #fff;
    box-shadow: 0 4px 14px rgba(255, 0, 51, 0.35);
}

/* Topic Tags */
.editorial-tags-wrap {
    padding-top: 26px;
    margin-top: 36px;
    border-top: 1px solid var(--n-border-subtle);
}

.tags-label {
    font-size: 0.72rem;
    font-weight: 800;
    color: var(--n-text-muted);
    letter-spacing: 0.1em;
    display: block;
    margin-bottom: 12px;
}

.tags-badge-list {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.tag-pill {
    padding: 6px 14px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid var(--n-border-subtle);
    color: var(--n-text-muted);
    font-size: 0.78rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.22s ease;
}

.tag-pill:hover {
    background: rgba(255, 0, 51, 0.08);
    color: #ff3355;
    border-color: rgba(255, 0, 51, 0.35);
}



/* ── RIGHT SIDEBAR: TRENDING POST (PERSIS REFERENSI) ── */
.editorial-sidebar-col {
    position: sticky;
    top: 96px;
}

.trending-post-block {
    background: var(--n-panel-bg);
    border: 1px solid var(--n-border-subtle);
    border-radius: 12px;
    padding: 24px 20px;
    margin-bottom: 26px;
}

/* Heading "Trending Post" */
.trending-section-title {
    font-size: 1.28rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 20px;
    letter-spacing: -0.01em;
}

.trending-list {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.trending-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
}

/* Nomor Ranking Tebal (1, 2, 3...) */
.trend-rank-num {
    font-size: 1.45rem;
    font-weight: 900;
    line-height: 1;
    color: var(--n-accent-red);
    min-width: 20px;
    padding-top: 2px;
    font-style: italic;
}

/* Rank 1: Featured Card */
.featured-trend .trend-card-main {
    flex: 1;
}

.trend-hero-thumb-link {
    display: block;
    text-decoration: none;
}

.trend-hero-thumb-wrap {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 10;
    border-radius: 10px;
    overflow: hidden;
    background: #000;
    border: 1px solid var(--n-border-subtle);
    margin-bottom: 12px;
}

.trend-hero-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
}

.trend-hero-thumb-wrap:hover .trend-hero-thumb {
    transform: scale(1.04);
}

.trend-hero-badge {
    position: absolute;
    bottom: 8px;
    left: 8px;
    background: #0288d1;
    color: #fff;
    font-size: 0.6rem;
    font-weight: 800;
    padding: 3px 8px;
    border-radius: 4px;
    letter-spacing: 0.04em;
}

.trend-hero-title {
    font-size: 0.96rem;
    font-weight: 700;
    line-height: 1.4;
    margin: 0 0 6px;
}

.trend-hero-title a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.2s ease;
}

.trend-hero-title a:hover {
    color: var(--n-accent-red);
}

.trend-hero-date {
    font-size: 0.72rem;
    color: var(--n-text-muted);
}

/* Rank 2, 3, 4, 5: Mini Rows */
.mini-trend-content {
    flex: 1;
    min-width: 0;
}

.mini-trend-row {
    display: flex;
    align-items: center;
    gap: 12px;
}

.mini-trend-thumb-wrap {
    width: 64px;
    height: 64px;
    aspect-ratio: 1 / 1;
    border-radius: 8px;
    overflow: hidden;
    flex-shrink: 0;
    background: #000;
    border: 1px solid var(--n-border-subtle);
}

.mini-trend-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.mini-trend-thumb-wrap:hover .mini-trend-thumb {
    transform: scale(1.08);
}

.mini-trend-info {
    flex: 1;
    min-width: 0;
}

.mini-trend-title {
    font-size: 0.82rem;
    font-weight: 700;
    line-height: 1.35;
    margin: 0 0 4px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.mini-trend-title a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.2s ease;
}

.mini-trend-title a:hover {
    color: var(--n-accent-red);
}

.mini-trend-meta {
    font-size: 0.68rem;
    color: var(--n-text-muted);
    display: block;
}



/* Toast Notification */
.editorial-toast {
    position: fixed;
    bottom: 28px;
    right: 28px;
    background: #111622;
    color: #fff;
    border: 1px solid var(--n-accent-red);
    padding: 12px 20px;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 600;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.8), 0 0 20px rgba(255, 0, 51, 0.2);
    z-index: 9999;
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
    transition: opacity 0.25s ease, transform 0.25s ease;
}

.editorial-toast.show {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}

/* ============================================================
   RESPONSIVE DESIGN
   ============================================================ */
@media (max-width: 992px) {
    .editorial-body-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .editorial-sidebar-col {
        position: static;
    }

    .editorial-title {
        font-size: 1.85rem;
    }
}

@media (max-width: 768px) {
    .editorial-container {
        max-width: 720px;
        padding: 0 16px;
    }

    .editorial-title {
        font-size: 1.6rem;
    }

    .editorial-hero-frame {
        height: 280px;
    }
}

@media (max-width: 576px) {
    .editorial-news-page {
        padding-top: calc(var(--nav-h, 64px) + var(--nav-gap, 14px) + 20px);
        padding-bottom: 60px;
    }

    .editorial-topbar {
        margin-bottom: 18px;
    }

    .editorial-hero-frame {
        height: 220px;
        border-radius: 8px;
    }

    .editorial-title {
        font-size: 1.45rem;
    }

    .editorial-title-row {
        flex-direction: column;
        gap: 12px;
    }

    .editorial-actions {
        align-self: flex-start;
    }

    .editorial-meta-row {
        font-size: 0.78rem;
        gap: 8px;
    }

    .trending-post-block {
        padding: 18px 14px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Share Button: Copy link to clipboard
    const shareBtn = document.getElementById('shareBtn');
    const copyToast = document.getElementById('copyToast');

    if (shareBtn && copyToast) {
        shareBtn.addEventListener('click', function() {
            if (navigator.clipboard) {
                navigator.clipboard.writeText(window.location.href).then(function() {
                    showToast();
                }).catch(function() {
                    fallbackCopy();
                });
            } else {
                fallbackCopy();
            }
        });
    }

    function fallbackCopy() {
        const dummy = document.createElement('input');
        document.body.appendChild(dummy);
        dummy.value = window.location.href;
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);
        showToast();
    }

    function showToast() {
        if (!copyToast) return;
        copyToast.classList.add('show');
        setTimeout(function() {
            copyToast.classList.remove('show');
        }, 2800);
    }

    // Bookmark Button Toggle
    const bookmarkBtn = document.getElementById('bookmarkBtn');
    if (bookmarkBtn) {
        bookmarkBtn.addEventListener('click', function() {
            this.classList.toggle('bookmarked');
            if (this.classList.contains('bookmarked')) {
                this.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>';
            } else {
                this.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>';
            }
        });
    }

    // Auto-Slider for Hero Gallery (Studi Banding 4 Photos)
    const heroSlider = document.getElementById('editorialHeroSlider');
    if (heroSlider) {
        const slides = heroSlider.querySelectorAll('.editorial-slide-item');
        const dots = heroSlider.querySelectorAll('.hero-dot');
        const counter = document.getElementById('editorialSliderCounter');
        let currentIdx = 0;
        let timer = null;
        const interval = 3500; // 3.5 detik

        function setSlide(idx) {
            slides.forEach((s, i) => {
                if (i === idx) s.classList.add('active-slide');
                else s.classList.remove('active-slide');
            });
            dots.forEach((d, i) => {
                if (i === idx) d.classList.add('active');
                else d.classList.remove('active');
            });
            if (counter) counter.textContent = (idx + 1) + ' / ' + slides.length;
            currentIdx = idx;
        }

        function next() {
            let n = (currentIdx + 1) % slides.length;
            setSlide(n);
        }

        function play() {
            stop();
            if (slides.length > 1) {
                timer = setInterval(next, interval);
            }
        }

        function stop() {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }
        }

        dots.forEach((dot, i) => {
            dot.addEventListener('click', function(e) {
                e.stopPropagation();
                setSlide(i);
                play();
            });
        });

        heroSlider.addEventListener('mouseenter', stop);
        heroSlider.addEventListener('mouseleave', play);

        play();
    }
});
</script>
@endpush
