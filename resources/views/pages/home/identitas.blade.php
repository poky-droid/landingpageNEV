<div class="identitas-wrapper">
    <div class="identitas-container">
        
        <!-- STRIP FULL-WIDTH GLASSMORPHISM (BENERAN FULL MENTOK TANPA GARIS SAMPING & TANPA PADDING SAMPING) -->
        <div class="identitas-glass-strip">
            
            <div class="identitas-inner-content">
                <!-- SUB-BAB / TAG ATAS (KECIL ELEGAN) -->
                <div class="identitas-tag-pill">TENTANG KAMI</div>

                <!-- JUDUL SECTION DI TENGAH: "Apa itu NEV?" DENGAN AKSEN MERAH -->
                <h2 class="identitas-main-title">
                    Apa itu <span class="title-accent">NEV?</span>
                </h2>

                <!-- PARAGRAF PENJELASAN DI BAWAHNYA: RATA TENGAH, BERSIH, MUDAH DIBACA -->
                <p class="identitas-desc">
                    <strong class="desc-highlight">NEV (Network Evolution)</strong> adalah kelompok riset mahasiswa <strong class="desc-highlight">Telkom University Purwokerto</strong> yang berdedikasi dalam eksplorasi dan pengembangan riset terapan di bidang <em>Networking</em>, <em>System Administration</em>, dan <em>Cyber Security</em> untuk mencetak talenta serta infrastruktur teknologi digital masa depan.
                </p>
            </div>

        </div>

    </div>
</div>

<style>
/* ==========================================================
   IDENTITAS ORGANISASI SECTION: FULL MENTOK TEPI KE TEPI
   TANPA PADDING SAMPING & TANPA GARIS BORDER SAMPING
   ========================================================== */
.identitas-section {
    background: transparent !important;
    position: relative;
    z-index: 5;
    padding: 0 !important;
    margin: 0 !important;
    width: 100% !important;
    height: auto !important;
    min-height: 0 !important;
}

/* Kontainer Benar-benar Full 100% Tanpa Padding Samping */
.identitas-container {
    max-width: 100% !important;
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
}

/* ==========================================================
   STRIP GLASSMORPHISM FULL-WIDTH
   (TANPA BORDER-RADIUS, TANPA BORDER KIRI/KANAN)
   ========================================================== */
.identitas-glass-strip {
    width: 100% !important;
    background: rgba(14, 14, 18, 0.75);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-left: none !important;
    border-right: none !important;
    border-radius: 0 !important;
    padding: 60px 24px;
    margin: 0 !important;
    text-align: center;
    position: relative;
    overflow: hidden;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5);
}

/* Ambient Glow Merah Halus di Bagian Tengah Atas Strip */
.identitas-glass-strip::before {
    content: "";
    position: absolute;
    top: -60px;
    left: 50%;
    transform: translateX(-50%);
    width: 480px;
    height: 180px;
    background: radial-gradient(circle, rgba(255, 0, 51, 0.18) 0%, transparent 70%);
    filter: blur(45px);
    pointer-events: none;
}

/* Konten Teks di Dalamnya Diberi Batas Nyaman Mengikuti Navbar */
.identitas-inner-content {
    max-width: 1180px;
    width: 100%;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

/* ==========================================================
   TAG PILL / SUB-BAB ATAS
   ========================================================== */
.identitas-tag-pill {
    display: inline-block;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.55);
    margin-bottom: 16px;
}

/* ==========================================================
   JUDUL UTAMA DI TENGAH: APA ITU NEV? (KONSISTEN & PROPORSIONAL)
   ========================================================== */
.identitas-main-title {
    font-size: clamp(1.65rem, 2.4vw, 2.15rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.2;
    letter-spacing: -0.4px;
    margin: 0 0 16px 0;
}

.title-accent {
    color: #FF0033;
    text-shadow: 0 0 24px rgba(255, 0, 51, 0.5);
}

/* ==========================================================
   PARAGRAF PENJELASAN DI BAWAHNYA
   ========================================================== */
.identitas-desc {
    font-size: clamp(0.98rem, 1.15vw, 1.06rem);
    font-weight: 400;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.82);
    max-width: 960px;
    margin: 0 auto;
    letter-spacing: 0.1px;
}

.desc-highlight {
    color: #ffffff;
    font-weight: 600;
}

.identitas-desc em {
    color: rgba(255, 255, 255, 0.95);
    font-style: normal;
    font-weight: 500;
}

/* ==========================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ========================================================== */
@media (max-width: 768px) {
    .identitas-glass-strip {
        padding: 44px 16px;
    }

    .identitas-tag-pill {
        font-size: 10px;
        letter-spacing: 2px;
        margin-bottom: 12px;
    }

    .identitas-main-title {
        font-size: 1.55rem;
        margin-bottom: 14px;
    }

    .identitas-desc {
        font-size: 0.95rem;
        line-height: 1.75;
    }
}
</style>
