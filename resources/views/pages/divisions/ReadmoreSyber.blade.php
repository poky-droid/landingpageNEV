@include('pages.layout.navbarforconten')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NEV — Cybersecurity Division</title>
<link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Mono:wght@400;500&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet" />
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --red: #e02020;
    --red-dim: #8b1010;
    --bg: #0a0a0a;
    --bg2: #111111;
    --bg3: #181818;
    --text: #f0f0f0;
    --muted: #666;
    --border: #222;
  }

  html { scroll-behavior: smooth; }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: 'Syne', sans-serif;
    overflow-x: hidden;
  }

  /* NOISE OVERLAY */
  body::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 0;
    opacity: 0.4;
  }

  /* NAV */
  nav {
    position: fixed;
    top: 0; left: 0; right: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 60px;
    border-bottom: 1px solid var(--border);
    background: rgba(10,10,10,0.9);
    backdrop-filter: blur(12px);
    z-index: 100;
  }

  .nav-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
  }

  .nav-logo svg { width: 32px; height: 32px; }

  .nav-logo span {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 22px;
    color: var(--red);
    letter-spacing: 2px;
  }

  .nav-links {
    display: flex;
    gap: 36px;
    list-style: none;
  }

  .nav-links a {
    color: var(--muted);
    text-decoration: none;
    font-size: 14px;
    letter-spacing: 0.5px;
    transition: color 0.2s;
  }

  .nav-links a:hover,
  .nav-links a.active { color: var(--text); }

  .nav-links a.active { color: var(--red); }

  /* HERO */
  .hero {
    padding: 160px 60px 80px;
    position: relative;
    border-bottom: 1px solid var(--border);
    overflow: hidden;
  }

  /* Scanning line animation */
  .hero::after {
    content: '';
    position: absolute;
    left: 0; right: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, var(--red), transparent);
    animation: scanline 4s linear infinite;
    opacity: 0.3;
    pointer-events: none;
  }

  @keyframes scanline {
    0%   { top: 0; }
    100% { top: 100%; }
  }

  .hero-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: var(--muted);
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .hero-label::before {
    content: '03';
    color: var(--red);
    font-size: 10px;
  }

  .hero-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(80px, 12vw, 160px);
    line-height: 0.9;
    letter-spacing: -1px;
    color: var(--text);
    margin-bottom: 40px;
  }

  .hero-title span { color: var(--red); }

  .hero-desc {
    max-width: 480px;
    font-size: 15px;
    color: var(--muted);
    line-height: 1.8;
  }

  .hero-tags {
    display: flex;
    gap: 10px;
    margin-top: 40px;
    flex-wrap: wrap;
  }

  .tag {
    border: 1px solid var(--border);
    padding: 7px 18px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: var(--muted);
    letter-spacing: 1px;
    transition: all 0.2s;
  }

  .tag:hover {
    border-color: var(--red);
    color: var(--red);
  }

  .hero-number {
    position: absolute;
    right: 60px;
    bottom: 80px;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 200px;
    color: rgba(255,255,255,0.02);
    line-height: 1;
    pointer-events: none;
    user-select: none;
  }

  /* THREAT TICKER */
  .ticker-wrap {
    overflow: hidden;
    border-bottom: 1px solid var(--border);
    border-top: 1px solid var(--border);
    background: var(--bg2);
    padding: 12px 0;
    position: relative;
  }

  .ticker-label {
    position: absolute;
    left: 0; top: 0; bottom: 0;
    display: flex;
    align-items: center;
    padding: 0 20px;
    background: var(--red);
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9px;
    font-weight: 500;
    letter-spacing: 2px;
    color: #fff;
    z-index: 2;
    white-space: nowrap;
  }

  .ticker-track {
    display: flex;
    gap: 60px;
    animation: ticker 28s linear infinite;
    white-space: nowrap;
    padding-left: 160px;
  }

  .ticker-item {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: var(--muted);
    letter-spacing: 1px;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .ticker-item::before {
    content: '▸';
    color: var(--red);
    font-size: 8px;
  }

  @keyframes ticker {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }

  /* STATS ROW */
  .stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    border-bottom: 1px solid var(--border);
  }

  .stat-item {
    padding: 48px 60px;
    border-right: 1px solid var(--border);
    position: relative;
    overflow: hidden;
    transition: background 0.3s;
  }

  .stat-item:last-child { border-right: none; }

  .stat-item:hover { background: var(--bg2); }

  .stat-item::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 0; height: 2px;
    background: var(--red);
    transition: width 0.4s ease;
  }

  .stat-item:hover::after { width: 100%; }

  .stat-number {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 56px;
    color: var(--red);
    line-height: 1;
    margin-bottom: 8px;
  }

  .stat-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: var(--muted);
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  /* SECTIONS LAYOUT */
  .content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border-bottom: 1px solid var(--border);
  }

  .content-left {
    padding: 80px 60px;
    border-right: 1px solid var(--border);
  }

  .content-right {
    padding: 80px 60px;
  }

  .section-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: var(--red);
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 32px;
  }

  .section-title {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 24px;
    line-height: 1.2;
  }

  /* RESPONSIBILITIES */
  .resp-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 0;
  }

  .resp-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 20px 0;
    border-bottom: 1px solid var(--border);
    transition: background 0.2s;
    cursor: default;
  }

  .resp-item:last-child { border-bottom: none; }

  .resp-num {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: var(--red);
    min-width: 24px;
    padding-top: 2px;
  }

  .resp-text {
    font-size: 14px;
    color: var(--muted);
    line-height: 1.7;
  }

  .resp-text strong {
    display: block;
    color: var(--text);
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 4px;
  }

  /* TOOLS GRID */
  .tools-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1px;
    background: var(--border);
    border: 1px solid var(--border);
    margin-top: 8px;
  }

  .tool-card {
    background: var(--bg);
    padding: 24px;
    transition: background 0.2s;
    cursor: default;
  }

  .tool-card:hover { background: var(--bg2); }

  .tool-icon {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: var(--red);
    letter-spacing: 2px;
    margin-bottom: 10px;
  }

  .tool-name {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 6px;
  }

  .tool-desc {
    font-size: 12px;
    color: var(--muted);
    line-height: 1.6;
  }

  /* TEAM SECTION */
  .team-section {
    padding: 80px 60px;
    border-bottom: 1px solid var(--border);
  }

  .team-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 48px;
  }

  .team-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1px;
    background: var(--border);
    border: 1px solid var(--border);
  }

  .member-card {
    background: var(--bg);
    padding: 32px 24px;
    transition: background 0.3s;
    position: relative;
    overflow: hidden;
  }

  .member-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 3px; height: 0;
    background: var(--red);
    transition: height 0.3s ease;
  }

  .member-card:hover { background: var(--bg2); }
  .member-card:hover::before { height: 100%; }

  .member-avatar {
    width: 48px;
    height: 48px;
    border-radius: 0;
    background: var(--bg3);
    border: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 18px;
    color: var(--red);
    margin-bottom: 16px;
  }

  .member-name {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 4px;
  }

  .member-role {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: var(--muted);
    letter-spacing: 1px;
  }

  .member-status {
    display: inline-block;
    margin-top: 14px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9px;
    letter-spacing: 1px;
    padding: 3px 8px;
    border: 1px solid;
  }

  .status-active {
    color: #3db868;
    border-color: #1a4a2a;
  }

  .status-lead {
    color: var(--red);
    border-color: var(--red-dim);
  }

  /* ALERT / INCIDENT SECTION */
  .incident-section {
    border-bottom: 1px solid var(--border);
  }

  .incident-header {
    padding: 48px 60px 32px;
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    border-bottom: 1px solid var(--border);
  }

  .incident-row {
    display: grid;
    grid-template-columns: 80px 1fr auto;
    align-items: center;
    padding: 32px 60px;
    border-bottom: 1px solid var(--border);
    gap: 40px;
    transition: background 0.2s;
    cursor: default;
  }

  .incident-row:last-child { border-bottom: none; }
  .incident-row:hover { background: var(--bg2); }

  .incident-idx {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 36px;
    color: var(--border);
    line-height: 1;
  }

  .incident-name {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 6px;
  }

  .incident-desc {
    font-size: 13px;
    color: var(--muted);
    line-height: 1.6;
  }

  .incident-meta { text-align: right; }

  .incident-status {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    letter-spacing: 1px;
    padding: 5px 12px;
    border: 1px solid;
    display: inline-block;
  }

  .incident-uptime {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: var(--muted);
    margin-top: 10px;
  }

  .is-secured { color: #3db868; border-color: #1a4a2a; }
  .is-monitoring { color: #e09020; border-color: #5a3a10; }
  .is-active { color: var(--red); border-color: var(--red-dim); }

  /* CONTACT / JOIN */
  .cta-section {
    padding: 100px 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 60px;
  }

  .cta-left { max-width: 500px; }

  .cta-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 64px;
    line-height: 0.95;
    margin-bottom: 24px;
  }

  .cta-title span { color: var(--red); }

  .cta-desc {
    font-size: 14px;
    color: var(--muted);
    line-height: 1.8;
  }

  .cta-right {
    display: flex;
    flex-direction: column;
    gap: 16px;
    min-width: 260px;
  }

  .btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 18px 28px;
    background: var(--red);
    color: #fff;
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: background 0.2s;
    cursor: pointer;
    border: none;
  }

  .btn-primary:hover { background: #c01818; }

  .btn-secondary {
    display: inline-flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    padding: 18px 28px;
    background: transparent;
    color: var(--text);
    text-decoration: none;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: 1px solid var(--border);
    transition: border-color 0.2s, color 0.2s;
    cursor: pointer;
  }

  .btn-secondary:hover {
    border-color: var(--muted);
    color: var(--text);
  }

  /* FOOTER */
  footer {
    border-top: 1px solid var(--border);
    padding: 32px 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .footer-left {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: var(--muted);
  }

  .back-link {
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--muted);
    text-decoration: none;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    letter-spacing: 1px;
    transition: color 0.2s;
  }

  .back-link:hover { color: var(--red); }

  .back-link svg {
    width: 16px;
    height: 16px;
    transition: transform 0.2s;
  }

  .back-link:hover svg { transform: translateX(-4px); }

  /* RED LINE ACCENT */
  .red-line {
    height: 1px;
    background: linear-gradient(to right, var(--red), transparent);
    margin: 0;
  }

  /* ANIMATIONS */
  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .fade-up { animation: fadeUp 0.7s ease forwards; }
  .fade-up-d1 { animation-delay: 0.1s; opacity: 0; }
  .fade-up-d2 { animation-delay: 0.2s; opacity: 0; }
  .fade-up-d3 { animation-delay: 0.3s; opacity: 0; }
  .fade-up-d4 { animation-delay: 0.4s; opacity: 0; }

  /* SCROLLBAR */
  ::-webkit-scrollbar { width: 4px; }
  ::-webkit-scrollbar-track { background: var(--bg); }
  ::-webkit-scrollbar-thumb { background: var(--red-dim); }

  /* BLINKING DOT */
  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
  }
  .blink {
    display: inline-block;
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--red);
    animation: blink 1.2s ease infinite;
    margin-right: 8px;
  }

  @media (max-width: 900px) {
    nav, .hero, .content-left, .content-right, .team-section, .cta-section, footer { padding-left: 24px; padding-right: 24px; }
    .content-grid { grid-template-columns: 1fr; }
    .content-left { border-right: none; border-bottom: 1px solid var(--border); }
    .stats { grid-template-columns: 1fr 1fr; }
    .team-grid { grid-template-columns: 1fr 1fr; }
    .incident-row { padding: 24px; grid-template-columns: 50px 1fr auto; gap: 16px; }
    .cta-section { flex-direction: column; }
    .hero-title { font-size: 72px; }
    .incident-header { padding: 32px 24px 24px; }
  }
  .member-avatar-img {
    width: 100%;                  /* Mengisi penuh kontainer pembungkusnya */
    max-width: 150px;             /* Ukuran maksimal pas layar gede */
    aspect-ratio: 1 / 1;          /* Memastikan gambar tetep bulat sempurna (kotak 1:1) */
    height: auto;                 /* Mengikuti aspect ratio */
    border-radius: 50%;
    object-fit: cover;
    background: transparent;
  }
