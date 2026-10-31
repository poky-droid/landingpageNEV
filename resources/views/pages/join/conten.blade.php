<!-- ==========================================================
     NEV OPEN RECRUITMENT PAGE (LET'S JOIN)
     Sleek, Clean, Consistent with Modules & Publications
     Standard Breakpoint: 768px & 480px
     ========================================================== -->
<div class="nev-join-wrap">

    <!-- ── HEADER ── -->
    <header class="join-header">
        <div class="join-badge">
            <span class="badge-dot"></span>
            <span>OPEN RECRUITMENT 2026</span>
        </div>
        <h1 class="join-title">Open Recruitment <span>NEV</span></h1>
        <p class="join-subtitle">
            Pendaftaran fungsionaris baru Laboratorium Network Evolution resmi dibuka mulai 
            <strong>26 Oktober s.d. 6 November 2026</strong>.
        </p>
    </header>


    <!-- ── COUNTDOWN TIMER ── -->
    <section class="join-countdown-box" aria-label="Hitung Mundur Pendaftaran">
        <div class="countdown-topbar">
            <div class="cd-status">
                <span class="cd-status-indicator"></span>
                <span id="countdownStatus">PENDAFTARAN SEDANG BERLANGSUNG</span>
            </div>
            <div class="cd-deadline">
                <span>Batas Akhir: <strong>6 November 2026</strong></span>
            </div>
        </div>

        <!-- 4-COLUMN RESPONSIVE TIMER GRID -->
        <div class="cd-timer-grid">
            <div class="cd-item">
                <span class="cd-val" id="cd-days">00</span>
                <span class="cd-unit">HARI</span>
            </div>
            <div class="cd-item">
                <span class="cd-val" id="cd-hours">00</span>
                <span class="cd-unit">JAM</span>
            </div>
            <div class="cd-item">
                <span class="cd-val" id="cd-minutes">00</span>
                <span class="cd-unit">MENIT</span>
            </div>
            <div class="cd-item cd-sec">
                <span class="cd-val" id="cd-seconds">00</span>
                <span class="cd-unit">DETIK</span>
            </div>
        </div>

        <div class="cd-action-wrap">
            <a href="https://forms.google.com" target="_blank" rel="noopener noreferrer" class="btn-join-cta">
                <span>Daftar Sekarang</span>
                <span class="cta-arrow">&rarr;</span>
            </a>
        </div>
    </section>


    <!-- ── POSTER & TIMELINE GRID ── -->
    <section class="join-content-grid" aria-label="Poster dan Alur Pendaftaran">
        
        <!-- POSTER SLOT -->
        <div class="join-card join-poster-card">
            <div class="card-label">POSTER OPREC</div>
            <div class="poster-display-box" id="posterTrigger">
                @if(file_exists(public_path('images/oprec/poster.jpg')))
                    <img src="{{ asset('images/oprec/poster.jpg') }}" alt="Poster Open Recruitment NEV" class="poster-image" loading="lazy">
                @else
                    <div class="poster-placeholder">
                        <img src="{{ asset('images/logoatas.png') }}" alt="Logo NEV" class="ph-logo" width="46" height="46">
                        <span class="ph-kicker">NETWORK EVOLUTION</span>
                        <h3 class="ph-heading">OPEN RECRUITMENT <span>2026</span></h3>
                        <p class="ph-dates">26 OKT &ndash; 6 NOV 2026</p>
                        <span class="ph-tag">Poster Resmi Segera Hadir</span>
                    </div>
                @endif
            </div>
        </div>

        <!-- ALUR SELEKSI (SESUAI DARI GAMBAR USER) -->
        <div class="join-card join-timeline-card">
            <div class="card-label">ALUR SELEKSI</div>
            <h2 class="timeline-title">Tahapan Pendaftaran</h2>

            <!-- TIMELINE BANNER GAMBAR ASLI -->
            <div class="timeline-banner-box">
                <img src="{{ asset('images/oprec/timeline-banner.png') }}" alt="Timeline Seleksi Oprec NEV" class="banner-img" loading="lazy">
            </div>

            <!-- TIMELINE LIST 4 TAHAP -->
            <ol class="timeline-simple-list">
                <li class="t-item active">
                    <div class="t-bullet">1</div>
                    <div class="t-text">
                        <div class="t-step-name">Pendaftaran</div>
                        <div class="t-step-date">26 Oktober &ndash; 6 November 2026</div>
                    </div>
                </li>
                <li class="t-item">
                    <div class="t-bullet">2</div>
                    <div class="t-text">
                        <div class="t-step-name">Seleksi Presentasi</div>
                        <div class="t-step-date">9, 12, dan 16 November 2026</div>
                    </div>
                </li>
                <li class="t-item">
                    <div class="t-bullet">3</div>
                    <div class="t-text">
                        <div class="t-step-name">Wawancara</div>
                        <div class="t-step-date">19 November 2026</div>
                    </div>
                </li>
                <li class="t-item">
                    <div class="t-bullet">4</div>
                    <div class="t-text">
                        <div class="t-step-name">Pengumuman Kelulusan</div>
                        <div class="t-step-date">27 November 2026</div>
                    </div>
                </li>
            </ol>
        </div>

    </section>

</div>


<!-- ==========================================
     CSS STYLING (KONSISTEN, CLEAN, RESPONSIVE)
     ========================================== -->
<style>
* {
    box-sizing: border-box;
}

.nev-join-wrap {
    width: 100%;
    max-width: 960px;
    margin: 0 auto;
    padding: 0 0 40px 0;
    color: #eee;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
}

/* 1. HEADER */
.join-header {
    text-align: center;
    margin-bottom: clamp(24px, 4vw, 36px);
}

.join-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 0, 51, 0.1);
    border: 1px solid rgba(255, 0, 51, 0.35);
    padding: 4px 14px;
    border-radius: 999px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: clamp(10px, 1.8vw, 11px);
    font-weight: 700;
    color: #FF0033;
    letter-spacing: 1.5px;
    margin-bottom: 14px;
}

