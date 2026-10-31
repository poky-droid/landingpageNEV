@include('pages.layout.navbar')
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NEV — Divisi System Administration</title>
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

  /* SYSTEM STATUS TICKER */
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
    <div class="hero-label">DETAIL DIVISI — INFRASTRUKTUR SISTEM</div>
    <h1 class="hero-title">SYS<span>ADMIN</span></h1>
    <p class="hero-desc">
      Mengelola dan memelihara infrastruktur server, sistem operasi, serta layanan jaringan untuk memastikan sistem beroperasi optimal 24/7. Mulai dari provisioning, otomasi, hingga pemantauan performa tinggi.
    </p>
    <div class="hero-tags">
      <span class="tag">Linux</span>
      <span class="tag">Windows Server</span>
      <span class="tag">Otomasi</span>
      <span class="tag">Jaringan</span>
      <span class="tag">DevOps</span>
    </div>
  </section>

  <!-- SYSTEM STATUS TICKER -->
  <div class="ticker-wrap">
    <div class="ticker-label">SYSTEM STATUS</div>
    <div class="ticker-viewport">
      <div class="ticker-track">
        <span class="ticker-item">PROXMOX VE HYPERVISOR — CLUSTER UPTIME 99.99%</span>
        <span class="ticker-item">DOCKER SWARM SERVICES — 32/32 CONTAINERS HEALTHY</span>
        <span class="ticker-item">KUBERNETES CONTROL PLANE — ALL NODES READY</span>
        <span class="ticker-item">ZFS STORAGE POOL — SCRUB COMPLETED 0 ERRORS</span>
        <span class="ticker-item">ANSIBLE AUTOMATION PLAYBOOK — 0 FAILED TASKS</span>
        <span class="ticker-item">NGINX EDGE REVERSE PROXY — HTTP/2 200 OK</span>
        <span class="ticker-item">DATABASE REPLICATION LAG — 0.00 SECONDS NOMINAL</span>
        <span class="ticker-item">AUTOMATED OFF-SITE BACKUP — SNAPSHOT VERIFIED</span>
        <!-- duplicated for seamless loop -->
        <span class="ticker-item">PROXMOX VE HYPERVISOR — CLUSTER UPTIME 99.99%</span>
        <span class="ticker-item">DOCKER SWARM SERVICES — 32/32 CONTAINERS HEALTHY</span>
        <span class="ticker-item">KUBERNETES CONTROL PLANE — ALL NODES READY</span>
        <span class="ticker-item">ZFS STORAGE POOL — SCRUB COMPLETED 0 ERRORS</span>
        <span class="ticker-item">ANSIBLE AUTOMATION PLAYBOOK — 0 FAILED TASKS</span>
        <span class="ticker-item">NGINX EDGE REVERSE PROXY — HTTP/2 200 OK</span>
        <span class="ticker-item">DATABASE REPLICATION LAG — 0.00 SECONDS NOMINAL</span>
        <span class="ticker-item">AUTOMATED OFF-SITE BACKUP — SNAPSHOT VERIFIED</span>
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
      <div class="team-count">{{ ($totalAnggota ?? 0) > 0 ? $totalAnggota : 4 }} ANGGOTA AKTIF</div>
    </div>

    @php
      $dummyPhotos = [
        'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=360&auto=format&fit=crop&q=80',
        'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=360&auto=format&fit=crop&q=80',
        'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=360&auto=format&fit=crop&q=80',
        'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=360&auto=format&fit=crop&q=80',
      ];
      $sampleMembers = [
        ['nama' => 'M. Abdad Mubarok', 'jurusan' => 'Teknik Informatika'],
        ['nama' => 'Muhammad Abdul Rasyid', 'jurusan' => 'S1 Teknik Biomedis'],
        ['nama' => 'Bagas Wahyu Dwi Utomo', 'jurusan' => 'S1 Teknik Telekomunikasi'],
        ['nama' => 'Raditya Rizki Adi Putra', 'jurusan' => 'S1 Teknik Telekomunikasi'],
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
      <div class="stat-number">{{ ($totalAnggota ?? 0) > 0 ? $totalAnggota : 4 }}</div>
      <div class="stat-label">Anggota Aktif</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">99.9%</div>
      <div class="stat-label">Target Uptime</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">47</div>
      <div class="stat-label">Server Dikelola</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">24/7</div>
      <div class="stat-label">Monitoring Sistem</div>
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
            <strong>Penyediaan &amp; Konfigurasi Server</strong>
            Menyiapkan dan mengonfigurasi server baru, dari bare-metal hingga virtual machine (VM), termasuk hardening keamanan dan optimasi performa.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">02</span>
          <span class="resp-text">
            <strong>Manajemen Jaringan &amp; Layanan</strong>
            Mengelola infrastruktur jaringan internal, routing, firewall, dan VPN untuk konektivitas yang aman dan stabil.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">03</span>
          <span class="resp-text">
            <strong>Monitoring &amp; Deteksi Dini</strong>
            Menerapkan sistem pemantauan real-time dengan Nagios, Grafana, dan alerting otomatis untuk deteksi kendala lebih cepat.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">04</span>
          <span class="resp-text">
            <strong>Cadangan Data &amp; Pemulihan</strong>
            Strategi pencadangan berkala terstruktur dan prosedur pemulihan bencana untuk menjamin keberlanjutan operasional.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">05</span>
          <span class="resp-text">
            <strong>Otomasi &amp; Scripting</strong>
            Mengotomatiskan tugas operasional rutin menggunakan Ansible, Bash, dan Python demi efisiensi tinggi.
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
          <div class="tool-icon">INFRASTRUKTUR</div>
          <div class="tool-name">Proxmox VE</div>
          <div class="tool-desc">Platform virtualisasi enterprise untuk mengelola VM dan container berbasis KVM serta LXC.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">OTOMASI</div>
          <div class="tool-name">Ansible</div>
          <div class="tool-desc">Manajemen konfigurasi dan otomasi deployment yang konsisten serta terstruktur.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">MONITORING</div>
          <div class="tool-name">Nagios</div>
          <div class="tool-desc">Pemantauan infrastruktur menyeluruh dengan notifikasi real-time dan dashboard komprehensif.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">SISTEM OPERASI</div>
          <div class="tool-name">Linux</div>
          <div class="tool-desc">Lingkungan OS utama — Ubuntu, Debian, dan RHEL untuk berbagai beban kerja server produksi.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">CONTAINER</div>
          <div class="tool-name">Docker</div>
          <div class="tool-desc">Kontainerisasi untuk deployment aplikasi yang portabel, terisolasi, dan mudah diskalakan.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">ENTERPRISE</div>
          <div class="tool-name">Windows Server</div>
          <div class="tool-desc">Active Directory, DNS, DHCP, dan manajemen user terpusat di lingkungan Windows Server.</div>
        </div>
      </div>
    </div>
  </div>



</div>

<!-- UNIVERSAL FOOTER -->
@include('pages.footer.conten')

</body>
</html>