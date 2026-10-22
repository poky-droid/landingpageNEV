<div class="visimisi-container">
    
    <!-- HEADER SECTION: JUDUL VISI & MISI (MERAH), SUBTITLE SINGKAT -->
    <div class="vm-header-wrap">
        <h2 class="vm-title">Visi & Misi Organisasi</h2>
        <p class="vm-subtitle">Komitmen terarah dan peta jalan Network Evolution dalam mencetak periset digital masa depan.</p>
    </div>

    <!-- 1. KARTU VISI UTAMA (BERSIH & ELEGAN) -->
    <div class="visi-card">
        <div class="visi-card-header">
            <div class="visi-badge">
                <span class="badge-dot"></span>
                VISI UTAMA
            </div>
            <span class="visi-org-name">NETWORK EVOLUTION</span>
        </div>

        <div class="visi-card-body">
            <blockquote class="visi-quote">
                “Menjadikan <strong class="hl-white">Network Evolution (NEV)</strong> sebagai keluarga riset yang <strong class="hl-red">kolaboratif, disiplin, dan progresif</strong>; tempat seluruh anggota bertumbuh dalam keahlian teknis (<strong class="hl-white">hardskill</strong>) dan kemampuan profesional (<strong class="hl-white">softskill</strong>), serta melahirkan karya ilmiah yang berdampak nyata bagi perkembangan teknologi <strong class="hl-white">jaringan</strong>, <strong class="hl-white">sysadmin</strong>, dan <strong class="hl-white">keamanan siber</strong>.”
            </blockquote>
            <div class="visi-watermark" aria-hidden="true">”</div>
        </div>
    </div>

    <!-- 2. HEADER MISI ORGANISASI (KONSISTEN SEPERTI DI VISI) -->
    <div class="misi-header-bar">
        <div class="misi-badge">
            <span class="badge-dot"></span>
            MISI UTAMA
        </div>
        <span class="misi-org-name">NETWORK EVOLUTION</span>
    </div>

    <!-- 3. GRID 6 MISI ORGANISASI (3 KOLOM PROPORSIONAL, TAMPILAN BERSIH & KONSISTEN) -->
    <div class="misi-grid">

        <!-- MISI 01 -->
        <div class="misi-card">
            <div class="misi-number">01</div>
            <h3 class="misi-title">Ekosistem Belajar Suportif</h3>
            <p class="misi-desc">Membangun ekosistem belajar yang suportif dan bertumbuh bersama.</p>
        </div>

        <!-- MISI 02 -->
        <div class="misi-card">
            <div class="misi-number">02</div>
            <h3 class="misi-title">Penguatan Hard Skill</h3>
            <p class="misi-desc">Menguatkan skill networking, sysadmin, dan cybersecurity melalui riset & praktik.</p>
        </div>

        <!-- MISI 03 -->
        <div class="misi-card">
            <div class="misi-number">03</div>
            <h3 class="misi-title">Softskill Profesional</h3>
            <p class="misi-desc">Mengembangkan softskill profesional: komunikasi, leadership, dan teamwork.</p>
        </div>

        <!-- MISI 04 -->
        <div class="misi-card">
            <div class="misi-number">04</div>
            <h3 class="misi-title">Budaya Riset & Dokumentasi</h3>
            <p class="misi-desc">Mendorong budaya riset, sharing, dan dokumentasi yang konsisten.</p>
        </div>

        <!-- MISI 05 -->
        <div class="misi-card">
            <div class="misi-number">05</div>
            <h3 class="misi-title">Sinergi Alumni & Praktisi</h3>
            <p class="misi-desc">Membuka kolaborasi serta wawasan dunia kerja bersama alumni & praktisi.</p>
        </div>

        <!-- MISI 06 -->
        <div class="misi-card">
            <div class="misi-number">06</div>
            <h3 class="misi-title">Kontribusi Berdampak</h3>
            <p class="misi-desc">Menghasilkan karya dan kontribusi yang berdampak.</p>
        </div>

    </div>
</div>

<style>
/* ==========================================================
   VISI & MISI SECTION (SOLID HITAM, KONSISTEN & BERSIH)
   ========================================================== */
.visimisi-section {
    padding: 48px 0 85px;
    background: #000000 !important;
    position: relative;
    z-index: 5;
    border-top: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.visimisi-container {
    max-width: 1180px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
}

/* ==========================================================
   HEADER SECTION: JUDUL VISI & MISI (MERAH), SUBTITLE SINGKAT
   ========================================================== */
.vm-header-wrap {
    text-align: center;
    max-width: 720px;
    margin: 0 auto 36px;
}

.vm-title {
    font-size: clamp(1.65rem, 2.4vw, 2.15rem);
    font-weight: 700;
    color: #FF0033 !important;
    text-shadow: 0 0 24px rgba(255, 0, 51, 0.45);
    line-height: 1.2;
    letter-spacing: -0.4px;
    margin: 0 0 12px 0;
}

.vm-subtitle {
    font-size: clamp(0.92rem, 1.2vw, 1.02rem);
    font-weight: 400;
    color: rgba(255, 255, 255, 0.6);
    line-height: 1.6;
    margin: 0;
}

/* ==========================================================
   1. KARTU VISI UTAMA (HERO CARD BERSIH & MEWAH)
   ========================================================== */
.visi-card {
    background: rgba(255, 255, 255, 0.025);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 20px;
    padding: 32px 36px;
    margin-bottom: 24px;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                border-color 0.3s ease,
                box-shadow 0.3s ease;
}

.visi-card:hover {
    transform: translateY(-4px);
    border-color: rgba(255, 0, 51, 0.38);
    box-shadow: 0 24px 50px rgba(0, 0, 0, 0.65),
                0 0 25px rgba(255, 0, 51, 0.14),
                inset 0 1px 0 rgba(255, 255, 255, 0.16);
}

.visi-card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}

