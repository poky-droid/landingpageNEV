<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}?v={{ time() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<nav class="navbar-custom" aria-label="Main menu">
    <a class="navbar-brand" href="{{ request()->is('/') ? '#home' : url('/#home') }}">
        <img src="{{ asset('images/logoatas.png') }}" alt="Logo Network Evolution (NEV)" width="40" height="40">
        <span class="logo-glow">NETWORK EVOLUTION</span>
    </a>

    <button class="custom-toggler" id="navToggler" type="button" aria-label="Open menu" aria-expanded="false"
        aria-controls="navMenu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>

    <div class="navbar-menu" id="navMenu">
        <ul class="navbar-nav">
            <li><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ request()->is('/') ? '#home' : url('/#home') }}">Home</a></li>
            <li><a class="nav-link {{ request()->is('news*') ? 'active' : '' }}" href="{{ url('/news') }}">News</a></li>
            <li><a class="nav-link {{ request()->is('organization*') ? 'active' : '' }}" href="{{ url('/organization') }}">Organization</a></li>
            <li><a class="nav-link" href="{{ request()->is('/') ? '#conten-modul' : url('/#conten-modul') }}">Modules</a></li>
            <li><a class="nav-link {{ request()->is('publications*') ? 'active' : '' }}" href="{{ url('/publications') }}">Publications</a></li>
        </ul>

        <div class="nav-actions">
            <a class="btn-join" href="{{ url('/join') }}">Let's Join</a>
        </div>
    </div>
</nav>

