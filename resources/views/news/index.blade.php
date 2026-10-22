@extends('pages.layout.master')

@section('content')

<!-- BACKGROUND JARING-JARING PARTICLES & CYBER GRID -->
<div id="particles-js"></div>
<div class="cyber-grid-overlay"></div>

<main class="news-page-wrapper">
    <!-- TAMPILAN BENTO GRID & ARSIP KEGIATAN PERSIS SAMA -->
    @include('pages.news.conten')
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
    background: #040406;
    color: #fff;
    overflow-x: hidden;
    position: relative;
    font-family: 'Inter', sans-serif;
}

/* Jaring-jaring Kotak Grid Cyber */
.cyber-grid-overlay {
    position: fixed;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255, 0, 51, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 0, 51, 0.05) 1px, transparent 1px);
    background-size: 48px 48px;
    pointer-events: none;
    z-index: -1;
}

/* Particles Container */
#particles-js {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #000000;
    top: 0;
    left: 0;
    z-index: -2;
}

/* Halaman Berita Wrapper */
.news-page-wrapper {
    position: relative;
    z-index: 5;
    padding: 110px 0 70px;
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
        padding-top: 92px;
        padding-bottom: 50px;
    }
}

@media (max-width: 640px) {
    .news-page-wrapper {
        padding-top: 84px;
        padding-bottom: 40px;
    }
}
</style>
@endpush

@push('scripts')
<!-- Particles CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    /* Particles Jaringan Cyber Senada Dengan Home */
    if (typeof particlesJS !== 'undefined') {
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 70,
                    density: { enable: true, value_area: 800 }
                },
                color: { value: "#ff0033" },
                shape: { type: "circle" },
                opacity: {
                    value: 0.65,
                    random: false
                },
                size: {
                    value: 3,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#ffffff",
                    opacity: 0.38,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: true,
                        mode: "grab"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    grab: {
                        distance: 170,
                        line_linked: { opacity: 0.75 }
                    },
                    push: { particles_nb: 3 }
                }
            },
            retina_detect: true
        });
    }
});
</script>
@endpush
