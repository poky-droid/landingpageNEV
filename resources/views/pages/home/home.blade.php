@extends('pages.layout.master')

@section('content')

<!-- BACKGROUND JARING-JARING PARTICLES & CYBER GRID -->
<div id="particles-js"></div>
<div class="cyber-grid-overlay"></div>

<!-- HERO SECTION + LOGO MARQUEE (PAS 100VH 1 LAYAR PENUH) -->
<section id="home" class="hero-first-screen">
    @include('pages.home.conten')
    @include('pages.home.marquee')
</section>

<!-- 01 / IDENTITAS ORGANISASI (TERLIHAT SAAT DI-SCROLL) -->
<section id="identitas" class="identitas-section">
    @include('pages.home.identitas')
</section>

<!-- 02 / ARAH GERAK STRATEGIS (VISI & MISI) -->
<section id="visi-misi" class="visimisi-section">
    @include('pages.home.visimisi')
</section>

<!-- 03 / DIVISI RISET -->
<section id="divisions" class="divisions-section">
    @include('pages.divisions.conten')
</section>

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
}

/* 1. Particles Container (Jaring-Jaring Laba-Laba Jaringan) */
#particles-js {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #040406;
    top: 0;
    left: 0;
    z-index: 0;
    pointer-events: none;
}

/* 2. Jaring-jaring Kotak Grid Cyber */
.cyber-grid-overlay {
    position: fixed;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255, 0, 51, 0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 0, 51, 0.05) 1px, transparent 1px);
    background-size: 48px 48px;
    pointer-events: none;
    z-index: 1;
}

/* 3. First Screen: Hero Orbit + Marquee Pas 100vh 1 Layar Penuh */
.hero-first-screen {
    height: 100vh;
    height: 100svh;
    min-height: 640px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative;
    z-index: 2;
    overflow: hidden;
    margin: 0 !important;
    padding: 0 !important;
}

#identitas, #visi-misi {
    height: auto !important;
    min-height: 0 !important;
    margin: 0 !important;
}

.identitas-section {
    background: transparent !important;
    position: relative;
    z-index: 5;
    height: auto !important;
    min-height: 0 !important;
    margin: 0 !important;
}

.visimisi-section {
    background: #000000 !important;
    position: relative;
    z-index: 5;
    height: auto !important;
    min-height: 0 !important;
    margin: 0 !important;
}

.divisions-section {
    position: relative;
    z-index: 5;
    background-color: #060608 !important;
    background-image: 
        linear-gradient(rgba(255, 255, 255, 0.045) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.045) 1px, transparent 1px);
    background-size: 36px 36px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    height: auto !important;
    min-height: 0 !important;
    margin: 0 !important;
}

.divisions-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 50% 25%, rgba(255, 0, 51, 0.05) 0%, transparent 65%);
    pointer-events: none;
    z-index: 1;
}

.footer-section {
    position: relative;
    z-index: 2;
    height: auto !important;
    min-height: 0 !important;
    padding: 0 !important;
}

/* Supaya konten berada di atas background */
.site-container, .inner-container, .wrap {
    position: relative;
    z-index: 2;
}

/* Reveal on Scroll Animation */
.reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.6s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.6s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endpush

@push('scripts')
<!-- Particles CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    /* Initialize Particles dengan Jaring-Jaring yang Jelas */
    if (typeof particlesJS !== 'undefined') {
        particlesJS("particles-js", {
            particles: {
                number: {
                    value: 85,
                    density: { enable: true, value_area: 800 }
                },
                color: { value: "#ff0033" },
                shape: { type: "circle" },
                opacity: {
                    value: 0.8,
                    random: false
                },
                size: {
                    value: 3.8,
                    random: true
                },
                line_linked: {
                    enable: true,
                    distance: 160,
                    color: "#ffffff",
                    opacity: 0.5,
                    width: 1.25
                },
                move: {
                    enable: true,
                    speed: 2.2,
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
                            opacity: 0.8
                        }
                    },
                    push: {
                        particles_nb: 3
                    }
                }
            },
            retina_detect: true
        });
    }

    /* Scroll Reveal Observer */
    const revealEls = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        revealEls.forEach(el => observer.observe(el));
    } else {
        revealEls.forEach(el => el.classList.add('visible'));
    }
});
</script>
@endpush