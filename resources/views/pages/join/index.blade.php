@extends('pages.layout.master')

@section('content')

<!-- CYBER GRID OVERLAY -->
<div class="cyber-grid-overlay"></div>

<main class="join-page-wrapper">
    @include('pages.join.conten')
</main>

<!-- FOOTER -->
<section id="footer" class="footer-section">
    @include('pages.footer.conten')
</section>

@endsection

@push('styles')
<style>
/* Reset & Background Global */
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

.join-page-wrapper {
    position: relative;
    z-index: 1;
    padding: 120px 20px 40px;
    min-height: auto;
    width: 100%;
}

.footer-section {
    position: relative;
    z-index: 2;
    height: auto !important;
    min-height: 0 !important;
    padding: 0 !important;
}

@media (max-width: 768px) {
    .join-page-wrapper {
        padding-top: 95px;
        padding-bottom: 24px;
        padding-left: 16px;
        padding-right: 16px;
    }
}
</style>
@endpush