</style>
</head>
<body>

<!-- HERO -->
<section class="hero">
  <div class="hero-label fade-up fade-up-d1">DIVISION DETAIL — CYBERSECURITY</div>
  <h1 class="hero-title fade-up fade-up-d2">CYBER<span>SEC</span></h1>
  <p class="hero-desc fade-up fade-up-d3">
    Melindungi aset digital, mendeteksi ancaman siber, dan merespons insiden secara real-time. Dari penetration testing hingga threat intelligence dan SIEM, tim ini adalah garis pertahanan terakhir organisasi.
  </p>
  <div class="hero-tags fade-up fade-up-d4">
    <span class="tag">Penetration Testing</span>
    <span class="tag">SIEM</span>
    <span class="tag">Threat Intelligence</span>
    <span class="tag">Incident Response</span>
    <span class="tag">SOC</span>
    <span class="tag">Forensics</span>
  </div>
  <div class="hero-number"></div>
</section>

<!-- THREAT TICKER -->
<div class="ticker-wrap">
  <div class="ticker-label">LIVE THREATS</div>
  <div class="ticker-track">
    <span class="ticker-item">SQL INJECTION ATTEMPT — BLOCKED</span>
    <span class="ticker-item">PORT SCAN DETECTED — 192.168.4.21</span>
    <span class="ticker-item">BRUTE FORCE SSH — MITIGATED</span>
    <span class="ticker-item">MALWARE SIGNATURE MATCH — QUARANTINED</span>
    <span class="ticker-item">PHISHING URL FLAGGED — DOMAIN BLACKLISTED</span>
    <span class="ticker-item">PRIVILEGE ESCALATION ATTEMPT — DENIED</span>
    <span class="ticker-item">ANOMALOUS TRAFFIC — EAST-WEST ANALYSIS RUNNING</span>
    <span class="ticker-item">CVE-2024-3094 SCAN — PATCHED</span>
    <!-- duplicated for seamless loop -->
    <span class="ticker-item">SQL INJECTION ATTEMPT — BLOCKED</span>
    <span class="ticker-item">PORT SCAN DETECTED — 192.168.4.21</span>
    <span class="ticker-item">BRUTE FORCE SSH — MITIGATED</span>
    <span class="ticker-item">MALWARE SIGNATURE MATCH — QUARANTINED</span>
    <span class="ticker-item">PHISHING URL FLAGGED — DOMAIN BLACKLISTED</span>
    <span class="ticker-item">PRIVILEGE ESCALATION ATTEMPT — DENIED</span>
    <span class="ticker-item">ANOMALOUS TRAFFIC — EAST-WEST ANALYSIS RUNNING</span>
    <span class="ticker-item">CVE-2024-3094 SCAN — PATCHED</span>
  </div>
