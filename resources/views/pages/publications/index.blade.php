@extends('pages.layout.master')

@section('content')

<!-- CYBER GRID OVERLAY (PERSIS MENU NEWS & MODULES) -->
<div class="cyber-grid-overlay"></div>

<main class="publications-page-wrapper">
    @include('pages.publications.conten')
</main>

<!-- FOOTER -->
<section id="footer" class="footer-section">
    @include('pages.footer.conten')
</section>

@endsection

@push('styles')
<style>
/* Reset & Background Global (Konsisten 100% dengan Menu News & Modules) */
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
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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

/* Halaman Publikasi Wrapper */
.publications-page-wrapper {
    position: relative;
    z-index: 1;
    padding: 110px 0 70px;
    min-height: 85vh;
}

.footer-section {
    position: relative;
    z-index: 2;
    height: auto !important;
    min-height: 0 !important;
    padding: 0 !important;
}

@media (max-width: 768px) {
    .publications-page-wrapper {
        padding-top: 85px;
        padding-bottom: 40px;
    }
}
</style>
@endpush
