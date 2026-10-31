<div class="wrap">
  <div class="top-row">
    <!-- JUDUL SECTION: DIVISI RISET (PUTIH & AKSEN MERAH SENADA DENGAN APA ITU NEV) -->
    <div class="division-header-wrap">
      <div class="division-tag-pill">FOKUS RISET</div>
      <h2 class="division-title">Divisi <span class="title-accent">Riset</span></h2>
    </div>

    <!-- KONTEN UTAMA: HEADLINE & STATS SEJAJAR LURUS KESAMPING -->
    <div class="headline-stats-row">
      <div class="headline-col">
        <h3 class="headline">Eksplorasi 3 Bidang Utama <span>Teknologi Digital</span></h3>
        <p class="top-desc">Tiga unit riset spesialis yang saling terhubung dalam menjaga, mengkoneksikan, dan mengelola infrastruktur modern.</p>
      </div>

      <div class="stats-row">
        <div class="stat-box"><div class="stat-num">3</div><div class="stat-lbl">Divisi Riset</div></div>
        <div class="divider"></div>
        <div class="stat-box"><div class="stat-num">{{ max(20, (int)($totalAnggota ?? 0)) }}+</div><div class="stat-lbl">Anggota Aktif</div></div>
        <div class="divider"></div>
        <div class="stat-box"><div class="stat-num">100%</div><div class="stat-lbl">Kolaboratif</div></div>
      </div>
    </div>
  </div>

  <hr class="line">

  <div class="division-list" id="divList">

    <!-- DIVISI 1 -->
    <div class="division-item" data-index="0">
      <span class="num">01</span>
      <h1>Sysadmin</h1>
      <div class="tags">
        <span class="tag">Linux</span>
        <span class="tag">Windows Server</span>
        <span class="tag">Automation</span>
      </div>
      <span class="arrow">→</span>
    </div>
    <div class="detail-panel" id="detail-0">
      <div class="detail-inner">
        <p class="detail-desc">Mengelola dan memelihara infrastruktur server, sistem operasi, serta layanan jaringan agar seluruh ekosistem komputasi berjalan lancar 24/7. Mulai dari konfigurasi, otomatisasi, hingga pemantauan performa dan ketersediaan sistem.</p>
        <div class="detail-meta">
          <div class="meta-item"><span class="meta-label">Bidang Fokus</span><span class="meta-value">Server & Infrastruktur Cloud</span></div>
          <div class="meta-item"><span class="meta-label">Teknologi Utama</span><span class="meta-value">Ansible, Nagios, Proxmox</span></div>
          <div class="meta-item"><span class="meta-label">Total Anggota</span><span class="meta-value">{{ ($totalSysadminMembers ?? 0) >= 4 ? $totalSysadminMembers : 4 }} Anggota</span></div>
        </div>
      </div>
    </div>
    <div class="see-more-wrap" id="see-more-0">
      <a href="/Sysadmin" class="see-more-btn">Lihat Detail Divisi <span>↗</span></a>
    </div>

    <!-- DIVISI 2 -->
    <div class="division-item" data-index="1">
      <span class="num">02</span>
      <h1>Cyber Security</h1>
      <div class="tags">
        <span class="tag">Penetration Testing</span>
        <span class="tag">OSINT</span>
        <span class="tag">Forensics</span>
      </div>
      <span class="arrow">→</span>
    </div>
    <div class="detail-panel" id="detail-1">
      <div class="detail-inner">
        <p class="detail-desc">Melindungi aset dan infrastruktur digital dari ancaman siber melalui analisis kerentanan, ethical hacking, audit keamanan berkala, serta penanganan insiden untuk menjaga integritas dan ketahanan sistem.</p>
        <div class="detail-meta">
          <div class="meta-item"><span class="meta-label">Bidang Fokus</span><span class="meta-value">Keamanan Ofensif & Defensif</span></div>
          <div class="meta-item"><span class="meta-label">Teknologi Utama</span><span class="meta-value">Burp Suite, Metasploit, Wireshark</span></div>
          <div class="meta-item"><span class="meta-label">Total Anggota</span><span class="meta-value">{{ ($totalCybersecurityMembers ?? 0) >= 8 ? $totalCybersecurityMembers : 8 }} Anggota</span></div>
        </div>
      </div>
    </div>
    <div class="see-more-wrap" id="see-more-1">
      <a href="/Cyber-Security" class="see-more-btn">Lihat Detail Divisi <span>↗</span></a>
    </div>

    <!-- DIVISI 3 -->
    <div class="division-item" data-index="2">
      <span class="num">03</span>
      <h1>Network</h1>
      <div class="tags">
        <span class="tag">Routing</span>
        <span class="tag">Firewall</span>
        <span class="tag">VPN</span>
      </div>
      <span class="arrow">→</span>
    </div>
    <div class="detail-panel" id="detail-2">
      <div class="detail-inner">
        <p class="detail-desc">Merancang dan mengoptimalkan arsitektur jaringan yang andal, berkecepatan tinggi, dan aman. Mulai dari konfigurasi router & switch enterprise hingga penerapan protokol keamanan jaringan modern.</p>
        <div class="detail-meta">
          <div class="meta-item"><span class="meta-label">Bidang Fokus</span><span class="meta-value">Arsitektur & Konektivitas Jaringan</span></div>
          <div class="meta-item"><span class="meta-label">Teknologi Utama</span><span class="meta-value">Cisco, pfSense, GNS3</span></div>
          <div class="meta-item"><span class="meta-label">Total Anggota</span><span class="meta-value">{{ ($totalNetworkingMembers ?? 0) >= 10 ? $totalNetworkingMembers : 10 }} Anggota</span></div>
        </div>
      </div>
    </div>
    <div class="see-more-wrap" id="see-more-2">
      <a href="/Network" class="see-more-btn">Lihat Detail Divisi <span>↗</span></a>
    </div>
