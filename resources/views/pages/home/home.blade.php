@extends('pages.layout.master')


@section('content')

<section id="home" >
     <!-- Particles Background -->
    <div id="particles-js"></div>
    <!-- Konten -->
   @include('pages.home.conten')
</section>

<section id="news" class="news-section">
    @include('pages.news.conten')

</section>

<section id="divisions" class="divisions-section">
      @include('pages.divisions.conten')
</section>

<section id="conten-modul" class="conten-modul-section">
      @include('pages.modul.conten ')
</section>      
<section id="footer" class="footer-section">
      @include('pages.footer.conten')
</section>

@endsection




@push('styles')
<style>
  

/* reset */
body {
    min-height: 100vh;
    margin: 0;
    background: #000;
}
/* about */
.news-section {
    min-height: 100vh;
    background: linear-gradient(135deg, #0A0A0A, #111111);
    color: white;
    padding: 100px 20px;
    position: relative;
    overflow: hidden;
}
.divisions-section {
  position: relative;
  z-index: 2;
  background: #050505;
}

.conten-modul-section {
  position: relative;
  z-index: 1;
  padding-top: 80px;
}
.divisions-section {
  position: relative;
  z-index: 2;
  background: #050505;
  overflow: hidden;
  height: 100%;
}

.footer-section {
    height: auto !important;
    min-height: 0 !important;
    padding: 0 !important;
}

/* grid */
.news-section::after {
    content: "";
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
    background-size: 50px 50px;
}

/* glow */
.news-section::before {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(255, 0, 51, 0.2), transparent);
    top: -50px;
    right: -50px;
    filter: blur(100px);
}

.news-section h1 {
    font-size: 3rem;
    color: #FF0033;
    text-shadow: 0 0 20px rgba(255, 0, 51, 0.7);
}
/*sampai sini cuy*/

/* particles container */
#particles-js {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #000000;
    top: 0;
    left: 0;
    z-index: -1;
}

/* supaya konten di atas particles */
.container {
    position: relative;
    z-index: 1;
}
</style>
@endpush


@push('scripts')
<!-- CDN -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script>
particlesJS("particles-js", {
  particles: {
    number: {
      value: 80,
      density: { enable: true, value_area: 800 }
    },
    color: { value: "#ff0000" },
    shape: { type: "circle" },
    opacity: {
      value: 0.5,
      random: false
    },
    size: {
      value: 4,
      random: true
    },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#ffffff",
      opacity: 0.4,
      width: 1
    },
    move: {
      enable: true,
      speed: 3
    }
  },
  interactivity: {
    events: {
      onhover: {
        enable: true,
        mode: "repulse"
      },
      onclick: {
        enable: true,
        mode: "push"
      }
    }
  },
  retina_detect: true
});
</script>
@endpush