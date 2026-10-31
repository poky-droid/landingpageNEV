@extends('pages.layout.master')

@section('content')

<!-- CYBER GRID OVERLAY (PERSIS MENU MODULES) -->
<div class="cyber-grid-overlay"></div>

<main class="news-page-wrapper">
    @include('pages.news.conten')
</main>

<!-- FOOTER -->
<section id="footer" class="footer-section">
    @include('pages.footer.conten')
</section>

@endsection

@push('styles')
<style>
/* Reset & Background Global (Konsisten 100% dengan Menu Modules) */
body {
    min-height: 100vh;
    margin: 0;
    background-color: #080808;
    background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
    background-size: 66px 66px;
    background-attachment: fixed;
    color: #fff;
    overflow-x: hidden;
    position: relative;
    font-family: 'Inter', sans-serif;
}

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

/* Halaman Berita Wrapper */
.news-page-wrapper {
    position: relative;
    z-index: 1;
    padding: 90px 0 60px;
}

.footer-section {
    position: relative;
    z-index: 2;
    height: auto !important;
    min-height: 0 !important;
    padding: 0 !important;
}

@media (max-width: 768px) {
    .news-page-wrapper {
        padding-top: 80px;
        padding-bottom: 40px;
    }
}
</style>
@endpush
