<div class="container text-center d-flex flex-column justify-content-center align-items-center hero-container">
    
    <div class="hero-text">
        <h1 class="gradient-main fade-down delay-1">NETWORK</h1>
        <span class="gradient-sub fade-up delay-2">EVOLUTION</span>
        <p class="lead fade-up delay-3">#ora konek ora kepenak </p>
        <a href="/about" class="btn-see-more mt-4 fade-up delay-4">See More</a>
    </div>

</div>

<script>
const elements = document.querySelectorAll('.fade-up, .fade-down');

function showOnScroll() {
    const trigger = window.innerHeight * 0.85;

    elements.forEach(el => {
        const top = el.getBoundingClientRect().top;
        const bottom = el.getBoundingClientRect().bottom;

        if (top < trigger && bottom > 0) {
            el.classList.add('show');
        } else {
            el.classList.remove('show');
        }
    });
}

window.addEventListener('scroll', showOnScroll);
window.addEventListener('load', showOnScroll);
</script>

<style>
/* DEFAULT hidden */
.fade-up {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

/* Muncul */
.fade-up.show {
    opacity: 1;
    transform: translateY(0);
    text-shadow: 0 0 20px rgba(255, 0, 51, 0.4);
}

.fade-down {
    opacity: 0;
    transform: translateY(-40px);
    transition: all 0.8s ease;
}

.fade-down.show {
    opacity: 1;
    transform: translateY(0);
}

.btn-see-more.show {
    transform: scale(1);
}

.btn-see-more {
    transform: scale(0.9);
}

/* DELAY (biar berurutan 🔥) */
.delay-1 { transition-delay: 0.2s; }
.delay-2 { transition-delay: 0.4s; }
.delay-3 { transition-delay: 0.6s; }
.delay-4 { transition-delay: 0.8s; }


/* Container fix mobile vh issue */
.hero-container {
    min-height: 100vh;
    padding: 20px;
}



/* 🔥 Typography responsive pakai clamp */
.gradient-main {
    font-size: clamp(2.5rem, 8vw, 5rem);
    font-weight: 900;
    margin: 0;

    background: linear-gradient(270deg, #800000, #5B0000, #3A0000);
    background-size: 600% 600%;

    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    animation: gradientMove 4s ease infinite;

    text-shadow: 
        0 0 10px rgba(128, 0, 32, 0.9),
        0 0 15px rgba(128, 0, 32, 0.7),
        0 0 20px rgba(128, 0, 32, 0.5);
}

/* Subtitle */
.gradient-sub {
    font-size: clamp(1rem, 3vw, 2.2rem);
    font-weight: 600;
    letter-spacing: clamp(2px, 1vw, 6px);
    color: rgba(255, 255, 255, 0.61);
}

/* Lead text */
.lead {
    font-size: clamp(0.9rem, 2.5vw, 1.2rem);
    color: #aaaaaa87;
}

/* Button */
.btn-see-more {
    background: transparent;
    color: #FF0033;
    border: 1px solid rgba(255, 0, 51, 0.5);
    padding: 10px 25px;
    border-radius: 30px;
    font-weight: 500;
    letter-spacing: 1px;
    transition: 0.3s;
    position: relative;
    overflow: hidden;
    text-decoration: none;
}

/* Hover */
.btn-see-more:hover {
    color: #fff;
    background: #FF0033;
    box-shadow: 0 0 15px rgba(255, 0, 51, 0.7),
                0 0 30px rgba(255, 0, 51, 0.4);
    transform: translateY(-2px);
}

/* Line anim */
.btn-see-more::before {
    content: "";
    position: absolute;
    width: 0%;
    height: 100%;
    top: 0;
    left: 0;
    background: rgba(255, 0, 51, 0.2);
    transition: 0.4s;
}

.btn-see-more:hover::before {
    width: 100%;
}

/* Animasi */
@keyframes fadeUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Extra mobile tweak */
@media (max-width: 576px) {
    .hero-container {
        padding: 2px;
    }

    .btn-see-more {
        padding: 12px 25px;
        font-size: 0.8rem;
    }
}
</style>