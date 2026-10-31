@include('pages.layout.navbar')
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NEV — Divisi Networking</title>
<link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  :root {
    --red: #FF0033;
    --red-dim: rgba(255, 0, 51, 0.15);
    --bg: #040406;
    --bg2: #090a0f;
    --bg3: #11131a;
    --text: #f0f0f0;
    --muted: #8A8A8A;
    --border: rgba(255, 255, 255, 0.08);
  }

  html { scroll-behavior: smooth; }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    overflow-x: hidden;
  }

  /* NOISE / CYBER GRID OVERLAY */
  .cyber-grid-overlay {
    position: fixed;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255, 0, 51, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 0, 51, 0.035) 1px, transparent 1px);
    background-size: 48px 48px;
    pointer-events: none;
    z-index: 0;
  }

  .page-container {
    position: relative;
    z-index: 1;
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 16px;
    box-sizing: border-box;
  }

  /* HERO */
  .hero {
    padding: 120px 0 60px;
    position: relative;
    border-bottom: 1px solid var(--border);
    overflow: hidden;
  }

  /* Laser Scanning Line Animation - Crisp, thin & subtle */
  .hero::after {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent 0%, rgba(255, 0, 51, 0.25) 20%, #FF0033 50%, rgba(255, 0, 51, 0.25) 80%, transparent 100%);
    box-shadow: none;
    animation: scanline 4.5s linear infinite;
    opacity: 0.4;
    pointer-events: none;
    z-index: 5;
  }

  @keyframes scanline {
    0%   { top: 0%; opacity: 0; }
    8%   { opacity: 0.4; }
    92%  { opacity: 0.4; }
    100% { top: 100%; opacity: 0; }
  }

  .hero-label {
    font-size: 11px;
    font-weight: 600;
    color: var(--red);
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 20px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
  }

  .hero-label::before {
    content: '';
    width: 24px;
    height: 1px;
    background: var(--red);
  }

  .hero-title {
    font-size: clamp(48px, 9vw, 100px);
    font-weight: 900;
    line-height: 0.98;
    letter-spacing: -0.04em;
    color: var(--text);
    margin-bottom: 28px;
    text-transform: uppercase;
  }

  .hero-title span { color: var(--red); text-shadow: 0 0 30px rgba(255, 0, 51, 0.4); }

  .hero-desc {
    max-width: 580px;
    font-size: 15px;
    color: var(--muted);
    line-height: 1.8;
  }

  .hero-tags {
    display: flex;
    gap: 12px;
    margin-top: 36px;
    flex-wrap: wrap;
  }

  .tag {
    border: 1px solid rgba(255, 255, 255, 0.1);
    background: transparent;
    padding: 6px 14px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: #7a7a7a;
    letter-spacing: 0.5px;
    border-radius: 0;
    transition: all 0.2s ease;
    user-select: none;
    display: inline-flex;
    align-items: center;
  }

  .tag:hover {
    border-color: var(--red);
    color: #ffffff;
    background: rgba(255, 0, 51, 0.06);
  }

  /* NETWORK TELEMETRY TICKER */
  .ticker-wrap {
    border-top: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    background: #090a0f;
    display: flex;
    align-items: center;
    overflow: hidden;
    height: 40px;
    position: relative;
    z-index: 5;
  }

  .ticker-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9.5px;
    font-weight: 600;
    color: #fff;
    background: #e02020;
    padding: 0 18px;
    height: 100%;
    display: flex;
    align-items: center;
    letter-spacing: 2px;
    white-space: nowrap;
    flex-shrink: 0;
    position: relative;
    z-index: 10;
  }

  .ticker-viewport {
    flex: 1;
    overflow: hidden;
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
  }

  .ticker-track {
    display: flex;
    align-items: center;
    gap: 50px;
    width: max-content;
    animation: ticker 28s linear infinite;
    white-space: nowrap;
    will-change: transform;
    padding-left: 20px;
  }

  .ticker-wrap:hover .ticker-track {
    animation-play-state: paused;
  }

  .ticker-item {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: #777777;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
  }

  .ticker-item::before {
    content: '▸';
    color: #e02020;
    font-size: 9px;
    line-height: 1;
  }

  @keyframes ticker {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
  }

  /* TEAM SECTION */
  .team-section {
    padding: 60px 0 70px;
    border-bottom: 1px solid var(--border);
  }

  .team-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 40px;
    flex-wrap: wrap;
    gap: 16px;
  }

  .section-label {
    font-size: 11px;
    font-weight: 600;
    color: var(--red);
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-bottom: 8px;
  }

  .section-title {
    font-size: clamp(1.8rem, 3.2vw, 2.5rem);
    font-weight: 800;
    letter-spacing: -0.03em;
    color: #fff;
    margin: 0;
  }

  .team-count {
    font-size: 11px;
    letter-spacing: 2px;
    color: var(--muted);
    font-weight: 600;
    text-transform: uppercase;
  }

  .team-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    background: transparent;
    border-top: 1px solid var(--border);
    border-left: 1px solid var(--border);
    border-radius: 4px;
    overflow: hidden;
  }

  .member-card {
    background: #06070a;
    border-right: 1px solid var(--border);
    border-bottom: 1px solid var(--border);
    padding: 36px 28px;
    transition: background 0.25s ease;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: relative;
    overflow: hidden;
    cursor: default;
    height: 100%;
  }

  /* RED ACCENT LINE ON LEFT BORDER UPON HOVER */
  .member-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 2.5px;
    height: 0;
    background: #FF0033;
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.7);
    transition: height 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 5;
  }

  .member-card:hover {
    background: #0d0e14;
  }

  .member-card:hover::before {
    height: 100%;
  }

  .member-circle-wrap {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    background: #ffffff;
    overflow: hidden;
    margin: 0 0 24px;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    position: relative;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    flex-shrink: 0;
  }

  .member-avatar-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    display: block;
    transition: transform 0.35s ease;
  }

  .member-card:hover .member-avatar-img {
    transform: scale(1.08);
  }

  .member-initials-fallback {
    width: 100%;
    height: 100%;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    user-select: none;
    transition: transform 0.35s ease;
  }

  .member-card:hover .member-initials-fallback {
    transform: scale(1.06);
  }

  .member-initials-text {
    font-family: 'Inter', sans-serif;
    font-size: 38px;
    font-weight: 800;
    color: #0b0c10;
    letter-spacing: -0.04em;
    line-height: 1;
    display: flex;
    align-items: baseline;
  }

  .member-initials-text .dot {
    color: #FF0033;
    font-size: 42px;
    line-height: 0;
    margin-left: 2px;
  }

  .member-name {
    font-size: 1.05rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 6px;
    line-height: 1.3;
    letter-spacing: -0.01em;
    text-transform: capitalize;
  }

  .member-role {
    font-size: 0.82rem;
    color: var(--muted);
    margin-bottom: 18px;
    line-height: 1.4;
  }

  .member-status {
    display: inline-block;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1.5px;
    color: #00FF66;
    border: 1px solid rgba(0, 255, 102, 0.35);
    background: rgba(0, 255, 102, 0.04);
    padding: 4px 10px;
    border-radius: 4px;
    text-transform: uppercase;
    margin-top: auto;
  }

  /* STATS ROW */
  .stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    border-top: 1px solid var(--red);
    border-bottom: 1px solid var(--border);
  }

  .stat-item {
    padding: 40px 24px;
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
    transition: width 0.35s ease;
  }

  .stat-item:hover::after { width: 100%; }

  .stat-number {
    font-size: clamp(1.65rem, 2.4vw, 2.15rem);
    font-weight: 700;
    color: var(--red);
    line-height: 1.2;
    margin-bottom: 8px;
    letter-spacing: -0.4px;
  }

  .stat-label {
    font-size: 11px;
    color: var(--muted);
    letter-spacing: 1.5px;
    text-transform: uppercase;
    font-weight: 500;
  }

  /* CONTENT GRID */
  .content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border-bottom: 1px solid var(--border);
  }

  .content-left {
    padding: 60px 36px 60px 0;
    border-right: 1px solid var(--border);
  }

  .content-right {
    padding: 60px 0 60px 36px;
  }

  .resp-list {
    list-style: none;
    display: flex;
    flex-direction: column;
  }

  .resp-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 22px 0;
    border-bottom: 1px solid var(--border);
  }

  .resp-item:last-child { border-bottom: none; }

  .resp-num {
    font-size: 12px;
    font-weight: 700;
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
    border-radius: 4px;
    overflow: hidden;
  }

  .tool-card {
    background: #06070a;
    padding: 24px;
    transition: background 0.2s;
  }

  .tool-card:hover { background: #0e0f16; }

  .tool-icon {
    font-size: 10px;
    font-weight: 700;
    color: var(--red);
    letter-spacing: 2px;
    margin-bottom: 10px;
  }

  .tool-name {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 6px;
    color: #fff;
  }

  .tool-desc {
    font-size: 12px;
    color: var(--muted);
    line-height: 1.6;
  }

  /* TOP NAV BREADCRUMB */
  .hero-top-nav {
    margin-bottom: 24px;
    display: flex;
    align-items: center;
  }

  .back-nav-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 999px;
    color: #a0a5b5;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    text-decoration: none;
    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
  }

  .back-nav-btn:hover {
    color: #ffffff;
    background: rgba(255, 0, 51, 0.12);
    border-color: rgba(255, 0, 51, 0.45);
    transform: translateX(-3px);
  }

  .back-nav-btn svg {
    width: 14px;
    height: 14px;
    transition: transform 0.2s ease;
  }

  .back-nav-btn:hover svg {
    transform: translateX(-3px);
    stroke: var(--red);
  }

  /* FOOTER */
  .division-footer {
    border-top: 1px solid var(--border);
    padding: 36px clamp(24px, 5vw, 60px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 16px;
  }

  .footer-left {
    font-size: 11px;
    color: var(--muted);
    letter-spacing: 1.5px;
    text-transform: uppercase;
  }

  .footer-top-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--muted);
    text-decoration: none;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    transition: color 0.2s ease;
  }

  .footer-top-btn:hover {
    color: #ffffff;
  }

  /* RESPONSIVE */
  @media (max-width: 992px) {
    .content-grid { grid-template-columns: 1fr; }
    .content-left { border-right: none; border-bottom: 1px solid var(--border); }
  }

  @media (max-width: 768px) {
    .hero {
      padding: 90px 0 40px;
    }
    .hero-title {
      font-size: clamp(38px, 9vw, 64px);
    }
    .hero-desc {
      font-size: 0.92rem;
      line-height: 1.65;
    }
    .section-title {
      font-size: clamp(1.45rem, 5vw, 1.95rem);
    }
    .team-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 16px;
    }
    .member-name {
      font-size: 1rem;
    }
    .member-role {
      font-size: 0.8rem;
    }
    .tools-grid {
      grid-template-columns: 1fr;
      gap: 12px;
    }
    .tool-name {
      font-size: 15px;
    }
    .tool-desc {
      font-size: 12px;
    }
    .content-left, .content-right {
      padding: 36px 0;
    }
    .stats {
      grid-template-columns: repeat(2, 1fr);
    }
    .stat-item {
      padding: 24px 16px;
    }
    .stat-number, .stat-num {
      font-size: clamp(1.45rem, 5vw, 1.85rem);
    }
    .team-section {
      padding: 40px 0 50px;
    }
    .ticker-label {
      padding: 0 14px;
      font-size: 9px;
      letter-spacing: 1px;
    }
  }

  @media (max-width: 480px) {
    .team-grid {
      grid-template-columns: 1fr;
    }
    .stats {
      grid-template-columns: 1fr;
    }
    .stat-item {
      border-right: none;
      border-bottom: 1px solid var(--border);
    }
    .hero-tags {
      gap: 6px;
    }
    .tag {
      font-size: 10px;
      padding: 4px 10px;
    }
    .hero-top-nav {
      margin-bottom: 24px;
    }
    .back-nav-btn {
      font-size: 10px;
      padding: 7px 14px;
    }
  }