</div>

<!-- TEAM SECTION -->
<section class="team-section">
  <div class="team-header">
    <div>
      <div class="section-label">OUR PEOPLE</div>
      <h2 class="section-title">The Team</h2>
    </div>
    <div style="font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--muted);">8 ENGINEERS TOTAL</div>
  </div>
  <div class="team-grid">
    @foreach ($anggota as $item)
        <div class="member-card">

            @if ($item->foto)
                <img src="{{ Storage::disk('s3')->url($item->foto) }}"
                alt="{{ $item->nama }}"
                class="member-avatar-img">
            @else
                <div class="member-avatar">
                    {{ strtoupper(substr($item->nama, 0, 2)) }}
                </div>
            @endif

            <div class="member-name">
                {{ $item->nama }}
            </div>

            <div class="member-role">
                {{ $item->jurusan }}
            </div>

            <span class="member-status status-active">
                ACTIVE
            </span>

        </div>
    @endforeach
</div>
</section>

<div class="red-line"></div>

<!-- STATS -->
<div class="stats">
  <div class="stat-item">
    <div class="stat-number">{{ $totalAnggota }}</div>
    <div class="stat-label">Engineers</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">24/7</div>
    <div class="stat-label">SOC Operations</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">1.2K</div>
    <div class="stat-label">Threats Blocked / Mo</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">&lt;4m</div>
    <div class="stat-label">Mean Response Time</div>
  </div>