</br>


  </div>

  <!-- <div class="bottom-row">
    <p class="cta-text">Interested in joining? <span>We're always open to new talent.</span></p>
    <button class="join-btn">Join Us</button>
  </div> -->
</div>

<script>
  const items = document.querySelectorAll('.division-item');
  items.forEach(item => {
    item.addEventListener('click', () => {
      const idx = item.dataset.index;
      const panel = document.getElementById('detail-' + idx);
      const seeMore = document.getElementById('see-more-' + idx);
      const isOpen = panel.classList.contains('open');

      document.querySelectorAll('.detail-panel').forEach(p => p.classList.remove('open'));
      document.querySelectorAll('.see-more-wrap').forEach(s => s.classList.remove('open'));
      document.querySelectorAll('.division-item').forEach(i => i.classList.remove('active'));

      if (!isOpen) {
        panel.classList.add('open');
        seeMore.classList.add('open');
        item.classList.add('active');
      }
    });
  });
</script>

<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }

  .wrap {
    background: transparent;
    color: #fff;
    padding: 50px 16px 85px;
    max-width: 1180px;
    width: 100%;
    margin: 0 auto;
    font-family: 'Inter', sans-serif;
    position: relative;
    z-index: 2;
  }

  /* TOP ROW */
  .top-row {
    margin-bottom: 48px;
    width: 100%;
  }

  /* HEADER SECTION: DIVISI RISET (JARAK ATAS & BAWAH SAMA PERSIS 50PX) */
  .division-header-wrap {
    text-align: center;
    margin: 0 auto 50px;
    width: 100%;
    position: relative;
  }

  /* Ambient Glow Merah Halus di Bagian Tengah Header */
  .division-header-wrap::before {
    content: "";
    position: absolute;
    top: -40px;
    left: 50%;
    transform: translateX(-50%);
    width: 440px;
    height: 160px;
    background: radial-gradient(circle, rgba(255, 0, 51, 0.2) 0%, transparent 70%);
    filter: blur(45px);
    pointer-events: none;
    z-index: 0;
  }

  .division-tag-pill {
    display: inline-block;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.55);
    margin-bottom: 14px;
    position: relative;
    z-index: 1;
  }

  .division-title {
    font-size: clamp(1.65rem, 2.4vw, 2.15rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.2;
    letter-spacing: -0.4px;
    margin: 0;
    text-align: center;
  }

  .division-title .title-accent {
    color: #FF0033;
    text-shadow: 0 0 24px rgba(255, 0, 51, 0.45);
  }

  .headline-stats-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 40px;
    width: 100%;
  }

  .headline-col {
    max-width: 580px;
    flex: 1;
  }

  .headline {
    font-size: clamp(1.22rem, 1.6vw, 1.48rem);
    font-weight: 700;
    line-height: 1.35;
    color: #eee;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
  }
  .headline span {
    color: #FF0033;
    text-shadow: 0 0 20px rgba(255, 0, 51, 0.4);
  }

  .top-desc {
    color: rgba(255, 255, 255, 0.62);
    font-size: 14px;
    line-height: 1.7;
    max-width: 480px;
    margin: 0;
  }

  /* STATS (SEJAJAR LURUS KESAMPING SAMA HEADLINE) */
  .stats-row {
    display: flex;
    gap: 28px;
    align-items: center;
    flex-shrink: 0;
    padding-top: 6px;
  }
  .stat-box { text-align: center; }
  .stat-num {
    font-size: 2.1rem;
    font-weight: 800;
    color: #FF0033;
    text-shadow: 0 0 16px rgba(255, 0, 51, 0.4);
    line-height: 1;
    font-family: 'JetBrains Mono', monospace;
  }
  .stat-lbl {
    font-size: 11px;
    color: rgba(255, 255, 255, 0.6);
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-top: 6px;
    font-weight: 600;
  }
  .divider {
    width: 1px;
    height: 44px;
    background: rgba(255, 255, 255, 0.12);
  }

  /* HR */
  hr.line {
    border: none;
    border-top: 1px solid #1a1a1a;
    margin: 0 0 10px;
  }

  /* DIVISION LIST */
  .division-list { display: flex; flex-direction: column; }

  .division-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 28px 0;
    border-bottom: 1px solid #111;
    cursor: pointer;
    transition: 0.3s;
    gap: 12px;
  }

  .division-item .num {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    font-weight: 600;
    color: #444;
    letter-spacing: 1px;
    min-width: 36px;
    flex-shrink: 0;
    transition: color 0.3s ease, text-shadow 0.3s ease;
  }

  .division-item h1 {
    font-family: 'Inter', sans-serif;
    font-size: clamp(1.45rem, 2.2vw, 1.95rem);
    font-weight: 700;
    color: #bbb;
    letter-spacing: -0.3px;
    line-height: 1.25;
    transition: color 0.3s ease, text-shadow 0.3s ease;
    flex: 1;
    margin: 0;
    text-transform: capitalize;
  }

  .division-item .tags {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    justify-content: flex-end;
    flex: 1;
    max-width: 300px;
  }

  .tag {
    font-size: 11px;
    color: #444;
    border: 1px solid #222;
    padding: 4px 12px;
    border-radius: 20px;
    transition: 0.3s;
    white-space: nowrap;
  }

  .arrow {
    font-size: 1.4rem;
    color: #333;
    transition: 0.3s;
    flex-shrink: 0;
  }

  .division-item:hover .num,
  .division-item.active .num {
    color: #FF0033;
    text-shadow: 0 0 20px rgba(255, 0, 51, 0.45);
  }

  .division-item:hover h1 {
    color: #FF0033;
    text-shadow: 0 0 30px rgba(255, 0, 51, 0.4);
  }
  .division-item:hover .arrow {
    color: #FF0033;
    transform: translateX(8px);
  }
  .division-item:hover .tag {
    border-color: rgba(255, 0, 51, 0.3);
    color: #888;
  }

  .division-item.active h1 {
    color: #FF0033;
    text-shadow: 0 0 30px rgba(255, 0, 51, 0.4);
  }
  .division-item.active .arrow {
    color: #FF0033;
  }
  .division-item.active .tag {
    border-color: rgba(255, 0, 51, 0.35);
    color: #aaa;
  }

  /* DETAIL PANEL */
  .detail-panel {
    overflow: hidden;
    max-height: 0;
    transition: max-height 0.4s ease, opacity 0.3s;
    opacity: 0;
  }
  .detail-panel.open {
    max-height: 400px;
    opacity: 1;
  }

  .detail-inner {
    padding: 24px 0 24px 48px;
    display: flex;
    gap: 40px;
    align-items: flex-start;
  }

  .detail-desc {
    color: #666;
    font-size: 14px;
    line-height: 1.8;
    max-width: 420px;
  }

  .detail-meta {
    display: flex;
    flex-direction: column;
    gap: 10px;
    min-width: 160px;
  }
  .meta-item { display: flex; flex-direction: column; gap: 2px; }
  .meta-label {
    font-size: 10px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  .meta-value { font-size: 13px; color: #aaa; }

  /* SEE MORE */
  .see-more-wrap {
    overflow: hidden;
    max-height: 0;
    opacity: 0;
    transition: max-height 0.4s ease, opacity 0.3s;
    border-bottom: 1px solid #111;
  }
  .see-more-wrap.open {
    max-height: 60px;
    opacity: 1;
  }
  .see-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #FF0033;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-decoration: none;
    padding: 14px 0 14px 48px;
    transition: color 0.25s ease, text-shadow 0.25s ease;
  }
  .see-more-btn span {
    transition: transform 0.25s ease, color 0.25s ease;
    display: inline-block;
    color: inherit;
  }
  .see-more-btn:hover,
  .see-more-btn:focus {
    color: #ffffff !important;
    text-decoration: none;
    text-shadow: 0 0 14px rgba(255, 255, 255, 0.5);
  }
  .see-more-btn:hover span,
  .see-more-btn:focus span {
    transform: translate(4px, -4px);
    color: #ffffff !important;
  }

  /* BOTTOM ROW */
  .bottom-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 50px;
    padding-top: 30px;
    border-top: 1px solid #111;
    gap: 20px;
  }
  .cta-text { color: #555; font-size: 13px; }
  .cta-text span { color: #FF0033; }

  .join-btn {
    background: transparent;
    border: 1px solid #FF0033;
    color: #FF0033;
    padding: 12px 28px;
    font-size: 13px;
    letter-spacing: 1px;
    cursor: pointer;
    transition: 0.3s;
    text-transform: uppercase;
    flex-shrink: 0;
  }
  .join-btn:hover {
    background: #FF0033;
    color: #000;
  }

  /* TABLET */
  @media (max-width: 768px) {
    .wrap { padding: 40px 20px 70px; }

    .division-header-wrap {
      margin: 0 auto 40px;
    }

    .division-title {
      font-size: clamp(1.45rem, 5vw, 1.85rem);
    }

    .headline-stats-row {
      flex-direction: column;
      gap: 24px;
    }
    .headline-col { max-width: 100%; }
    .headline { font-size: clamp(1.1rem, 3.5vw, 1.35rem); }
    .top-desc { max-width: 100%; }

    .stats-row {
      width: 100%;
      justify-content: flex-start;
      gap: 20px;
      padding-top: 0;
    }

    .division-item .tags { display: none; }
  }

  /* MOBILE */
  @media (max-width: 480px) {
    .wrap { padding: 32px 16px 50px; }

    .division-header-wrap {
      margin: 0 auto 32px;
    }

    .top-row { gap: 24px; margin-bottom: 32px; }

    .stats-row { gap: 16px; }
    .stat-num { font-size: 1.5rem; }

    .division-item { padding: 20px 0; gap: 8px; }
    .division-item .num { min-width: 28px; font-size: 10px; }
    .division-item h1 { font-size: clamp(1.2rem, 5vw, 1.45rem); }
    .arrow { font-size: 1.1rem; }

    .detail-panel.open { max-height: 500px; }

    .detail-inner {
      padding: 16px 0;
      flex-direction: column;
      gap: 20px;
    }
    .detail-desc { max-width: 100%; font-size: 13px; }
    .detail-meta {
      min-width: unset;
      width: 100%;
      flex-direction: row;
      flex-wrap: wrap;
      gap: 14px;
    }
    .meta-item { min-width: 120px; }

    .see-more-btn { padding: 14px 0; }

    .bottom-row {
      flex-direction: column;
      align-items: flex-start;
      gap: 16px;
    }
    .join-btn { width: 100%; text-align: center; }
  }
</style>