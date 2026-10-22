<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Network Evolution</title>
</head>
<body>
@include('pages.layout.navbarforconten')

<section class="about-section">

  <!-- ── HERO ── -->
  <div class="hero-wrap">
    <div class="hero-bg">
      <div class="grid-lines"></div>
      <div class="glow-orb orb1"></div>
      <div class="glow-orb orb2"></div>
    </div>
    <div class="pill fade-in"><span class="pill-dot"></span>Network Evolution</div>
    <h1 class="hero-title fade-up">
      <span class="dim">We build the</span><br>
      <span class="red">future</span> <span class="white">of networks</span>
    </h1>
    <p class="hero-sub fade-up">A research-driven community pushing the boundaries of networking, cybersecurity, and digital infrastructure.</p>
    <div class="hero-cta fade-up">
      <a href="/#divisions" class="btn-primary">Explore Divisions</a>
    </div>
  </div>

  <!-- ── STATS STRIP ── -->
  <div class="stats-strip reveal" id="about-content">
    <div class="stat-item">
      <div class="stat-num" data-target="3">3</div>
      <div class="stat-lbl">Active Divisions</div>
    </div>
    <div class="stat-item">
      <div class="stat-num" data-target="100">100%</div>
      <div class="stat-lbl">Collaboration %</div>
    </div>
    <div class="stat-item">
      <div class="stat-num">∞</div>
      <div class="stat-lbl">Innovation</div>
    </div>
  </div>

  <!-- ── ABOUT PROSE ── -->
  <div class="inner-section">
    <div class="section-label reveal">Who We Are</div>
    <h2 class="section-title reveal">A forward-thinking<br>platform for digital pioneers</h2>
    <div class="prose-grid">
      <div class="prose-card reveal left">
        <p>NETWORK EVOLUTION is dedicated to exploring the latest advancements in networking, cybersecurity, and digital infrastructure.</p>
      </div>
      <div class="prose-card reveal">
        <p>Our mission is to empower individuals and organizations with knowledge, tools, and insights to thrive in the rapidly evolving digital world.</p>
      </div>
      <div class="prose-card reveal right">
        <p>We focus on research, education, and innovation to bridge the gap between technology and human interaction.</p>
      </div>
    </div>
  </div>

  <!-- ── VISION MISSION ── -->
  <div class="inner-section">
    <div class="section-label reveal">Core Principles</div>
    <h2 class="section-title reveal">Vision & Mission</h2>
    <div class="vm-grid">
      <div class="vm-card vision reveal left">
        <div class="vm-number">01</div>
        <span class="vm-tag">Vision</span>
        <h2>Our Vision</h2>
        <p>To establish NEV as a collaborative, disciplined, and progressive research group. A place where all members grow in technical expertise and professional skills, while producing scientific work that has a tangible impact on the advancement of networking, system administration, and cybersecurity.</p>
      </div>
      <div class="vm-card mission reveal right">
        <div class="vm-number">02</div>
        <span class="vm-tag">Mission</span>
        <h2>Our Mission</h2>
        <ul class="vm-list">
          <li><span class="vm-bullet"></span>Build a supportive and collaborative learning ecosystem.</li>
          <li><span class="vm-bullet"></span>Strengthen networking, system administration, and cybersecurity skills through research.</li>
          <li><span class="vm-bullet"></span>Develop professional soft skills: communication, leadership, and teamwork.</li>
          <li><span class="vm-bullet"></span>Encourage a consistent culture of research, knowledge sharing, and documentation.</li>
          <li><span class="vm-bullet"></span>Foster collaboration with alumni and industry practitioners.</li>
          <li><span class="vm-bullet"></span>Produce impactful works and meaningful contributions.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- ── CORE VALUES ── -->
  <div class="inner-section" style="padding-bottom: 100px">
    <div class="section-label reveal">What Drives Us</div>
    <h2 class="section-title reveal">Core Values</h2>
    <div class="values-grid reveal">
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="#FF0033" stroke-width="1.8"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>
        <h3>Research First</h3>
        <p>Research as the foundation of every decision and innovation.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="#FF0033" stroke-width="1.8"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3>Kolaboratif</h3>
        <p>Growing together is stronger than moving forward alone.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="#FF0033" stroke-width="1.8"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        </div>
        <h3>Progresif</h3>
        <p>Always moving forward, adaptable to technological changes.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="#FF0033" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3>Integritas</h3>
        <p>Disciplined, honest, and responsible in every work.</p>
      </div>
    </div>
  </div>

</section>
@include('pages.footer.conten')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

*, *::before, *::after { box-sizing: border-box; }

.about-section {
    background: #060608;
    font-family: 'Inter', sans-serif;
    color: #fff;
    overflow: hidden;
}
body {
    margin: 0;
    padding: 0;
    background: #000;
    min-height: 100%;
    overflow-x: hidden;
}

/* ── HERO ── */
.hero-wrap {
    position: relative;
    min-height: 100vh;
    min-height: 100svh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 100px 24px 60px;
    overflow: hidden;
}

.hero-bg { position: absolute; inset: 0; pointer-events: none; }