.badge-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #FF0033;
    box-shadow: 0 0 8px #FF0033;
}

.join-title {
    font-size: clamp(1.8rem, 7vw, 3.2rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -1px;
    color: #eee;
    margin: 0 0 12px 0;
}

.join-title span {
    color: #FF0033;
}

.join-subtitle {
    font-size: clamp(12px, 2.2vw, 14px);
    color: #dfd6d6b2;
    max-width: min(520px, 90vw);
    margin: 0 auto;
    line-height: 1.7;
}

.join-subtitle strong {
    color: #eee;
}


/* 2. COUNTDOWN BOX */
.join-countdown-box {
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: clamp(20px, 4vw, 30px);
    margin-bottom: clamp(24px, 4vw, 36px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

.countdown-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}

.cd-status {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: clamp(10px, 1.8vw, 11px);
    font-weight: 700;
    letter-spacing: 1px;
    color: #eee;
}

.cd-status-indicator {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #00FF66;
    box-shadow: 0 0 8px #00FF66;
}

.cd-deadline {
    font-family: 'IBM Plex Mono', monospace;
    font-size: clamp(10px, 1.8vw, 11px);
    color: #8890a0;
}

.cd-deadline strong {
    color: #FF0033;
}

/* 4-COLUMN TIMER GRID (RESPONSIVE) */
.cd-timer-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: clamp(8px, 2vw, 14px);
    margin-bottom: 24px;
}

.cd-item {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: clamp(12px, 2.5vw, 18px) 6px;
    text-align: center;
    transition: transform 0.2s ease, border-color 0.2s ease;
}

.cd-item:hover {
    border-color: rgba(255, 0, 51, 0.4);
}

.cd-val {
    display: block;
    font-family: 'IBM Plex Mono', monospace;
    font-size: clamp(1.4rem, 5vw, 2.6rem);
    font-weight: 800;
    line-height: 1;
    color: #fff;
    margin-bottom: 6px;
}

.cd-unit {
    display: block;
    font-family: 'IBM Plex Mono', monospace;
    font-size: clamp(9px, 1.8vw, 11px);
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #7b8396;
}

.cd-item.cd-sec .cd-val {
    color: #FF0033;
    text-shadow: 0 0 16px rgba(255, 0, 51, 0.4);
}

/* CTA BUTTON */
.cd-action-wrap {
    text-align: center;
}

.btn-join-cta {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
    max-width: 420px;
    padding: 15px 28px;
    background: #050505;
    border: 1px solid #1a1a1a;
    color: #ccc;
    font-size: clamp(11px, 2vw, 13px);
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
    overflow: hidden;
    position: relative;
    border-radius: 8px;
    transition: color 0.3s, border-color 0.4s, background 0.3s;
}

.btn-join-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: #FF0033;
    transform: translateX(-101%);
    transition: transform 0.4s cubic-bezier(0.77, 0, 0.18, 1);
    z-index: 0;
}

.btn-join-cta:hover::before {
    transform: translateX(0);
}

.btn-join-cta:hover {
    color: #fff;
    border-color: #FF0033;
    box-shadow: 0 0 20px rgba(255, 0, 51, 0.4);
}

.btn-join-cta span,
.btn-join-cta .cta-arrow {
    position: relative;
    z-index: 1;
}

.cta-arrow {
    font-size: 14px;
    transition: transform 0.25s ease;
}

.btn-join-cta:hover .cta-arrow {
    transform: translateX(4px);
}


/* 3. POSTER & TIMELINE GRID */
.join-content-grid {
    display: grid;
    grid-template-columns: 330px 1fr;
    gap: 22px;
    align-items: start;
}

.join-card {
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: clamp(18px, 3.5vw, 24px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
}

.card-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    font-weight: 700;
    color: #FF0033;
    letter-spacing: 1.5px;
    margin-bottom: 12px;
}