</div>

<!-- CONTENT GRID -->
<div class="content-grid">
  <!-- RESPONSIBILITIES -->
  <div class="content-left">
    <div class="section-label">RESPONSIBILITIES</div>
    <h2 class="section-title">What We Do</h2>
    <ul class="resp-list">
      <li class="resp-item">
        <span class="resp-num">01</span>
        <span class="resp-text">
          <strong>Penetration Testing & Red Team</strong>
          Simulasi serangan siber terhadap sistem, jaringan, dan aplikasi untuk mengidentifikasi celah keamanan sebelum dieksploitasi penyerang nyata.
        </span>
      </li>
      <li class="resp-item">
        <span class="resp-num">02</span>
        <span class="resp-text">
          <strong>Security Operations Center (SOC)</strong>
          Pemantauan ancaman 24/7 melalui SIEM, analisis log, deteksi anomali, dan respons insiden terkoordinasi secara real-time.
        </span>
      </li>
      <li class="resp-item">
        <span class="resp-num">03</span>
        <span class="resp-text">
          <strong>Threat Intelligence</strong>
          Pengumpulan, analisis, dan distribusi intelijen ancaman dari berbagai sumber untuk memperkuat postur keamanan organisasi secara proaktif.
        </span>
      </li>
      <li class="resp-item">
        <span class="resp-num">04</span>
        <span class="resp-text">
          <strong>Vulnerability Management</strong>
          Identifikasi, penilaian, dan remediasi kerentanan secara berkelanjutan menggunakan scanning otomatis dan penilaian risiko berbasis konteks.
        </span>
      </li>
      <li class="resp-item">
        <span class="resp-num">05</span>
        <span class="resp-text">
          <strong>Digital Forensics & Incident Response</strong>
          Investigasi mendalam pasca-insiden, preservasi barang bukti digital, analisis root cause, dan penyusunan laporan forensik komprehensif.
        </span>
      </li>
    </ul>
  </div>

  <!-- TOOLS -->
  <div class="content-right">
    <div class="section-label">TOOLS & TECH STACK</div>
    <h2 class="section-title">Our Arsenal</h2>
    <div class="tools-grid">
      <div class="tool-card">
        <div class="tool-icon">PENTEST</div>
        <div class="tool-name">Metasploit</div>
        <div class="tool-desc">Framework penetration testing terkemuka untuk eksploitasi kerentanan, post-exploitation, dan pembuatan laporan keamanan.</div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">SIEM</div>
        <div class="tool-name">Splunk / Wazuh</div>
        <div class="tool-desc">Platform SIEM enterprise untuk korelasi log, deteksi ancaman berbasis aturan, dan respons insiden otomatis.</div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">RECON</div>
        <div class="tool-name">Nmap / Shodan</div>
        <div class="tool-desc">Reconnaissance dan pemindaian jaringan untuk pemetaan permukaan serangan dan identifikasi aset yang terekspos.</div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">FORENSIC</div>
        <div class="tool-name">Autopsy / Volatility</div>
        <div class="tool-desc">Alat forensik digital untuk analisis disk, memori, dan artefak sistem pasca-insiden secara mendalam.</div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">MALWARE</div>
        <div class="tool-name">Cuckoo Sandbox</div>
        <div class="tool-desc">Sandbox analisis malware otomatis untuk detonasi sampel berbahaya dan ekstraksi indikator kompromi (IoC).</div>
      </div>
      <div class="tool-card">
        <div class="tool-icon">VULN</div>
        <div class="tool-name">Nessus / OpenVAS</div>
        <div class="tool-desc">Scanner kerentanan komprehensif dengan database CVE terkini untuk assessment dan prioritasi risiko berkelanjutan.</div>
      </div>
    </div>
  </div>