.grid-lines {
    position: absolute; inset: 0;
    background-image:
        linear-gradient(rgba(255,0,51,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,0,51,0.04) 1px, transparent 1px);
    background-size: 60px 60px;
}

.glow-orb { position: absolute; border-radius: 50%; filter: blur(80px); }
.orb1 {
    width: 500px; height: 500px;
    background: #FF0033; opacity: 0.12;
    top: -150px; left: 50%; transform: translateX(-50%);
}
.orb2 {
    width: 250px; height: 250px;
    background: #FF0033; opacity: 0.06;
    bottom: 0; right: 8%;
}

.pill {
    display: inline-flex; align-items: center; gap: 8px;
    font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
    color: #FF0033; border: 1px solid rgba(255,0,51,0.3);
    padding: 6px 18px; border-radius: 999px; margin-bottom: 28px;
    position: relative; z-index: 1;
}
.pill-dot {
    width: 6px; height: 6px; border-radius: 50%; background: #FF0033;
    animation: blink 2s infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.3} }

.hero-title {
    font-size: clamp(2rem, 8vw, 4.2rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -1px;
    margin-bottom: 20px;
    position: relative; z-index: 1;
}
.hero-title .white { color: #fff; }
.hero-title .red   { color: #FF0033; }
.hero-title .dim   { color: rgba(255,255,255,0.2); }

.hero-sub {
    max-width: 460px;
    color: #666;
    font-size: clamp(0.85rem, 3vw, 1rem);
    line-height: 1.75;
    font-weight: 300;
    margin-bottom: 36px;
    position: relative; z-index: 1;
}

.hero-cta {
    display: flex; gap: 12px;
    flex-wrap: wrap; justify-content: center;
    position: relative; z-index: 1;
}

.btn-primary {
    background: #FF0033; color: #fff; border: none;
    padding: 13px 30px; border-radius: 8px;
    font-size: 0.88rem; font-weight: 600; letter-spacing: 0.5px;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
    display: inline-block;
}
.btn-primary:hover { background: #cc0028; transform: translateY(-2px); color: #fff; }

.btn-outline {
    background: transparent; color: #fff;
    border: 1px solid rgba(255,255,255,0.15);
    padding: 13px 30px; border-radius: 8px;
    font-size: 0.88rem; font-weight: 500;
    text-decoration: none; transition: all 0.2s; display: inline-block;
}
.btn-outline:hover { border-color: rgba(255,0,51,0.5); color: #FF0033; }

/* ── STATS STRIP ── */
.stats-strip {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    border-top: 1px solid rgba(255,255,255,0.06);
    border-bottom: 1px solid rgba(255,255,255,0.06);
}
.stat-item {
    padding: 32px 20px; text-align: center;
    border-right: 1px solid rgba(255,255,255,0.06);
}
.stat-item:last-child { border-right: none; }
.stat-num {
    font-size: 2.2rem; font-weight: 800;
    color: #FF0033; letter-spacing: -1px;
}
.stat-lbl {
    font-size: 0.68rem; color: #555;
    letter-spacing: 1.5px; text-transform: uppercase; margin-top: 4px;
}

/* ── INNER SECTIONS ── */
.inner-section { max-width: 960px; margin: 0 auto; padding: 80px 24px 0; }

.section-label {
    display: flex; align-items: center; gap: 10px;
    font-size: 11px; letter-spacing: 2.5px; text-transform: uppercase;
    color: #FF0033; margin-bottom: 16px;
}
.section-label::before { content:''; width: 24px; height: 1px; background: #FF0033; }

.section-title {
    font-size: clamp(1.4rem, 3.5vw, 2.2rem);
    font-weight: 700; color: #fff;
    letter-spacing: -0.5px; margin-bottom: 0; line-height: 1.25;
}

/* ── PROSE CARDS ── */
.prose-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px; margin-top: 32px;
}
.prose-card {
    background: rgba(255,255,255,0.02);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 12px; padding: 24px;
    transition: border-color 0.3s;
}
.prose-card:hover { border-color: rgba(255,0,51,0.2); }
.prose-card p { color: #777; font-size: 0.9rem; line-height: 1.8; font-weight: 300; margin: 0; }

/* ── VISION MISSION ── */
.vm-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px; margin-top: 32px;
}
.vm-card {
    border-radius: 16px; padding: 40px;
    position: relative; overflow: hidden;
    transition: transform 0.35s, box-shadow 0.35s;
}
.vm-card.vision  { background: rgba(255,0,51,0.06); border: 1px solid rgba(255,0,51,0.2); }
.vm-card.mission { background: rgba(255,255,255,0.025); border: 1px solid rgba(255,255,255,0.08); }
.vm-card:hover   { transform: translateY(-6px); }
.vm-card.vision:hover  { box-shadow: 0 24px 60px rgba(255,0,51,0.15); }
.vm-card.mission:hover { box-shadow: 0 24px 60px rgba(255,255,255,0.04); }

.vm-number {
    font-size: 4.5rem; font-weight: 900; line-height: 1;
    letter-spacing: -3px; opacity: 0.1; color: #FF0033; margin-bottom: 16px;
}
.vm-card.mission .vm-number { color: #fff; }

.vm-tag {
    font-size: 10px; letter-spacing: 2.5px; text-transform: uppercase;
    color: #FF0033; margin-bottom: 12px; display: block;
}
.vm-card.mission .vm-tag { color: #555; }
.vm-card h2 { font-size: 1.3rem; font-weight: 700; color: #fff; margin-bottom: 16px; }
.vm-card p  { color: #888; font-size: 0.88rem; line-height: 1.8; font-weight: 300; }

.vm-list { list-style: none; padding: 0; margin: 0; }
.vm-list li {
    color: #888; font-size: 0.85rem; line-height: 1.7; font-weight: 300;
    padding: 9px 0; border-bottom: 1px solid rgba(255,255,255,0.05);
    display: flex; gap: 12px; align-items: flex-start;
}
.vm-list li:last-child { border-bottom: none; }
.vm-bullet {
    width: 4px; height: 4px; min-width: 4px; border-radius: 50%;
    background: #FF0033; margin-top: 9px; flex-shrink: 0;
}

/* ── CORE VALUES ── */
.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 1px;
    background: rgba(255,255,255,0.06);
    border-radius: 16px; overflow: hidden; margin-top: 32px;
}
.value-item { background: #060608; padding: 28px 24px; transition: background 0.3s; }
.value-item:hover { background: rgba(255,0,51,0.05); }
.value-icon {
    width: 36px; height: 36px; border-radius: 8px;
    border: 1px solid rgba(255,0,51,0.3);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 16px;
}
.value-icon svg { width: 18px; height: 18px; }
.value-item h3 { font-size: 0.9rem; font-weight: 600; color: #fff; margin: 0 0 8px; }
.value-item p  { font-size: 0.8rem; color: #555; line-height: 1.7; font-weight: 300; margin: 0; }

/* ── REVEAL ANIMATIONS ── */
.fade-in { animation: fadeIn 0.8s ease both; }
.fade-up { animation: fadeUp 0.9s ease both; }
.reveal  { opacity: 0; transform: translateY(24px); transition: opacity 0.6s ease, transform 0.6s ease; }
.reveal.visible { opacity: 1; transform: translateY(0); }
.reveal.left  { transform: translateX(-24px); }
.reveal.right { transform: translateX(24px); }
.reveal.left.visible, .reveal.right.visible { transform: translateX(0); }

@keyframes fadeIn { from{opacity:0} to{opacity:1} }
@keyframes fadeUp { from{opacity:0;transform:translateY(20px)} to{opacity:1;transform:translateY(0)} }

/* ═══════════════════════════════════
   RESPONSIVE — max 768px
═══════════════════════════════════ */
@media (max-width: 768px) {

    .hero-wrap {
        min-height: 100vh;
        min-height: 100svh;
        padding-top: 70px;
        padding-bottom: 48px;
        justify-content: center;
        align-items: center;
    }

    .orb1 { width: 260px; height: 260px; opacity: 0.08; top: -80px; }
    .orb2 { display: none; }
    .grid-lines { background-size: 40px 40px; }

    .pill { font-size: 9px; letter-spacing: 1.5px; padding: 5px 12px; margin-bottom: 20px; }
    .hero-title { letter-spacing: -0.5px; margin-bottom: 16px; }
    .hero-sub { font-size: 0.875rem; margin-bottom: 28px; }

    .hero-cta { flex-direction: column; width: 100%; max-width: 280px; gap: 10px; }
    .btn-primary, .btn-outline { width: 100%; text-align: center; padding: 14px 20px; }

    .stats-strip { grid-template-columns: 1fr; }
    .stat-item {
        border-right: none;
        border-bottom: 1px solid rgba(255,255,255,0.06);
        padding: 20px 16px;
    }
    .stat-item:last-child { border-bottom: none; }
    .stat-num { font-size: 1.8rem; }

    .inner-section { padding: 48px 20px 0; }
    .prose-grid { grid-template-columns: 1fr; gap: 14px; }

    .vm-grid { grid-template-columns: 1fr; gap: 16px; }
    .vm-card { padding: 28px 22px; }
    .vm-card:hover { transform: none; box-shadow: none; }
    .vm-number { font-size: 3rem; }

    .values-grid { grid-template-columns: repeat(2, 1fr); }
    .value-item { padding: 20px 16px; }
    .value-item:hover { background: #060608; }

    .reveal.left, .reveal.right { transform: translateY(24px); }
}

/* ═══════════════════════════════════
   RESPONSIVE — max 420px (iPhone SE)
═══════════════════════════════════ */
@media (max-width: 420px) {
    .hero-wrap { padding-top: 60px; } /* ← DIPERBAIKI: 100px → 60px */
    .values-grid { grid-template-columns: 1fr; }
    .stat-num { font-size: 1.6rem; }
    .vm-card { padding: 22px 18px; }
    .value-item { padding: 18px 14px; }
    .hero-cta { max-width: 100%; }
}
</style>

<script>
const revealEls = document.querySelectorAll('.reveal');
const observer  = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
}, { threshold: 0.12 });
revealEls.forEach(el => observer.observe(el));
</script>
</body>
</html>