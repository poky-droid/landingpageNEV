
<style>
* { box-sizing: border-box; margin: 0; padding: 0; }

.wrap1 {
  width: 100%;
  max-width: 1000px;
  margin: 0 auto;

  padding: clamp(32px, 8vw, 80px) clamp(16px, 5vw, 40px);

  display: flex;
  flex-direction: column;
  align-items: center;
  gap: clamp(28px, 5vw, 48px);

  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(1px);
  -webkit-backdrop-filter: blur(1px);

  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 16px;
}

.eyebrow {
  font-size: 10px;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: #333333;
  display: flex;
  align-items: center;
  gap: 10px;
}
.eyebrow::before, .eyebrow::after {
  content: '';
  width: clamp(16px, 4vw, 32px);
  height: 1px;
  background: #1e1e1e0d;
}

.heading {
  font-size: clamp(2rem, 8vw, 3.5rem);
  font-weight: 700;
  color: #eee;
  text-align: center;
  line-height: 1.1;
  letter-spacing: -1px;
}
.heading span { color: #FF0033; }

.sub {
  font-size: clamp(12px, 2vw, 13px);
  color: #333;
  text-align: center;
  line-height: 1.8;
  max-width: min(340px, 90vw);
}

.repo-btn {
  position: relative;

  display: flex;
  align-items: center;
  justify-content: center;
  gap: 14px;

  width: 100%;
  max-width: 500px;

  padding: 16px 24px;

  background: #050505;
  border: 1px solid #1a1a1a;

  color: #ccc;
  font-size: clamp(10px, 2vw, 13px);
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
  text-decoration: none;

  cursor: pointer;
  overflow: hidden;

  transition: color .3s, border-color .4s;
}

.repo-btn::before {
  content: '';
  position: absolute;
  inset: 0;
  background: #FF0033;
  transform: translateX(-101%);
  transition: transform 0.4s cubic-bezier(0.77,0,0.18,1);
  z-index: 0;
}
.repo-btn:hover::before { transform: translateX(0); }
.repo-btn:hover { color: #fff; border-color: #FF0033; }

.repo-btn span, .repo-btn .arrow { position: relative; z-index: 1; }

.arrow {
  font-size: 16px;
  display: inline-block;
  transition: transform 0.3s;
}
.repo-btn:hover .arrow { transform: translate(4px, -4px); }

.stats {
  display: flex;
  gap: clamp(20px, 5vw, 48px);
  align-items: center;
  flex-wrap: wrap;
  justify-content: center;
}
.stat {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
}
.stat-num {
  font-size: clamp(16px, 4vw, 22px);
  font-weight: 700;
  color: #ddd;
}
.stat-num span { color: #FF0033; }
.stat-label {
  font-size: 10px;
  color: #2a2a2a;
  letter-spacing: 2px;
  text-transform: uppercase;
}
.stat-divider {
  width: 1px;
  height: 32px;
  background: #111;
}

@media (max-width: 360px) {
  .stat-divider { display: none; }
  .stats { gap: 24px; }
}

.launch-overlay {
  position: fixed;
  inset: 0;
  background: transparent;
  z-index: 9999;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 24px;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s;
}
.launch-overlay.show { opacity: 1; pointer-events: all; }
.launch-label { font-size: 10px; color: #333; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 20px; text-align: center; }
.launch-title { font-size: clamp(1rem, 4vw, 2rem); font-weight: 700; color: #eee; margin-bottom: 40px; text-align: center; }
.launch-title span { color: #FF0033; }
.launch-bar-wrap { width: min(220px, 70vw); height: 1px; background: #1a1a1a; margin-bottom: 16px; overflow: hidden; }
.launch-bar { height: 100%; background: #FF0033; width: 0%; box-shadow: 0 0 8px #FF0033; }
.launch-pct { font-size: 10px; color: #333; letter-spacing: 2px; }
</style>

<div class="launch-overlay" id="overlay">
  <p class="launch-label">Our Repository</p>
  <p class="launch-title">Redirecting to <span>GitHub</span></p>
  <div class="launch-bar-wrap"><div class="launch-bar" id="launch-bar"></div></div>
  <p class="launch-pct" id="launch-pct">0%</p>
</div>

<div class="wrap1">
  <p class="eyebrow">Open Source</p>
  <h2 class="heading">Our<br><span>Repository</span></h2>
  <p class="sub">Semua materi, source code, dan dokumentasi tersedia secara terbuka. Jelajahi, fork, dan kontribusi.</p>

  <a class="repo-btn" id="repo-btn" href="#" data-url="https://github.com">
    <span>Visit Our Repository</span>
    <span class="arrow">↗</span>
  </a>

  <div class="stats">
    <div class="stat">
      <span class="stat-num">9<span>+</span></span>
      <span class="stat-label">Modules</span>
    </div>
    <div class="stat-divider"></div>
    <div class="stat">
      <span class="stat-num">3<span>+</span></span>
      <span class="stat-label">Divisions</span>
    </div>
    <div class="stat-divider"></div>
    <div class="stat">
      <span class="stat-num">100<span>%</span></span>
      <span class="stat-label">Open Source</span>
    </div>
  </div>
</div>

<script>
document.getElementById('repo-btn').addEventListener('click', e => {
  e.preventDefault();
  const url = e.currentTarget.dataset.url;
  const overlay = document.getElementById('overlay');
  const bar = document.getElementById('launch-bar');
  const pct = document.getElementById('launch-pct');

  overlay.classList.add('show');
  bar.style.width = '0%';
  pct.textContent = '0%';

  let progress = 0;
  const steps = [
    { target: 40, delay: 55 },
    { target: 75, delay: 35 },
    { target: 92, delay: 20 },
    { target: 100, delay: 12 }
  ];
  let si = 0;
  function tick() {
    if (si >= steps.length) {
      setTimeout(() => { overlay.classList.remove('show'); bar.style.width = '0%'; window.open(url, '_blank'); }, 200);
      return;
    }
    const s = steps[si];
    if (progress < s.target) {
      progress++;
      bar.style.width = progress + '%';
      pct.textContent = progress + '%';
      setTimeout(tick, s.delay);
    } else { si++; tick(); }
  }
  tick();
  overlay.addEventListener('click', () => overlay.classList.remove('show'), { once: true });
});
</script>