</div>

<!-- ACTIVE OPERATIONS -->
<section class="incident-section">
  <div class="incident-header">
    <div>
      <div class="section-label">ACTIVE OPERATIONS</div>
      <h2 class="section-title">Current Engagements</h2>
    </div>
    <div style="display:flex;align-items:center;font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--muted);">
      <span class="blink"></span>LIVE STATUS
    </div>
  </div>
  <div class="incident-row">
    <div class="incident-idx">01</div>
    <div>
      <div class="incident-name">Red Team Exercise — Internal Infrastructure</div>
      <div class="incident-desc">Simulasi serangan APT terhadap infrastruktur internal untuk menguji ketahanan deteksi dan respons tim blue team.</div>
    </div>
    
  </div>
  <div class="incident-row">
    <div class="incident-idx">02</div>
    <div>
      <div class="incident-name">CVE Patch Audit — Web Application Stack</div>
      <div class="incident-desc">Audit dan remediasi kerentanan kritis pada stack aplikasi web setelah pembaruan advisory CISA dan NVD terbaru.</div>
    </div>
    
  </div>
  <div class="incident-row">
    <div class="incident-idx">03</div>
    <div>
      <div class="incident-name">Zero-Trust Architecture — Phase 2 Rollout</div>
      <div class="incident-desc">Implementasi lanjutan kebijakan zero-trust termasuk identity verification, micro-segmentation, dan least-privilege enforcement.</div>
    </div>
    
  </div>
  <div class="incident-row">
    <div class="incident-idx">04</div>
    <div>
      <div class="incident-name">Threat Hunt — Lateral Movement Indicators</div>
      <div class="incident-desc">Proactive threat hunting berbasis hipotesis untuk mendeteksi pergerakan lateral tersembunyi dalam segmen jaringan internal.</div>
    </div>
    
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-left">NEV — CYBERSECURITY DIVISION &nbsp;&bull;&nbsp; UPDATED MAY 2026</div>
  <a href="/#divisions" class="back-link">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
    BACK TO DIVISIONS
  </a>
</footer>

</body>
</html>