/* POSTER CARD */
.poster-display-box {
    border-radius: 10px;
    overflow: hidden;
    background: #050508;
    border: 1px solid rgba(255, 255, 255, 0.06);
    aspect-ratio: 3/4.2;
    display: flex;
    align-items: center;
    justify-content: center;
}

.poster-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.poster-placeholder {
    padding: 20px 14px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
    box-sizing: border-box;
}

.ph-logo {
    margin-bottom: 10px;
}

.ph-kicker {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9px;
    letter-spacing: 2px;
    color: #8890a0;
    margin-bottom: 8px;
}

.ph-heading {
    font-size: clamp(1.1rem, 3vw, 1.35rem);
    font-weight: 800;
    color: #eee;
    line-height: 1.15;
    margin: 0 0 6px 0;
}

.ph-heading span {
    color: #FF0033;
}

.ph-dates {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: #fff;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 4px 10px;
    border-radius: 999px;
    margin: 6px 0 14px 0;
}

.ph-tag {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    color: #6c7385;
}


/* TIMELINE CARD */
.timeline-title {
    font-size: clamp(1.15rem, 3vw, 1.35rem);
    font-weight: 700;
    color: #eee;
    margin: 0 0 16px 0;
}

.timeline-banner-box {
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, 0.08);
    background: #000;
    margin-bottom: 18px;
}

.banner-img {
    width: 100%;
    height: auto;
    display: block;
}

/* LIST TAHAPAN */
.timeline-simple-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.t-item {
    display: flex;
    align-items: center;
    gap: 14px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 10px;
    padding: 12px 14px;
    transition: border-color 0.2s ease;
}

.t-item.active {
    border-color: rgba(255, 0, 51, 0.35);
    background: rgba(255, 0, 51, 0.04);
}

.t-bullet {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.06);
    font-family: 'IBM Plex Mono', monospace;
    font-weight: 700;
    font-size: 12px;
    color: #8890a0;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.t-item.active .t-bullet {
    background: #FF0033;
    color: #fff;
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.5);
}

.t-text {
    flex-grow: 1;
}

.t-step-name {
    font-size: clamp(13px, 2vw, 14px);
    font-weight: 700;
    color: #eee;
    margin-bottom: 2px;
}

.t-step-date {
    font-family: 'IBM Plex Mono', monospace;
    font-size: clamp(11px, 1.8vw, 12px);
    color: #FF0033;
}


/* ==========================================
     RESPONSIVE BREAKPOINTS (768px & 480px STANDAR)
     ========================================== -->
@media (max-width: 768px) {
    .join-content-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .join-poster-card {
        max-width: 420px;
        margin: 0 auto;
        width: 100%;
    }

    .join-card,
    .join-countdown-box {
        border-radius: 14px;
    }

    .countdown-topbar {
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }
}

@media (max-width: 480px) {
    .cd-timer-grid {
        gap: 6px;
    }

    .cd-item {
        padding: 10px 4px;
        border-radius: 8px;
    }

    .t-item {
        padding: 10px 12px;
        gap: 10px;
    }
}
</style>


<!-- ==========================================
     COUNTDOWN SCRIPT (REAL-TIME)
     ========================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const startDate = new Date('2026-10-26T00:00:00+07:00').getTime();
    const endDate   = new Date('2026-11-06T23:59:59+07:00').getTime();

    const elDays    = document.getElementById('cd-days');
    const elHours   = document.getElementById('cd-hours');
    const elMinutes = document.getElementById('cd-minutes');
    const elSeconds = document.getElementById('cd-seconds');
    const elStatus  = document.getElementById('countdownStatus');

    function update() {
        const now = new Date().getTime();
        let target = endDate;

        if (now < startDate) {
            target = startDate;
            if (elStatus) elStatus.textContent = 'PENDAFTARAN DIBUKA DALAM:';
        } else if (now <= endDate) {
            target = endDate;
            if (elStatus) elStatus.textContent = 'PENDAFTARAN SEDANG BERLANGSUNG';
        } else {
            if (elDays) elDays.textContent = '00';
            if (elHours) elHours.textContent = '00';
            if (elMinutes) elMinutes.textContent = '00';
            if (elSeconds) elSeconds.textContent = '00';
            if (elStatus) elStatus.textContent = 'PENDAFTARAN TELAH DITUTUP';
            return;
        }

        const diff = target - now;
        if (diff > 0) {
            const d = Math.floor(diff / (1000 * 60 * 60 * 24));
            const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const s = Math.floor((diff % (1000 * 60)) / 1000);

            if (elDays) elDays.textContent = String(d).padStart(2, '0');
            if (elHours) elHours.textContent = String(h).padStart(2, '0');
            if (elMinutes) elMinutes.textContent = String(m).padStart(2, '0');
            if (elSeconds) elSeconds.textContent = String(s).padStart(2, '0');
        }
    }

    update();
    setInterval(update, 1000);
});
</script>
