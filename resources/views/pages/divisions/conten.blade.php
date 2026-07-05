<div class="wrap">
  <div class="top-row">
    <div class="top-left">
      <p class="small-label">Our Divisions</p>
      <h2 class="headline">Building the future of <span>digital security</span></h2>
      <p class="top-desc">Three specialized units working together to protect, connect, and manage modern infrastructure.</p>
    </div>
    <div class="stats-row">
      <div class="stat-box"><div class="stat-num">3</div><div class="stat-lbl">Divisions</div></div>
      <div class="divider"></div>
      <div class="stat-box"><div class="stat-num">{{ $totalAnggota }} + </div><div class="stat-lbl">Members</div></div>
      <div class="divider"></div>
      <div class="stat-box"><div class="stat-num">5★</div><div class="stat-lbl">Rating</div></div>
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
        <p class="detail-desc">Mengelola dan memelihara infrastruktur server, sistem operasi, serta layanan jaringan agar berjalan optimal 24/7. Dari provisioning hingga monitoring, tim ini memastikan uptime dan performa terjaga.</p>
        <div class="detail-meta">
          <div class="meta-item"><span class="meta-label">Focus area</span><span class="meta-value">Server & Infrastructure</span></div>
          <div class="meta-item"><span class="meta-label">Tools</span><span class="meta-value">Ansible, Nagios, Proxmox</span></div>
          <div class="meta-item"><span class="meta-label">Members</span><span class="meta-value">12 engineers</span></div>
        </div>
      </div>
    </div>
    <div class="see-more-wrap" id="see-more-0">
      <a href="/Sysadmin" class="see-more-btn">See More <span>↗</span></a>
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
        <p class="detail-desc">Melindungi aset digital dari ancaman siber melalui vulnerability assessment, ethical hacking, dan incident response. Tim ini selalu selangkah lebih maju dari para attacker.</p>
        <div class="detail-meta">
          <div class="meta-item"><span class="meta-label">Focus area</span><span class="meta-value">Offense & Defense</span></div>
          <div class="meta-item"><span class="meta-label">Tools</span><span class="meta-value">Burp Suite, Metasploit, Wireshark</span></div>
          <div class="meta-item"><span class="meta-label">Members</span><span class="meta-value">18 engineers</span></div>
        </div>
      </div>
    </div>
    <div class="see-more-wrap" id="see-more-1">
      <a href="/Cyber-Security" class="see-more-btn">See More <span>↗</span></a>
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
        <p class="detail-desc">Merancang dan mengoptimalkan arsitektur jaringan yang andal, cepat, dan aman. Mulai dari konfigurasi router & switch hingga implementasi zero-trust network access.</p>
        <div class="detail-meta">
          <div class="meta-item"><span class="meta-label">Focus area</span><span class="meta-value">Architecture & Connectivity</span></div>
          <div class="meta-item"><span class="meta-label">Tools</span><span class="meta-value">Cisco, pfSense, GNS3</span></div>
          <div class="meta-item"><span class="meta-label">Members</span><span class="meta-value">14 engineers</span></div>
        </div>
      </div>
    </div>
    <div class="see-more-wrap" id="see-more-2">
      <a href="/Network" class="see-more-btn">See More <span>↗</span></a>
    </div>
</br>


  </div>

  <!-- <div class="bottom-row">
    <p class="cta-text">Tertarik bergabung? <span>Kami selalu buka untuk talenta baru.</span></p>
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
    background: #050505;
    color: #fff;
    padding: 80px 40px;
    min-height: 100vh;
    font-family: 'Inter', sans-serif;
  }

  /* TOP ROW */
  .top-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 60px;
    gap: 40px;
  }
  .top-left { max-width: 500px; }

  .small-label {
    color: #555;
    font-size: 13px;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 16px;
  }

  .headline {
    font-size: clamp(1.8rem, 4vw, 3.2rem);
    font-weight: 700;
    line-height: 1.15;
    color: #eee;
  }
  .headline span { color: #FF0033; }

  .top-desc {
    color: #666;
    font-size: 14px;
    line-height: 1.7;
    max-width: 260px;
    margin-top: 20px;
  }

  /* STATS */
  .stats-row {
    display: flex;
    gap: 24px;
    align-items: center;
    flex-shrink: 0;
  }
  .stat-box { text-align: center; }
  .stat-num {
    font-size: 2rem;
    font-weight: 700;
    color: #FF0033;
  }
  .stat-lbl {
    font-size: 11px;
    color: #555;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-top: 4px;
  }
  .divider {
    width: 1px;
    height: 50px;
    background: #222;
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
    font-size: 11px;
    color: #333;
    letter-spacing: 1px;
    min-width: 36px;
    flex-shrink: 0;
  }

  .division-item h1 {
    font-size: clamp(1.5rem, 4vw, 2.8rem);
    font-weight: 700;
    color: #bbb;
    transition: 0.3s;
    flex: 1;
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

  .division-item.active h1 { color: #FF0033; }
  .division-item.active .arrow { color: #FF0033; }

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
    transition: 0.3s;
  }
  .see-more-btn span {
    transition: transform 0.3s;
    display: inline-block;
  }
  .see-more-btn:hover span {
    transform: translate(4px, -4px);
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
    .wrap { padding: 60px 24px; }

    .top-row {
      flex-direction: column;
      gap: 32px;
      margin-bottom: 40px;
    }
    .top-left { max-width: 100%; }
    .top-desc { max-width: 100%; }

    .stats-row {
      width: 100%;
      justify-content: flex-start;
    }

    .division-item .tags { display: none; }
  }

  /* MOBILE */
  @media (max-width: 480px) {
    .wrap { padding: 48px 16px; }

    .top-row { gap: 24px; margin-bottom: 32px; }

    .stats-row { gap: 16px; }
    .stat-num { font-size: 1.5rem; }

    .division-item { padding: 20px 0; gap: 8px; }
    .division-item .num { min-width: 28px; font-size: 10px; }
    .division-item h1 { font-size: clamp(1.3rem, 6vw, 1.8rem); }
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