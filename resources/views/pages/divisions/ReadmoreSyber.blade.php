@include('pages.layout.navbar')
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NEV — Divisi Cyber Security</title>
<link rel="icon" type="image/png" href="{{ asset('images/logoatas.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=IBM+Plex+Mono:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
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
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
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

  /* THREAT TICKER */
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

  /* ACTIVE ENGAGEMENTS */
  .incident-section {
    padding: 60px 0 70px;
    border-bottom: 1px solid var(--border);
  }

  .incident-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 32px;
    flex-wrap: wrap;
    gap: 16px;
  }

  .live-indicator {
    display: flex;
    align-items: center;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    color: var(--muted);
  }

  .blink-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: var(--red);
    animation: blink 1.2s ease infinite;
    margin-right: 8px;
    box-shadow: 0 0 8px var(--red);
  }

  @keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.2; }
  }

  .incident-row {
    display: grid;
    grid-template-columns: 60px 1fr;
    gap: 24px;
    padding: 24px 0;
    border-bottom: 1px solid var(--border);
    align-items: baseline;
  }

  .incident-row:last-child { border-bottom: none; }

  .incident-idx {
    font-size: 24px;
    font-weight: 800;
    color: var(--red);
    opacity: 0.8;
  }

  .incident-name {
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 6px;
  }

  .incident-desc {
    font-size: 13px;
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
    <div class="hero-label">DETAIL DIVISI — KEAMANAN SIBER</div>
    <h1 class="hero-title">CYBER<span>SEC</span></h1>
    <p class="hero-desc">
      Melindungi aset digital, mendeteksi potensi ancaman siber, dan merespons insiden secara real-time. Mulai dari penetration testing, threat intelligence, hingga SIEM, tim ini menjadi garda pertahanan utama keamanan organisasi.
    </p>
    <div class="hero-tags">
      <span class="tag">Penetration Testing</span>
      <span class="tag">SIEM</span>
      <span class="tag">Threat Intelligence</span>
      <span class="tag">Incident Response</span>
      <span class="tag">SOC</span>
      <span class="tag">Forensics</span>
    </div>
  </section>

  <!-- THREAT TICKER -->
  <div class="ticker-wrap">
    <div class="ticker-label">LIVE THREATS</div>
    <div class="ticker-viewport">
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
  </div>

  <!-- TEAM SECTION (PERSIS DENGAN REFERENSI DESAIN) -->
  <section class="team-section">
    <div class="team-header">
      <div>
        <div class="section-label">TALENTA DIVISI</div>
        <h2 class="section-title">Anggota Tim</h2>
      </div>
      <div class="team-count">{{ ($totalAnggota ?? 0) > 0 ? $totalAnggota : 8 }} ANGGOTA AKTIF</div>
    </div>

    @php
      $cyberMembers = [
        [
          'nama' => 'Desi Yuniar Nur Rahmah',
          'jurusan' => 'S1 Teknik Telekomunikasi',
          'foto' => null,
        ],
        [
          'nama' => 'Dwi Okta Suryaningrum',
          'jurusan' => 'S1 Teknik Informatika',
          'foto' => null,
        ],
        [
          'nama' => 'Anissa Fauzia Isyanti',
          'jurusan' => 'S1 Teknik Informatika',
          'foto' => null,
        ],
        [
          'nama' => 'Naufal Auriga Heryanto',
          'jurusan' => 'S1 Informatika',
          'foto' => null,
        ],
        [
          'nama' => 'Masyul Khofif',
          'jurusan' => 'S1 Teknik Telekomunikasi',
          'foto' => null,
        ],
        [
          'nama' => 'Vita Amellia Putri',
          'jurusan' => 'S1 Teknik Telekomunikasi',
          'foto' => null,
        ],
        [
          'nama' => 'Rio Adi Setiono',
          'jurusan' => 'S1 Teknik Telekomunikasi',
          'foto' => null,
        ],
        [
          'nama' => 'Gilang Hukma R.',
          'jurusan' => 'S1 Teknik Telekomunikasi',
          'foto' => null,
        ],
      ];

      $formatMemberName = function($name) {
        $name = preg_replace('/([A-Za-z]\.)([A-Za-z])/', '$1 $2', $name);
        return ucwords(strtolower(trim($name)));
      };

      // Sinkronkan dengan foto dari database jika tersedia
      if (isset($anggota) && $anggota->count() > 0) {
        $dbMap = [];
        foreach ($anggota as $a) {
          $dbMap[strtolower(trim($a->nama))] = $a;
        }
        foreach ($cyberMembers as &$cm) {
          $key = strtolower(trim($cm['nama']));
          if (isset($dbMap[$key]) && !empty($dbMap[$key]->foto)) {
            $cm['foto'] = $dbMap[$key]->foto;
          }
        }
        unset($cm);
      }
    @endphp

    <div class="team-grid">
      @foreach ($cyberMembers as $item)
        <div class="member-card">
          <div class="member-circle-wrap">
            @if (!empty($item['foto']))
              <img src="{{ Storage::disk('s3')->url($item['foto']) }}"
                   alt="{{ $item['nama'] }}"
                   class="member-avatar-img"
                   onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
              <div class="member-initials-fallback" style="display: none;">
                <span class="member-initials-text">{{ strtoupper(substr($item['nama'], 0, 2)) }}<span class="dot">.</span></span>
              </div>
            @else
              <div class="member-initials-fallback">
                <span class="member-initials-text">{{ strtoupper(substr($item['nama'], 0, 2)) }}<span class="dot">.</span></span>
              </div>
            @endif
          </div>

          <div class="member-name">{{ $formatMemberName($item['nama']) }}</div>
          <div class="member-role">{{ $item['jurusan'] }}</div>
          <span class="member-status">ACTIVE</span>
        </div>
      @endforeach
    </div>
  </section>

  <!-- STATS -->
  <div class="stats">
    <div class="stat-item">
      <div class="stat-number">{{ ($totalAnggota ?? 0) > 0 ? $totalAnggota : 8 }}</div>
      <div class="stat-label">Anggota Aktif</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">24/7</div>
      <div class="stat-label">Operasional SOC</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">1.2K+</div>
      <div class="stat-label">Ancaman Diblokir / Bln</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">&lt;4m</div>
      <div class="stat-label">Rata-rata Waktu Respons</div>
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
            <strong>Penetration Testing &amp; Red Teaming</strong>
            Simulasi serangan siber terkontrol terhadap sistem, jaringan, dan aplikasi web untuk mengidentifikasi celah keamanan sebelum dieksploitasi pihak luar.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">02</span>
          <span class="resp-text">
            <strong>Security Operations Center (SOC)</strong>
            Pemantauan ancaman 24/7 melalui korelasi log SIEM, deteksi anomali perilaku sistem, dan koordinasi respons insiden cepat.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">03</span>
          <span class="resp-text">
            <strong>Threat Intelligence</strong>
            Mengumpulkan, menganalisis, dan menyebarkan data intelijen ancaman siber terbaru untuk memperkuat postur pertahanan keamanan proaktif.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">04</span>
          <span class="resp-text">
            <strong>Manajemen Kerentanan (Vulnerability)</strong>
            Identifikasi berkelanjutan, penilaian risiko berbasis konteks (CVE/CVSS), dan audit patching keamanan berkala.
          </span>
        </li>
        <li class="resp-item">
          <span class="resp-num">05</span>
          <span class="resp-text">
            <strong>Forensik Digital &amp; Respons Insiden</strong>
            Investigasi mendalam pasca-insiden, preservasi barang bukti digital, analisis root-cause, dan penyusunan laporan forensik komprehensif.
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
          <div class="tool-icon">PENTEST</div>
          <div class="tool-name">Metasploit</div>
          <div class="tool-desc">Framework penetrasi standar industri untuk audit eksploitasi celah keamanan dan pembuatan laporan mitigasi.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">SIEM</div>
          <div class="tool-name">Wazuh / Splunk</div>
          <div class="tool-desc">Platform SIEM enterprise untuk agregasi log, korelasi aturan deteksi ancaman, dan respons otomatis.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">REKOGNISI</div>
          <div class="tool-name">Nmap / Shodan</div>
          <div class="tool-desc">Pemetaan attack surface jaringan, pemindaian port terbuka, dan audit eksposur aset digital.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">FORENSIK</div>
          <div class="tool-name">Autopsy / Volatility</div>
          <div class="tool-desc">Perangkat forensik digital untuk analisis memory dump, artefak sistem, dan rekonstruksi insiden siber.</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">MALWARE</div>
          <div class="tool-name">Cuckoo Sandbox</div>
          <div class="tool-desc">Lingkungan isolasi otomatis untuk detonasi sampel file mencurigakan dan ekstraksi Indicator of Compromise (IoC).</div>
        </div>
        <div class="tool-card">
          <div class="tool-icon">VULN SCAN</div>
          <div class="tool-name">Nessus / OpenVAS</div>
          <div class="tool-desc">Pemindai kerentanan dengan basis data CVE mutakhir untuk audit keamanan berkala dan mitigasi prioritas.</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ACTIVE OPERATIONS -->
  <section class="incident-section">
    <div class="incident-header">
      <div>
        <div class="section-label">OPERASI AKTIF</div>
        <h2 class="section-title">Aktivitas &amp; Riset Terkini</h2>
      </div>
      <div class="live-indicator">
        <span class="blink-dot"></span>STATUS LIVE
      </div>
    </div>
    <div class="incident-row">
      <div class="incident-idx">01</div>
      <div>
        <div class="incident-name">Simulasi Red Teaming — Infrastruktur Internal</div>
        <div class="incident-desc">Pengujian ketahanan pertahanan tim Blue Team melalui simulasi serangan siber terencana pada server internal laboratorium.</div>
      </div>
    </div>
    <div class="incident-row">
      <div class="incident-idx">02</div>
      <div>
        <div class="incident-name">Audit Patch Kerentanan — Web Application Stack</div>
        <div class="incident-desc">Audit dan remediasi kerentanan kritis pada stack aplikasi web berdasarkan pembaruan buletin keamanan terbaru.</div>
      </div>
    </div>
    <div class="incident-row">
      <div class="incident-idx">03</div>
      <div>
        <div class="incident-name">Implementasi Arsitektur Zero-Trust — Tahap 2</div>
        <div class="incident-desc">Penerapan kebijakan verifikasi identitas berlapis, micro-segmentation jaringan, dan prinsip hak akses minimal (least-privilege).</div>
      </div>
    </div>
    <div class="incident-row">
      <div class="incident-idx">04</div>
      <div>
        <div class="incident-name">Proactive Threat Hunting — Indikator Pergerakan Lateral</div>
        <div class="incident-desc">Pencarian ancaman tersembunyi secara proaktif menggunakan analisis log perilaku untuk mendeteksi potensi penyusup di dalam jaringan.</div>
      </div>
    </div>
  </section>



</div>

<!-- UNIVERSAL FOOTER -->
@include('pages.footer.conten')

</body>
</html>