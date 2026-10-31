@extends('pages.layout.master')

@section('content')

<!-- 1. BACKGROUND JARING-JARING CYBER BERGERAK (PARTICLES & GRID) -->
<div id="particles-js"></div>

<!-- 2. FROSTED GLASS BLUR OVERLAY (MENYARING JARING DI LATAR SECARA LEMBUT) -->
<div class="frosted-glass-backdrop"></div>

<main class="org-page-wrapper">
    @include('pages.organization.conten')
</main>

<!-- FOOTER -->
<section id="footer" class="footer-section">
    @include('pages.footer.conten')
</section>

@endsection

@push('styles')
<style>
/* Reset & Background Global (Konsisten dengan Menu Home) */
body {
    min-height: 100vh;
    margin: 0;
    background-color: #040406;
    color: #fff;
    overflow-x: hidden;
    position: relative;
    font-family: 'Inter', sans-serif;
}

/* 1. Latar Partikel Jaringan & Kotak Cyber (Paling Belakang) */
#particles-js {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #040406;
    background-image: 
        linear-gradient(rgba(255, 0, 51, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 0, 51, 0.05) 1px, transparent 1px);
    background-size: 48px 48px;
    z-index: 0;
    pointer-events: none;
}

/* 2. Frosted Blur Backdrop (Memburamkan Jaring-Jaring Secara Halus & Elegan Tanpa Menenggelamkan Gerakan) */
.frosted-glass-backdrop {
    position: fixed;
    inset: 0;
    z-index: 1;
    pointer-events: none;
    background: radial-gradient(circle at 50% 15%, rgba(255, 0, 51, 0.09) 0%, rgba(4, 4, 6, 0.22) 55%, rgba(4, 4, 6, 0.48) 100%);
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);
}

/* 3. Halaman Organisasi Wrapper (Di Atas Lapisan Blur) */
.org-page-wrapper {
    position: relative;
    z-index: 2;
    padding: 120px 24px 60px;
    min-height: auto;
    width: 100%;
}

.footer-section {
    position: relative;
    z-index: 3;
    height: auto !important;
    min-height: 0 !important;
    padding: 0 !important;
}

@media (max-width: 768px) {
    .org-page-wrapper {
        padding-top: 95px;
        padding-bottom: 40px;
        padding-left: 16px;
        padding-right: 16px;
    }
}
</style>
@endpush

@push('scripts')
<!-- Particles.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    /* Particles Jaringan Cyber Khas Home */
    if (typeof particlesJS !== 'undefined') {
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 90,
                    density: { enable: true, value_area: 800 }
                },
                color: { value: "#ff0033" },
                shape: { type: "circle" },
                opacity: {
                    value: 0.9,
                    random: false
                },
                size: {
                    value: 4.5,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 165,
                    color: "#ffffff",
                    opacity: 0.65,
                    width: 1.8
                },
                move: {
                    enable: true,
                    speed: 2.4,
                    direction: "none",
                    random: false,
                    straight: false,
                    out_mode: "out",
                    bounce: false
                }
            },
            interactivity: {
                detect_on: "window",
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
                        distance: 180,
                        line_linked: {
                            opacity: 0.95
                        }
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });
    }
});
</script>
@endpush