.visi-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 0, 51, 0.1);
    border: 1px solid rgba(255, 0, 51, 0.28);
    padding: 4px 14px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 700;
    color: #FF0033;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.badge-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #FF0033;
    box-shadow: 0 0 8px #FF0033;
}

.visi-org-name {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: rgba(255, 255, 255, 0.45);
    text-transform: uppercase;
}

.visi-card-body {
    position: relative;
    z-index: 2;
}

.visi-quote {
    font-size: clamp(0.98rem, 1.15vw, 1.06rem);
    font-weight: 400;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.82);
    margin: 0;
    max-width: 980px;
    letter-spacing: 0.1px;
}

.hl-white {
    color: #ffffff;
    font-weight: 600;
}

.hl-red {
    color: #FF0033;
    font-weight: 600;
    text-shadow: 0 0 14px rgba(255, 0, 51, 0.3);
}

.visi-watermark {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-family: Georgia, serif;
    font-size: 150px;
    line-height: 1;
    color: rgba(255, 255, 255, 0.03);
    pointer-events: none;
    user-select: none;
    z-index: -1;
}

/* ==========================================================
   2. HEADER MISI ORGANISASI (KONSISTEN SEPERTI DI VISI)
   ========================================================== */
.misi-header-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 36px;
    margin-bottom: 20px;
    padding: 0 4px;
}

.misi-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 0, 51, 0.1);
    border: 1px solid rgba(255, 0, 51, 0.28);
    padding: 4px 14px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 700;
    color: #FF0033;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.misi-org-name {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: rgba(255, 255, 255, 0.45);
    text-transform: uppercase;
}

/* ==========================================================
   3. GRID 6 MISI ORGANISASI (3 KOLOM PROPORSIONAL)
   ========================================================== */
.misi-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 22px;
    width: 100%;
}

.misi-card {
    background: rgba(255, 255, 255, 0.025);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    padding: 28px 24px;
    box-shadow: 0 12px 32px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.08);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                border-color 0.3s ease,
                box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}

.misi-card:hover {
    transform: translateY(-5px);
    border-color: rgba(255, 0, 51, 0.36);
    box-shadow: 0 20px 44px rgba(0, 0, 0, 0.6),
                0 0 24px rgba(255, 0, 51, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.15);
}

.misi-number {
    font-family: 'JetBrains Mono', 'Fira Code', monospace;
    font-size: 1.55rem;
    font-weight: 800;
    color: #FF0033;
    text-shadow: 0 0 16px rgba(255, 0, 51, 0.38);
    letter-spacing: -0.5px;
    margin-bottom: 12px;
}

.misi-title {
    font-size: clamp(1.02rem, 1.2vw, 1.14rem);
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 10px 0;
    letter-spacing: -0.2px;
    line-height: 1.35;
}

.misi-desc {
    font-size: clamp(0.85rem, 1.02vw, 0.92rem);
    color: rgba(255, 255, 255, 0.65);
    line-height: 1.65;
    margin: 0;
    font-weight: 400;
}

/* ==========================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ========================================================== */
@media (max-width: 992px) {
    .misi-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }

    .visi-card {
        padding: 26px 24px;
    }
}

@media (max-width: 640px) {
    .visimisi-container {
        padding-left: 16px;
        padding-right: 16px;
    }

    .visimisi-section {
        padding: 36px 0 60px;
    }

    .visi-card {
        padding: 22px 18px;
        border-radius: 16px;
        margin-bottom: 18px;
    }

    .visi-card-header, .misi-header-bar {
        margin-bottom: 16px;
        padding-bottom: 12px;
    }

    .misi-header-bar {
        margin-top: 24px;
    }

    .visi-org-name, .misi-org-name {
        font-size: 9.5px;
        letter-spacing: 1px;
    }

    .visi-quote {
        font-size: 0.95rem;
        line-height: 1.75;
    }

    .visi-watermark {
        display: none;
    }

    .misi-grid {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .misi-card {
        padding: 22px 18px;
        border-radius: 16px;
    }

    .misi-number {
        font-size: 1.35rem;
        margin-bottom: 8px;
    }

    .vm-header-wrap {
        margin-bottom: 24px;
    }
}
</style>