</style>
</head>
<body>

<div class="cyber-grid-overlay"></div>

<div class="page-container">

  <!-- HERO -->
  <section class="hero">
    <div class="hero-top-nav">
      <a href="{{ url('/#divisions') }}" class="back-nav-btn">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
        <span>KEMBALI KE DIVISI</span>
      </a>
    </div>
    <div class="hero-label">DETAIL DIVISI — KONEKTIVITAS JARINGAN</div>
    <h1 class="hero-title">NET<span>WORK</span></h1>
    <p class="hero-desc">
      Merancang, mengimplementasikan, dan mengamankan infrastruktur jaringan skala enterprise. Mulai dari arsitektur LAN/WAN hingga SDN dan keamanan perimeter, tim ini menjaga konektivitas tetap cepat, andal, dan terlindungi.
    </p>
    <div class="hero-tags">
      <span class="tag">Cisco</span>
      <span class="tag">Routing &amp; Switching</span>
      <span class="tag">Firewall</span>
      <span class="tag">VPN</span>
      <span class="tag">SDN</span>
      <span class="tag">BGP / OSPF</span>
    </div>
  </section>

  <!-- NETWORK TELEMETRY TICKER -->
  <div class="ticker-wrap">
    <div class="ticker-label">LIVE TELEMETRY</div>
    <div class="ticker-viewport">
      <div class="ticker-track">
        <span class="ticker-item">BGP ROUTING CONVERGED — AS64512 FULL TABLES</span>
        <span class="ticker-item">CORE SWITCH LATENCY — 0.38MS NOMINAL</span>
        <span class="ticker-item">OSPF ADJACENCY FULL — AREA 0.0.0.0 SYNCHRONIZED</span>
        <span class="ticker-item">PACKET LOSS RATE — 0.00% ZERO DROPS</span>
        <span class="ticker-item">100G TRUNK INTERFACE — 802.1Q ACTIVE 98.4% CAPACITY</span>
        <span class="ticker-item">SD-WAN TUNNEL MESH — JITTER &lt; 1.1MS OPTIMAL</span>
        <span class="ticker-item">MPLS L3VPN FORWARDING — VRF-CORP REACHABLE</span>
        <span class="ticker-item">QOS PRIORITY QUEUE — VOICE &amp; VIDEO TRAFFIC VERIFIED</span>
        <!-- duplicated for seamless loop -->
        <span class="ticker-item">BGP ROUTING CONVERGED — AS64512 FULL TABLES</span>
        <span class="ticker-item">CORE SWITCH LATENCY — 0.38MS NOMINAL</span>
        <span class="ticker-item">OSPF ADJACENCY FULL — AREA 0.0.0.0 SYNCHRONIZED</span>
        <span class="ticker-item">PACKET LOSS RATE — 0.00% ZERO DROPS</span>
        <span class="ticker-item">100G TRUNK INTERFACE — 802.1Q ACTIVE 98.4% CAPACITY</span>
        <span class="ticker-item">SD-WAN TUNNEL MESH — JITTER &lt; 1.1MS OPTIMAL</span>
        <span class="ticker-item">MPLS L3VPN FORWARDING — VRF-CORP REACHABLE</span>
        <span class="ticker-item">QOS PRIORITY QUEUE — VOICE &amp; VIDEO TRAFFIC VERIFIED</span>
      </div>
    </div>
  </div>

  <!-- TEAM SECTION (PERSIS DENGAN REFERENSI DESAIN) -->
  <section class="team-section">
    <div class="team-header">
      <div>
        <div class="section-label">TALENTA DIVISI</div>
        <h2 class="section-title">Anggota Tim</h2>
      </div>
      <div class="team-count">{{ ($totalAnggota ?? 0) > 0 ? $totalAnggota : 10 }} ANGGOTA AKTIF</div>
    </div>

    @php
      $sampleMembers = [
        ['nama' => 'Bagas Wahyu Dwi Utomo', 'jurusan' => 'S1 Teknik Telekomunikasi'],
        ['nama' => 'Raditya Rizki Adi Putra', 'jurusan' => 'S1 Teknik Telekomunikasi'],
        ['nama' => 'M. Abdad Mubarok', 'jurusan' => 'Teknik Informatika'],
        ['nama' => 'Muhammad Abdul Rasyid', 'jurusan' => 'S1 Teknik Biomedis'],
        ['nama' => 'Fadhil Nur Hidayat', 'jurusan' => 'S1 Teknik Telekomunikasi'],
        ['nama' => 'Arya Pratama Wijaya', 'jurusan' => 'S1 Teknik Informatika'],
        ['nama' => 'Dimas Wahyu Ramadhan', 'jurusan' => 'S1 Teknik Elektro'],
        ['nama' => 'Farhan Dwi Kurniawan', 'jurusan' => 'S1 Teknik Telekomunikasi'],
        ['nama' => 'Ilham Maulana Putra', 'jurusan' => 'S1 Rekayasa Perangkat Lunak'],
        ['nama' => 'Naufal Rizky Ramadhan', 'jurusan' => 'S1 Sistem Informasi'],
      ];

      $formatMemberName = function($name) {
        $name = preg_replace('/([A-Za-z]\.)([A-Za-z])/', '$1 $2', $name);
        return ucwords(strtolower(trim($name)));
      };
    @endphp

    <div class="team-grid">
      @if (isset($anggota) && $anggota->count() > 0)
        @foreach ($anggota as $item)
          <div class="member-card">
            <div class="member-circle-wrap">
              @if ($item->foto)
                <img src="{{ Storage::disk('s3')->url($item->foto) }}"
                     alt="{{ $item->nama }}"
                     class="member-avatar-img"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div class="member-initials-fallback" style="display: none;">
                  <span class="member-initials-text">{{ strtoupper(substr($item->nama, 0, 2)) }}<span class="dot">.</span></span>
                </div>
              @else
                <div class="member-initials-fallback">
                  <span class="member-initials-text">{{ strtoupper(substr($item->nama, 0, 2)) }}<span class="dot">.</span></span>
                </div>
              @endif
            </div>

            <div class="member-name">{{ $formatMemberName($item->nama) }}</div>
            <div class="member-role">{{ $item->jurusan }}</div>
            <span class="member-status">ACTIVE</span>
          </div>
        @endforeach
      @else
        @foreach ($sampleMembers as $sm)
          <div class="member-card">
            <div class="member-circle-wrap">
              <div class="member-initials-fallback">
                <span class="member-initials-text">{{ strtoupper(substr($sm['nama'], 0, 2)) }}<span class="dot">.</span></span>
              </div>
            </div>

            <div class="member-name">{{ $formatMemberName($sm['nama']) }}</div>
            <div class="member-role">{{ $sm['jurusan'] }}</div>
            <span class="member-status">ACTIVE</span>
          </div>
        @endforeach
      @endif
    </div>
  </section>

  <!-- STATS -->
  <div class="stats">
    <div class="stat-item">
      <div class="stat-number">{{ ($totalAnggota ?? 0) > 0 ? $totalAnggota : 10 }}</div>
      <div class="stat-label">Anggota Aktif</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">10G</div>
      <div class="stat-label">Bandwidth Inti</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">128</div>
      <div class="stat-label">Perangkat Jaringan</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">24/7</div>
      <div class="stat-label">Monitoring Aktif</div>
    </div>
  </div>

  <!-- CONTENT GRID -->
  <div class="content-grid">
    <!-- RESPONSIBILITIES -->
    <div class="content-left">
      <div class="section-label">TANGGUNG JAWAB &amp; PERAN</div>
      <h2 class="section-title">Fokus Utama Divisi</h2>
      <ul class="resp-list">
        <li class="resp-item">
          <span class="resp-num">01</span>
          <span class="resp-text">
            <strong>Desain &amp; Arsitektur Jaringan</strong>
            Merancang topologi jaringan LAN, WAN, dan hybrid cloud yang terukur, redundan, dan sesuai kebutuhan industri.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">02</span>
          <span class="resp-text">
            <strong>Routing &amp; Switching</strong>
            Mengonfigurasi dan mengoptimasi protokol routing dinamis (BGP, OSPF, EIGRP), manajemen VLAN, dan inter-switch trunking.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">03</span>
          <span class="resp-text">
            <strong>Keamanan Jaringan &amp; Perimeter</strong>
            Menerapkan firewall, IDS/IPS, segmentasi jaringan, dan arsitektur zero-trust untuk perlindungan komprehensif.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">04</span>
          <span class="resp-text">
            <strong>VPN &amp; Akses Jarak Jauh</strong>
            Membangun dan mengelola koneksi site-to-site serta VPN akses jarak jauh dengan IPSec, WireGuard, dan terowongan SSL/TLS.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">05</span>
          <span class="resp-text">
            <strong>Pemantauan Lalu Lintas &amp; Optimasi</strong>
            Analisis traffic real-time, troubleshooting mendalam, dan optimasi performa throughput dengan NetFlow, SNMP, dan Wireshark.
          </span>
        </li>
      </ul>
    </div>

    <!-- TOOLS & TECH STACK -->
    <div class="content-right">
      <div class="section-label">ALAT &amp; TEKNOLOGI</div>
      <h2 class="section-title">Tech Stack Unggulan</h2>
      <div class="tools-grid">
        <div class="tool-card">
          <div class="tool-icon">ROUTING</div>
          <div class="tool-name">Cisco IOS</div>
          <div class="tool-desc">Platform routing dan switching enterprise untuk konfigurasi jaringan berskala besar dan berkeandalan tinggi.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">FIREWALL</div>
          <div class="tool-name">pfSense</div>
          <div class="tool-desc">Router dan firewall open-source berbasis FreeBSD dengan fitur keamanan enterprise yang sangat fleksibel.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">MONITORING</div>
          <div class="tool-name">Zabbix / PRTG</div>
          <div class="tool-desc">Pemantauan jaringan menyeluruh dengan visualisasi traffic real-time, peringatan instan, dan analisis histori.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">SDN</div>
          <div class="tool-name">OpenDaylight</div>
          <div class="tool-desc">Controller Software-Defined Networking untuk otomasi dan orkestrasi jaringan terpusat modern.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">VPN</div>
          <div class="tool-name">WireGuard</div>
          <div class="tool-desc">Protokol VPN modern dengan kriptografi canggih, performa kecepatan tinggi, dan konfigurasi yang efisien.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">ANALISIS</div>
          <div class="tool-name">Wireshark</div>
          <div class="tool-desc">Packet analyzer untuk inspeksi mendalam, troubleshooting protokol, dan analisis forensik lalu lintas data.</div>
        </div>
      </div>
    </div>
  </div>



</div>

<!-- UNIVERSAL FOOTER -->
@include('pages.footer.conten')

</body>
</html>