<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}?v={{ time() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<nav class="navbar-custom">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="50" height="30">
        <span class="logo-glow">NEV</span>
    </a>

    <button class="custom-toggler" id="navToggler" type="button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>

    <div class="navbar-menu" id="navMenu">
        <ul class="navbar-nav">
            <li><a class="nav-link active" href="#home">Home</a></li>
            <li><a class="nav-link" href="#news">News</a></li>
            <li><a class="nav-link" href="#divisions">Divisions</a></li>
            <li><a class="nav-link" href="#conten-modul">Modules</a></li>
        </ul>
    </div>
</nav>

<style>
/* ===== NAVBAR ===== */
.navbar-custom {
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 24px;
    background: rgba(5, 5, 5, 0.75);
    backdrop-filter: blur(15px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    box-shadow: 0 0 20px rgba(255, 0, 51, 0.1);
}

/* ===== BRAND ===== */
.navbar-brand {
    display: flex;
    align-items: center;
    gap: 8px;
    text-decoration: none;
}
.logo-glow {
    font-size: 1.5rem;
    font-weight: bold;
    color: #FF0033;
    text-shadow: 0 0 10px rgba(255, 0, 51, 0.8);
}

/* ===== MENU ===== */
.navbar-menu {
    display: flex;
    align-items: center;
}
.navbar-nav {
    display: flex;
    flex-direction: row;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 10px;
}
.navbar-nav li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.nav-link {
    color: #aaa;
    text-decoration: none;
    position: relative;
    display: block;
    gap : 4px;
    padding: 8px 14px;
    font-size: 15px;
    transition: color 0.3s;
}
.nav-link::after {
    content: "";
    position: absolute;
    left: 14px; right: 14px;
    bottom: 2px;
    height: 2px;
    background: #FF0033;
    width: 0%;
    transition: width 0.3s;
}
.nav-link:hover { color: #fff; }
.nav-link:hover::after { width: calc(100% - 28px); }
.nav-link.active { color: #FF0033; }

/* ===== BURGER ===== */
.custom-toggler {
    display: none;
    border: none;
    background: transparent;
    cursor: pointer;
    padding: 5px;
    z-index: 1100;
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
.custom-toggler.active .bar:nth-child(1) { transform: rotate(45deg) translate(5px, 8px); }
.custom-toggler.active .bar:nth-child(2) { opacity: 0; }
.custom-toggler.active .bar:nth-child(3) { transform: rotate(-45deg) translate(5px, -8px); }
.custom-toggler:hover .bar { background: #FF0033; }

/* ===== MOBILE ===== */
@media (max-width: 767px) {
    .custom-toggler { display: block; }

    .navbar-menu {
        position: fixed;
        top: 56px; left: 0; right: 0;
        background: rgba(0, 0, 0, 0.97);
        backdrop-filter: blur(10px);
        z-index: 999;
        transform: translateY(-110%);
        opacity: 0;
        transition: transform 0.35s ease, opacity 0.35s ease;
        padding: 20px 0 28px;
    }
    .navbar-menu.active {
        transform: translateY(0);
        opacity: 1;
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
    .nav-link {
        font-size: 1.1rem;
        padding: 12px 28px;
        text-align: left;
        width: 100%;
    }
    .nav-link::after { display: none; }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.getElementById('navToggler');
    const menu = document.getElementById('navMenu');

    toggler.addEventListener('click', () => {
        toggler.classList.toggle('active');
        menu.classList.toggle('active');
    });

    menu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            toggler.classList.remove('active');
            menu.classList.remove('active');
        });
    });
});
</script>