<style>
    :root {
        --nav-h: 64px;
        /* tinggi pill */
        --nav-gap: 14px;
        /* jarak pill dari atas layar */
        --red: #FF0033;
    }

    html {
        scroll-behavior: smooth;
        scroll-padding-top: calc(var(--nav-h) + var(--nav-gap) + 12px);
    }

    /* ===== NAVBAR (PILL GLASS) ===== */
    .navbar-custom {
        position: fixed;
        top: var(--nav-gap);
        left: 16px;
        right: 16px;
        max-width: 1180px;
        margin: 0 auto;
        z-index: 1000;
        height: var(--nav-h);
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        /* logo | menu | tombol */
        align-items: center;
        padding: 0 12px 0 24px;
        background: transparent;
        /* kaca ada di ::before */
    }

    .navbar-custom::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        pointer-events: none;
        border-radius: 999px;
        background: linear-gradient(135deg,
                rgba(255, 255, 255, 0.14) 0%,
                rgba(255, 255, 255, 0.05) 50%,
                rgba(255, 255, 255, 0.09) 100%);
        -webkit-backdrop-filter: blur(18px) saturate(160%);
        backdrop-filter: blur(18px) saturate(160%);
        border: 1px solid rgba(255, 255, 255, 0.18);
        box-shadow:
            inset 0 1px 0 rgba(255, 255, 255, 0.28),
            /* sorotan di tepi atas */
            inset 0 -1px 0 rgba(255, 255, 255, 0.04),
            0 10px 32px rgba(0, 0, 0, 0.45),
            0 0 28px rgba(255, 0, 51, 0.15);
        /* glow merah tipis */
    }

    /* ===== BRAND ===== */
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0;
        padding: 0;
        text-decoration: none;
        justify-self: start;
    }

    .logo-glow {
        font-size: 1rem;
        font-weight: bold;
        color: var(--red);
        text-shadow: 0 0 10px rgba(255, 0, 51, 0.8);
    }

    /* ===== MENU ===== */
    .navbar-menu {
        display: contents;
        /* menu dan tombol ikut jadi kolom tengah dan kanan di grid */
    }

    .navbar-nav {
        display: flex;
        flex-direction: row;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: clamp(8px, 1.4vw, 18px);
    }

    .navbar-nav li {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .navbar-custom .nav-link {
        color: #aaa;
        text-decoration: none;
        position: relative;
        display: block;
        padding: 8px 14px;
        font-size: 15px;
        transition: color 0.3s;
    }

    .navbar-custom .nav-link::after {
        content: "";
        position: absolute;
        left: 14px;
        right: 14px;
        bottom: 2px;
        height: 2px;
        background: var(--red);
        width: 0%;
        transition: width 0.3s;
    }

    .navbar-custom .nav-link:focus {
        color: #aaa;
    }

    /* menimpa warna biru fokus bawaan Bootstrap */
    .navbar-custom .nav-link:hover {
        color: #fff;
    }

    .navbar-custom .nav-link:hover::after {
        width: calc(100% - 28px);
    }

    .navbar-custom .nav-link.active,
    .navbar-custom .nav-link.active:hover,
    .navbar-custom .nav-link.active:focus {
        color: var(--red);
        font-weight: 600;
    }

    .navbar-custom .nav-link.active::after {
        width: calc(100% - 28px);
    }

    /* ===== TOMBOL LET'S JOIN ===== */
    .nav-actions {
        display: flex;
        align-items: center;
        justify-self: end;
    }

    .btn-join {
        padding: 10px 24px;
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
        background: #E6002E;
        /* sedikit lebih gelap dari #FF0033 agar teks putih cukup kontras */
        border-radius: 999px;
        box-shadow: 0 0 16px rgba(255, 0, 51, 0.45);
        transition: background 0.3s, box-shadow 0.3s;
    }

    .btn-join:hover {
        color: #fff;
        background: var(--red);
        box-shadow: 0 0 22px rgba(255, 0, 51, 0.7);
    }

    .btn-join:focus-visible {
        outline: 2px solid #fff;
        outline-offset: 2px;
    }

    /* ===== BURGER ===== */
    .custom-toggler {
        display: none;
        border: none;
        background: transparent;
        cursor: pointer;
        padding: 5px;
        justify-self: end;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px 0;
        background: white;
        border-radius: 2px;
        transition: all 0.3s ease;
    }

    .custom-toggler.active .bar:nth-child(1) {
        transform: rotate(45deg) translate(5px, 8px);
    }

    .custom-toggler.active .bar:nth-child(2) {
        opacity: 0;
    }

    .custom-toggler.active .bar:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -8px);
    }

    .custom-toggler:hover .bar {
        background: var(--red);
    }

    /* ===== MOBILE ===== */
    @media (max-width: 767px) {
        :root {
            --nav-h: 56px;
            --nav-gap: 10px;
        }

        .navbar-custom {
            display: flex;
            justify-content: space-between;
            left: 12px;
            right: 12px;
            padding: 0 8px 0 16px;
        }

        .custom-toggler {
            display: block;
        }

        /* dropdown di bawah pill */
        .navbar-menu {
            display: block;
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            right: 0;
            max-height: calc(100vh - var(--nav-h) - var(--nav-gap) - 24px);
            overflow-y: auto;
            z-index: 999;
            padding: 20px 0 28px;
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.12), rgba(255, 255, 255, 0.04)),
                rgba(10, 10, 10, 0.55);
            -webkit-backdrop-filter: blur(20px) saturate(160%);
            backdrop-filter: blur(20px) saturate(160%);
            border: 1px solid rgba(255, 255, 255, 0.16);
            border-radius: 24px;
            box-shadow:
                inset 0 1px 0 rgba(255, 255, 255, 0.22),
                0 16px 40px rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translateY(-14px);
            transition: transform 0.35s ease, opacity 0.35s ease, visibility 0.35s;
        }

        .navbar-menu.active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateY(0);
        }

        .navbar-nav {
            flex-direction: column;
            align-items: stretch;
            gap: 0;
            width: 100%;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .navbar-nav li {
            width: 100%;
            margin: 0;
            padding: 0 20px;
            list-style: none;
        }

        .navbar-custom .nav-link {
            font-size: 1.1rem;
            padding: 12px 28px 12px 44px;
            text-align: left;
            width: 100%;
        }

        .navbar-custom .nav-link::after {
            display: none;
        }

        .nav-actions {
            display: block;
            padding: 16px 20px 0;
        }

        .btn-join {
            display: block;
            padding: 14px 16px;
            text-align: center;
        }
    }

    @media (max-width: 360px) {
        .logo-glow {
            font-size: 0.85rem;
        }

        .navbar-brand img {
            width: 40px;
            height: auto;
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggler = document.getElementById('navToggler');
        const menu = document.getElementById('navMenu');
        const links = document.querySelectorAll('.navbar-nav .nav-link');

        /* ===== BURGER MENU ===== */
        function setMenu(open) {
            toggler.classList.toggle('active', open);
            menu.classList.toggle('active', open);
            toggler.setAttribute('aria-expanded', open);
            toggler.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        }

        toggler.addEventListener('click', () => setMenu(!menu.classList.contains('active')));

        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !toggler.contains(e.target)) setMenu(false);
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') setMenu(false);
        });
        window.addEventListener('resize', () => {
            if (window.innerWidth > 991) setMenu(false);
        });

        /* ===== LINK AKTIF ===== */
        function setActive(id) {
            links.forEach(l => {
                l.classList.toggle('active', l.getAttribute('href') === '#' + id);
            });
        }

        links.forEach(link => {
            link.addEventListener('click', () => {
                setMenu(false);
                const href = link.getAttribute('href');
                if (href.startsWith('#') && href.length > 1) setActive(href.slice(1));
            });
        });

        /* ===== SCROLL-SPY ===== */
        const sections = [...links]
            .map(l => l.getAttribute('href'))
            .filter(h => h.startsWith('#') && h.length > 1)
            .map(h => document.getElementById(h.slice(1)))
            .filter((s, i, arr) => s && arr.indexOf(s) === i); // buang yang tidak ada / duplikat

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) setActive(entry.target.id);
                });
            }, {
                rootMargin: '-40% 0px -55% 0px' // garis pantau di sekitar tengah layar
            });

            sections.forEach(s => observer.observe(s));
        }

        /* Section terakhir yang pendek: aktifkan saat mentok di bawah halaman */
        window.addEventListener('scroll', () => {
            const atBottom = window.innerHeight + window.scrollY >= document.body.scrollHeight - 2;
            if (atBottom && sections.length) setActive(sections[sections.length - 1].id);
        }, {
            passive: true
        });
    });
</script>