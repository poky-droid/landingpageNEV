
<style>
* { box-sizing: border-box; margin: 0; padding: 0; }

footer {
  background: rgba(0, 0, 0);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-top: 1px solid #111;
  padding: clamp(40px, 8vw, 60px) clamp(16px, 6vw, 80px) clamp(24px, 4vw, 32px);
  font-family: sans-serif;
}

.footer-top {
  display: grid;
  grid-template-columns: 1.5fr 1fr;
  gap: clamp(24px, 5vw, 40px);
  margin-bottom: clamp(40px, 6vw, 60px);
  align-items: start;
}

.brand-name {
  font-size: clamp(1.1rem, 3vw, 1.6rem);
  font-weight: 700;
  color: #868585ff;
  letter-spacing: -0.5px;
  margin-bottom: 12px;
}
.brand-name span { color: #FF0033; }

.brand-desc {
  font-size: clamp(11px, 1.5vw, 12px);
  color: #A0A0A0;
  line-height: 1.8;
  max-width: 260px;
}

.col-title {
  font-size: 10px;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #eee;
  margin-bottom: 16px;
  position: relative;
  padding-bottom: 12px;
}
.col-title::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0;
  width: 20px; height: 1px;
  background: #FF0033;
}

.social-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 8px;
}

.social-btn {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: clamp(10px, 2vw, 12px) clamp(12px, 2vw, 16px);
  border: 1px solid #111;
  background: #050505;
  text-decoration: none;
  transition: 0.3s;
  position: relative;
  overflow: hidden;
}
.social-btn::before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 2px; height: 0%;
  background: #FF0033;
  transition: height 0.3s ease;
}
.social-btn:hover::before { height: 100%; }
.social-btn:hover { background: #080808; border-color: #1a1a1a; }

.social-icon { width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;  }
.social-icon svg { width: 15px; height: 15px; fill: #8A8A8A; transition: fill 0.3s; }
.social-btn:hover .social-icon svg { fill: #FF0033; }

.social-info { display: flex; flex-direction: column; gap: 2px; min-width: 0; }
.social-name { font-size: clamp(9px, 1.5vw, 11px); font-weight: 700; color: #EAEAEA; letter-spacing: 1px; text-transform: uppercase; transition: color 0.3s; white-space: nowrap; }
.social-handle { font-size: clamp(8px, 1.2vw, 10px); color: #8A8A8A; transition: color 0.3s; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.social-btn:hover .social-name { color: #FF0033; }
.social-btn:hover .social-handle { color: #444; }

.footer-divider { height: 1px; background: #111; margin-bottom: clamp(20px, 3vw, 28px); }

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
}
.copy { font-size: clamp(10px, 1.5vw, 11px); color: #A0A0A0; letter-spacing: 1px; }
.copy span { color: #FF0033; }
.made-by { font-size: clamp(10px, 1.5vw, 11px); color: #A0A0A0; letter-spacing: 1px; display: flex; align-items: center; gap: 6px; }
.dot { width: 5px; height: 5px; border-radius: 50%; background: #FF0033; animation: pulse 2s ease-in-out infinite; flex-shrink: 0; }
@keyframes pulse { 0%,100%{opacity:1} 50%{opacity:0.2} }

@media (max-width: 600px) {
  .footer-top { grid-template-columns: 1fr; }
  .brand-desc { max-width: 100%; }
  .social-grid { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 360px) {
  .social-grid { grid-template-columns: 1fr; }
  .footer-bottom { flex-direction: column; align-items: flex-start; }
}
</style>

<footer>
  <div class="footer-top">

    <div>
      <p class="brand-name">NETWORK <span>EVOLUSION</span></p>
      <p class="brand-desc">Komunitas belajar jaringan, keamanan siber, dan sistem administrasi. Hubungi kami lewat media sosial di bawah.</p>
    </div>

    <div>
      <p class="col-title">Find Us</p>
       <div class="social-grid">

        <a class="social-btn" href="https://www.instagram.com/nevtelkom_tup" target="_blank">
          <div class="social-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </div>
          <div class="social-info">
            <span class="social-name">Instagram</span>
            <span class="social-handle">@nevtelkom_tup</span>
          </div>
        </a>

        <a class="social-btn" href="https://github.com/NEVPurwokerto-Repo" target="_blank">
          <div class="social-icon">
            <svg viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
          </div>
          <div class="social-info">
            <span class="social-name">GitHub</span>
            <span class="social-handle">netlabNEVPurwokerto-Repo</span>
          </div>
        </a>

        <a class="social-btn" href="http://linkedin.com/company/network-evolution-laboratory/" target="_blank">
          <div class="social-icon">
            <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </div>
          <div class="social-info">
            <span class="social-name">LinkedIn</span>
            <span class="social-handle">network evolution laboratory</span>
          </div>
        </a>

        

      </div>
    </div>
  </div>

  <div class="footer-divider"></div>

  <div class="footer-bottom">
    <p class="copy">© 2026 <span>NEV</span>. All rights reserved.</p>
    <p class="made-by"><span class="dot"></span> Always learning, always building.</p>
  </div>
</footer>
