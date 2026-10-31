<!-- ==========================================================
     NEV NEWS & COMMUNITY CSR DASHBOARD
     100% Replication of Reference Layout in Dark Mode (NEV Theme)
     Typography: Inter (Matches Web NEV)
     ========================================================== -->

<!-- ==========================================================
     TOP BANNER: TICKER STRIP + PHOTO BANNER WITH "NEWS"
     100% Full-Width Mentok Kanan Kiri & NEWS di Tengah
     ========================================================== -->
<header class="ref-banner-header">
    <!-- Top Running Marquee Strip (Red with Left Blue Accent) -->
    <div class="banner-top-strip">
        <div class="strip-blue-accent"></div>
        <div class="strip-red-marquee">
            <div class="marquee-text-track">
                <span>📢 NEV Activity Update: Jelajahi dokumentasi kegiatan terbaru mulai dari Studi Banding, Sharing Knowledge, hingga Expo Riset — 🚀 Terus aktif berkolaborasi dan berinovasi bersama Network Evolution Research Group — 💡 Advancing Knowledge, Building a Secure and Connected Future.&nbsp;&nbsp;&nbsp;&nbsp;✦&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span>📢 NEV Activity Update: Jelajahi dokumentasi kegiatan terbaru mulai dari Studi Banding, Sharing Knowledge, hingga Expo Riset — 🚀 Terus aktif berkolaborasi dan berinovasi bersama Network Evolution Research Group — 💡 Advancing Knowledge, Building a Secure and Connected Future.&nbsp;&nbsp;&nbsp;&nbsp;✦&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
    </div>

    <!-- Photo Banner with Dark Overlay & Centered "NEWS" -->
    <div class="banner-photo-wrap">
        <img src="{{ asset('images/news/AYP09997.JPG') }}" alt="News Header Banner" class="banner-bg-img">
        <div class="banner-dark-overlay"></div>

        <div class="banner-news-title-box">
            <h1 class="banner-news-text">NEWS</h1>
        </div>
    </div>
</header>

<div class="ref-news-wrapper">

    <!-- ==========================================================
         MAIN CONTENT CONTAINER (100% REPLICATION OF REFERENCE)
         ========================================================== -->
    <main class="ref-main-content">

        <!-- ======================================================
             SECTION 1: NEWS (1 UNIFIED CARD - AGENDA RESMI NEV)
             ====================================================== -->
        <section class="news-unified-card">
            <!-- LEFT: Hero Full-Bleed Image with 4-Photo Auto-Slider & Bottom Overlay Text -->
            <article class="unified-hero-pane news-open-modal" 
                     data-id="1"
                     data-title="Recap of Studi Banding: Diskusi & Sharing Bersama Telkom University Bandung" 
                     data-category="STUDI BANDING" 
                     data-date="12 DES 2025" 
                     data-img="{{ asset('images/news/studibanding-cover.jpg') }}" 
                     data-content="[RECAP OF STUDI BANDING]&#10;&#10;Network Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Laboratory & Mobile Communication Laboratory🚀&#10;&#10;Kegiatan ini menjadi momen berharga untuk saling bertukar wawasan, pengalaman, serta memperluas relasi dalam dunia teknologi dan jaringan. Semoga kolaborasi dan silaturahmi yang terjalin dapat membawa inovasi serta semangat baru untuk terus berkembang bersama 💡✨&#10;&#10;Terima kasih atas kunjungan dan sharing session yang luar biasa, NEVERS!&#10;Sampai jumpa di kesempatan berikutnya 🙌">
                
                <!-- 4-PHOTO AUTO SLIDER TRACK (UNCROPPED DENGAN AMBIENT BACKDROP) -->
                <div class="hero-slider-track" id="heroPhotoSlider">
                    <div class="hero-slide-item slide-active">
                        <img src="{{ asset('images/news/studibanding-cover.jpg') }}" alt="" class="hero-backdrop-blur" aria-hidden="true">
                        <img src="{{ asset('images/news/studibanding-cover.jpg') }}" alt="Studi Banding Telkom University Bandung" class="unified-hero-img">
                    </div>
                    <div class="hero-slide-item">
                        <img src="{{ asset('images/news/studibanding-slide2.jpg') }}" alt="" class="hero-backdrop-blur" aria-hidden="true">
                        <img src="{{ asset('images/news/studibanding-slide2.jpg') }}" alt="Studi Banding Sesi Diskusi 2" class="unified-hero-img">
                    </div>
                    <div class="hero-slide-item">
                        <img src="{{ asset('images/news/studibanding-diskusi.jpg') }}" alt="" class="hero-backdrop-blur" aria-hidden="true">
                        <img src="{{ asset('images/news/studibanding-diskusi.jpg') }}" alt="Studi Banding Diskusi Laboratorium" class="unified-hero-img">
                    </div>
                    <div class="hero-slide-item">
                        <img src="{{ asset('images/news/studibanding-group.jpg') }}" alt="" class="hero-backdrop-blur" aria-hidden="true">
                        <img src="{{ asset('images/news/studibanding-group.jpg') }}" alt="Studi Banding Foto Bersama Delegasi" class="unified-hero-img">
                    </div>
                </div>

                <!-- SLIDER INDICATORS & COUNTER -->
                <div class="hero-slider-controls">
                    <div class="hero-slider-dots">
                        <span class="slider-dot active" data-slide="0"></span>
                        <span class="slider-dot" data-slide="1"></span>
                        <span class="slider-dot" data-slide="2"></span>
                        <span class="slider-dot" data-slide="3"></span>
                    </div>
                    <span class="slider-counter" id="heroSliderCounter">1 / 4</span>
                </div>

                <div class="unified-hero-overlay"></div>

                <div class="unified-hero-content">
                    <div class="featured-tag-row">
                        <span class="badge-pill badge-coral">STUDI BANDING</span>
                        <span class="featured-date">12 DES 2025</span>
                    </div>

                    <h2 class="featured-title">Recap of Studi Banding: Diskusi &amp; Sharing Bersama Telkom University Bandung</h2>

                    <p class="featured-desc">
                        Network Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Laboratory &amp; Mobile Communication Laboratory 🚀
                    </p>

                    <a href="{{ url('/news/1') }}" class="read-more-link coral-link">Read More ...</a>
                </div>
            </article>

            <!-- RIGHT: 6 News Rows Inside The Exact Same Card -->
            <div class="unified-list-pane">
                <!-- 1. STUDI BANDING UNSOED -->
                <a href="{{ url('/news/7') }}" class="unified-row-item news-open-modal" 
                   data-id="7"
                   data-title="Studi Banding: UKM ITC FMIPA UNSOED x NEV Telkom Purwokerto" 
                   data-category="STUDI BANDING" 
                   data-date="03 MEI 2026" 
                   data-img="{{ asset('images/news/stuban-1.jpg') }}" 
                   data-content="Satu pertemuan, banyak pengalaman dan inspirasi. Melalui kegiatan studi banding ini, UKM ITC FMIPA UNSOED bersama NEV Telkom Purwokerto saling berbagi wawasan, pengalaman, serta inovasi dalam bidang teknologi dan organisasi.">
                    <div class="stacked-thumb-wrap">
                        <img src="{{ asset('images/news/stuban-1.jpg') }}" alt="Studi Banding UNSOED x NEV" class="stacked-thumb">
                        <span class="stacked-badge tag-coral">STUDI BANDING</span>
                    </div>
                    <div class="stacked-content">
                        <h3 class="stacked-title">Studi Banding: UKM ITC FMIPA UNSOED x NEV Telkom Purwokerto</h3>
                        <span class="stacked-date">03 MEI 2026 • <span class="row-read-more">Detail &rarr;</span></span>
                    </div>
                </a>

                <!-- 2. SHARING KNOWLEDGE -->
                <a href="{{ url('/news/3') }}" class="unified-row-item news-open-modal" 
                   data-id="3"
                   data-title="Recap of Sharing Knowledge: Kolaborasi Bersama Adaptive Network Telkom University" 
                   data-category="SHARING KNOWLEDGE" 
                   data-date="13 DES 2025" 
                   data-img="{{ asset('images/news/adaptive-1.jpg') }}" 
                   data-content="Network Evolution kembali mengadakan kegiatan Sharing Knowledge sebagai wadah untuk berbagi wawasan, pengalaman, dan ilmu pengetahuan antar anggota 🚀">
                    <div class="stacked-thumb-wrap">
                        <img src="{{ asset('images/news/adaptive-1.jpg') }}" alt="Sharing Knowledge Adaptive Network" class="stacked-thumb">
                        <span class="stacked-badge tag-green">SHARING</span>
                    </div>
                    <div class="stacked-content">
                        <h3 class="stacked-title">Recap of Sharing Knowledge: Kolaborasi Bersama Adaptive Network Telkom University</h3>
                        <span class="stacked-date">13 DES 2025 • <span class="row-read-more">Detail &rarr;</span></span>
                    </div>
                </a>

                <!-- 3. MAKRAB -->
                <a href="{{ url('/news/2') }}" class="unified-row-item news-open-modal" 
                   data-id="2"
                   data-title="Recap of Malam Keakraban: Mempererat Solidaritas & Rasa Kekeluargaan" 
                   data-category="MAKRAB" 
                   data-date="11 JAN 2026" 
                   data-img="{{ asset('images/news/makrab-cover.jpg') }}" 
                   data-content="Network Evolution kembali mengadakan malam keakraban sebagai momen untuk mempererat solidaritas, membangun komunikasi, serta memperkuat rasa kekeluargaan antar anggota 🤝🔥">
                    <div class="stacked-thumb-wrap">
                        <img src="{{ asset('images/news/makrab-cover.jpg') }}" alt="Recap of Malam Keakraban" class="stacked-thumb">
                        <span class="stacked-badge tag-purple">MAKRAB</span>
                    </div>
                    <div class="stacked-content">
                        <h3 class="stacked-title">Recap of Malam Keakraban: Mempererat Solidaritas & Rasa Kekeluargaan</h3>
                        <span class="stacked-date">11 JAN 2026 • <span class="row-read-more">Detail &rarr;</span></span>
                    </div>
                </a>

                <!-- 4. EXPO 2026 -->
                <a href="{{ url('/news/4') }}" class="unified-row-item news-open-modal" 
                   data-id="4"
                   data-title="Recap of Mini Research Expo HMTT 2026: Inovasi & Pengembangan Jaringan" 
                   data-category="EXPO 2026" 
                   data-date="01 MAR 2026" 
                   data-img="{{ asset('images/news/expo-cover.jpg') }}" 
                   data-content="Network Evolution turut berpartisipasi dalam kegiatan Mini Research Expo HMTT 2026 sebagai wadah untuk memperkenalkan inovasi, riset, dan pengembangan di bidang teknologi serta jaringan 🌐✨">
                    <div class="stacked-thumb-wrap">
                        <img src="{{ asset('images/news/expo-cover.jpg') }}" alt="Mini Research Expo HMTT 2026" class="stacked-thumb">
                        <span class="stacked-badge tag-green">EXPO 2026</span>
                    </div>
                    <div class="stacked-content">
                        <h3 class="stacked-title">Recap of Mini Research Expo HMTT 2026: Inovasi & Pengembangan Jaringan</h3>
                        <span class="stacked-date">01 MAR 2026 • <span class="row-read-more">Detail &rarr;</span></span>
                    </div>
                </a>

                <!-- 5. PENGMAS LKS -->
                <a href="{{ url('/news/5') }}" class="unified-row-item news-open-modal" 
                   data-id="5"
                   data-title="Recap of Pengabdian Masyarakat: Lomba Kompetensi Siswa (LKS) SMK 2026" 
                   data-category="PENGMAS" 
                   data-date="15 FEB 2026" 
                   data-img="{{ asset('images/news/lks-1.jpg') }}" 
                   data-content="Network Evolution turut berpartisipasi dalam kegiatan Pengabdian Masyarakat pada ajang Lomba Kompetensi Siswa (LKS) SMK 2026 sebagai bentuk kontribusi dalam mendukung pengembangan kompetensi dan semangat belajar siswa di bidang teknologi jaringan 🌐🚀">
                    <div class="stacked-thumb-wrap">
                        <img src="{{ asset('images/news/lks-1.jpg') }}" alt="Pengmas LKS SMK 2026" class="stacked-thumb">
                        <span class="stacked-badge tag-coral">PENGMAS</span>
                    </div>
                    <div class="stacked-content">
                        <h3 class="stacked-title">Recap of Pengabdian Masyarakat: Lomba Kompetensi Siswa (LKS) SMK 2026</h3>
                        <span class="stacked-date">15 FEB 2026 • <span class="row-read-more">Detail &rarr;</span></span>
                    </div>
                </a>

                <!-- 6. BOOTCAMP MASTERING VPN -->
                <a href="{{ url('/news/6') }}" class="unified-row-item news-open-modal" 
                   data-id="6"
                   data-title="Recap of Bootcamp: Mastering VPN — Building Your Own Gateway to the Internet" 
                   data-category="BOOTCAMP" 
                   data-date="28 FEB 2026" 
                   data-img="{{ asset('images/news/bootcamp-1.jpg') }}" 
                   data-content="Network Evolution telah sukses menyelenggarakan Bootcamp Mastering VPN: Building Your Own Gateway to the Internet, memperdalam pemahaman teknologi Virtual Private Network (VPN) serta konektivitas aman dan andal 🚀">
                    <div class="stacked-thumb-wrap">
                        <img src="{{ asset('images/news/bootcamp-1.jpg') }}" alt="Bootcamp Mastering VPN" class="stacked-thumb">
                        <span class="stacked-badge tag-purple">BOOTCAMP</span>
                    </div>
                    <div class="stacked-content">
                        <h3 class="stacked-title">Recap of Bootcamp: Mastering VPN — Building Your Own Gateway to the Internet</h3>
                        <span class="stacked-date">28 FEB 2026 • <span class="row-read-more">Detail &rarr;</span></span>
                    </div>
                </a>
            </div>
        </section>


        <!-- ======================================================
             SECTION 2: AGENDA & JADWAL KEGIATAN LAB (PERSIS REFERENSI)
             ====================================================== -->
        <section class="agenda-exact-section">
            <div class="agenda-exact-card">
                
                <!-- TOP HEADER BAR -->
                <div class="agenda-exact-header">
                    <div class="agenda-title-wrap">
                        <span class="agenda-glow-dot"></span>
                        <h2 class="agenda-main-title">AGENDA &amp; JADWAL KEGIATAN LAB</h2>
                        <span class="agenda-pill-badge">NEV 2026</span>
                    </div>

                    <!-- Filter Tabs -->
                    <div class="agenda-filter-tabs">
                        <button type="button" class="agenda-tab-btn active" data-filter="all">Semua</button>
                        <button type="button" class="agenda-tab-btn" data-filter="workshop">Workshop</button>
                        <button type="button" class="agenda-tab-btn" data-filter="pelatihan">Pelatihan Lab</button>
                        <button type="button" class="agenda-tab-btn" data-filter="event">Event Publik</button>
                    </div>
                </div>

                <!-- 2 COLUMNS: CALENDAR + AGENDA LIST -->
                <div class="agenda-exact-body">
                    
                    <!-- LEFT COLUMN: CALENDAR -->
                    <div class="agenda-cal-box">
                        <div class="agenda-cal-nav">
                            <button type="button" class="cal-nav-btn" id="calPrevBtn" aria-label="Bulan Sebelumnya">«</button>
                            <span class="cal-month-heading" id="calMonthDisplay">OKTOBER, 2026</span>
                            <button type="button" class="cal-nav-btn" id="calNextBtn" aria-label="Bulan Berikutnya">»</button>
                        </div>

                        <div class="cal-weekdays-row">
                            <span>MIN</span><span>SEN</span><span>SEL</span><span>RAB</span><span>KAM</span><span>JUM</span><span>SAB</span>
                        </div>

                        <div class="cal-grid-cells" id="calDatesGrid">
                            <!-- Dynamic Calendar Cells via JS -->
                        </div>

                        <!-- Calendar Legend -->
                        <div class="cal-legend-exact">
                            <span class="legend-item"><span class="dot-color dot-green"></span> Workshop &amp; Expo</span>
                            <span class="legend-item"><span class="dot-color dot-purple"></span> Pelatihan &amp; Makrab</span>
                            <span class="legend-item"><span class="dot-color dot-coral"></span> Event / Studi Banding</span>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: DAFTAR AGENDA KEGIATAN LAB -->
                    <div class="agenda-list-box">
                        <div class="agenda-list-topbar">
                            <div class="list-heading-wrap">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>DAFTAR AGENDA KEGIATAN LAB</span>
                            </div>
                            <span class="agenda-count-badge" id="agendaCountDisplay">9 Agenda</span>
                        </div>

                        <div class="agenda-items-container" id="agendaItemsContainer">
                            
                            <!-- ITEM 1: 29 OKT 2026 (OPREC NEV) -->
                            <article class="agenda-row-card" data-category="event" data-day="29" data-month="9" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">29</span>
                                    <span class="agenda-month-sub">OKT</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-event">OPREC NEV</span>
                                        <span class="agenda-time-text">08.00 – Selesai</span>
                                    </div>
                                    <h4 class="agenda-row-title">Open Recruitment Calon Anggota Baru NEV 2026</h4>
                                    <span class="agenda-loc-text">📍 Lab Network Evolution (NEV)</span>
                                </div>
                                <a href="{{ url('/news/8') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 2: 24 OKT 2026 (OPEN LABORATORY) -->
                            <article class="agenda-row-card" data-category="workshop" data-day="24" data-month="9" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">24</span>
                                    <span class="agenda-month-sub">OKT</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-workshop">OPEN LABORATORY</span>
                                        <span class="agenda-time-text">09.30 – 15.30 WIB</span>
                                    </div>
                                    <h4 class="agenda-row-title">Open Laboratory Network Evolution (NEV)</h4>
                                    <span class="agenda-loc-text">📍 Lab NETSEC</span>
                                </div>
                                <a href="{{ url('/news/9') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 3: 03 MEI 2026 (STUDI BANDING UNSOED) -->
                            <article class="agenda-row-card" data-category="event" data-day="3" data-month="4" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">03</span>
                                    <span class="agenda-month-sub">MEI</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-event">STUDI BANDING</span>
                                        <span class="agenda-time-text">09.00 – 15.00 WIB</span>
                                    </div>
                                    <h4 class="agenda-row-title">Studi Banding: UKM ITC FMIPA UNSOED x NEV Telkom Purwokerto</h4>
                                    <span class="agenda-loc-text">📍 Aula &amp; Lab Network Evolution Telkom Purwokerto</span>
                                </div>
                                <a href="{{ url('/news/7') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 4: 01 MAR 2026 (MINI RESEARCH EXPO) -->
                            <article class="agenda-row-card" data-category="workshop" data-day="1" data-month="2" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">01</span>
                                    <span class="agenda-month-sub">MAR</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-workshop">RESEARCH EXPO</span>
                                        <span class="agenda-time-text">08.30 – 16.00 WIB</span>
                                    </div>
                                    <h4 class="agenda-row-title">Mini Research Expo HMTT 2026: Inovasi &amp; Pengembangan Jaringan</h4>
                                    <span class="agenda-loc-text">📍 Hall Utama Telkom University Purwokerto</span>
                                </div>
                                <a href="{{ url('/news/4') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 5: 28 FEB 2026 (BOOTCAMP MASTERING VPN) -->
                            <article class="agenda-row-card" data-category="pelatihan" data-day="28" data-month="1" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">28</span>
                                    <span class="agenda-month-sub">FEB</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-pelatihan">BOOTCAMP</span>
                                        <span class="agenda-time-text">09.00 – 16.00 WIB</span>
                                    </div>
                                    <h4 class="agenda-row-title">Bootcamp: Mastering VPN — Gateway to the Internet</h4>
                                    <span class="agenda-loc-text">📍 Lab Komputer Network Evolution (NEV)</span>
                                </div>
                                <a href="{{ url('/news/6') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 6: 15 FEB 2026 (PENGMAS LKS SMK) -->
                            <article class="agenda-row-card" data-category="event" data-day="15" data-month="1" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">15</span>
                                    <span class="agenda-month-sub">FEB</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-event">PENGMAS</span>
                                        <span class="agenda-time-text">08.00 – Selesai</span>
                                    </div>
                                    <h4 class="agenda-row-title">Pengabdian Masyarakat: Lomba Kompetensi Siswa (LKS) SMK 2026</h4>
                                    <span class="agenda-loc-text">📍 SMK Mitra Binaan &amp; Lab Jaringan Banyumas</span>
                                </div>
                                <a href="{{ url('/news/5') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 7: 11 JAN 2026 (MALAM KEAKRABAN) -->
                            <article class="agenda-row-card" data-category="pelatihan" data-day="11" data-month="0" data-year="2026">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">11</span>
                                    <span class="agenda-month-sub">JAN</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-pelatihan">MAKRAB</span>
                                        <span class="agenda-time-text">16.00 – Selesai</span>
                                    </div>
                                    <h4 class="agenda-row-title">Malam Keakraban: Mempererat Solidaritas &amp; Rasa Kekeluargaan</h4>
                                    <span class="agenda-loc-text">📍 Villa Baturraden, Purwokerto</span>
                                </div>
                                <a href="{{ url('/news/2') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 8: 13 DES 2025 (SHARING KNOWLEDGE) -->
                            <article class="agenda-row-card" data-category="workshop" data-day="13" data-month="11" data-year="2025">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">13</span>
                                    <span class="agenda-month-sub">DES</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-workshop">SHARING KNOWLEDGE</span>
                                        <span class="agenda-time-text">09.00 – 12.00 WIB</span>
                                    </div>
                                    <h4 class="agenda-row-title">Sharing Knowledge: Bersama Adaptive Network Telkom University</h4>
                                    <span class="agenda-loc-text">📍 Hybrid / Lab Network Evolution</span>
                                </div>
                                <a href="{{ url('/news/3') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                            <!-- ITEM 9: 12 DES 2025 (STUDI BANDING TELKOM BANDUNG) -->
                            <article class="agenda-row-card" data-category="event" data-day="12" data-month="11" data-year="2025">
                                <div class="agenda-date-square">
                                    <span class="agenda-day-big">12</span>
                                    <span class="agenda-month-sub">DES</span>
                                </div>
                                <div class="agenda-info-wrap">
                                    <div class="agenda-tag-line">
                                        <span class="badge-custom badge-event">STUDI BANDING</span>
                                        <span class="agenda-time-text">13.30 – 17.00 WIB</span>
                                    </div>
                                    <h4 class="agenda-row-title">Studi Banding: Diskusi &amp; Sharing Bersama Telkom University Bandung</h4>
                                    <span class="agenda-loc-text">📍 Telkom University Bandung</span>
                                </div>
                                <a href="{{ url('/news/1') }}" class="agenda-detail-btn" title="Buka Detail Agenda">Detail &rarr;</a>
                            </article>

                        </div>
                    </div>

                </div>
            </div>
        </section>




    </main>

    <!-- ==========================================================
         INTERACTIVE MODAL: DETAIL READING
         ========================================================== -->
    <div class="modal-backdrop-custom" id="newsArticleModal" style="display: none;">
        <div class="modal-dialog-custom">
            <div class="modal-header-custom">
                <div class="modal-badge-group">
                    <span class="modal-cat-badge" id="modalCategory">POPULAR</span>
                    <span class="modal-date-text" id="modalDate">NOV 25, 2018</span>
                </div>
                <button type="button" class="modal-close-btn" id="modalCloseBtn" aria-label="Tutup">&times;</button>
            </div>
            <div class="modal-body-custom">
                <img id="modalImage" src="" alt="News Image" class="modal-article-img" style="display: none;">
                <h3 class="modal-article-title" id="modalTitle">Article Title</h3>
                <div class="modal-article-content" id="modalContent"></div>
                <div style="margin-top: 18px; padding-top: 14px; border-top: 1px solid rgba(255, 255, 255, 0.08); display: flex; justify-content: flex-end;">
                    <a id="modalDetailLink" href="{{ url('/news/1') }}" class="green-link" style="font-size: 0.82rem; font-weight: 700; text-decoration: none;">Buka Halaman Berita Selengkapnya &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================================
         INTERACTIVE MODAL: ADD EVENT
         ========================================================== -->
    <div class="modal-backdrop-custom" id="addEventModal" style="display: none;">
        <div class="modal-dialog-custom" style="max-width: 520px;">
            <div class="modal-header-custom">
                <h4 style="margin: 0; font-size: 1.12rem; font-weight: 700; color: #fff;">+ Add New Event</h4>
                <button type="button" class="modal-close-btn" id="addEventCloseBtn" aria-label="Tutup">&times;</button>
            </div>
            <form id="addEventForm" class="modal-body-custom">
                <div class="form-group-custom">
                    <label>Event Title</label>
                    <input type="text" id="inputEventTitle" placeholder="e.g. Help the children" required class="input-custom">
                </div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
                    <div class="form-group-custom">
                        <label>Date (e.g. 24)</label>
                        <input type="text" id="inputEventDay" placeholder="24" required class="input-custom">
                    </div>
                    <div class="form-group-custom">
                        <label>Month (e.g. SEP)</label>
                        <input type="text" id="inputEventMonth" placeholder="SEP" required class="input-custom">
                    </div>
                </div>
                <div class="form-group-custom">
                    <label>Time &amp; Location</label>
                    <input type="text" id="inputEventMeta" placeholder="9.00 AM - 1.00PM / Location : Jakarta" required class="input-custom">
                </div>
                <div class="form-group-custom">
                    <label>Short Description</label>
                    <textarea id="inputEventDesc" rows="3" placeholder="Deskripsi singkat kegiatan..." class="input-custom"></textarea>
                </div>
                <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;">
                    <button type="button" class="btn-cancel-custom" id="addEventCancelBtn">Batal</button>
                    <button type="submit" class="btn-submit-custom">Simpan Event</button>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- ==========================================================
     CSS STYLES: 100% MATCHING REFERENCE WITH DARK NEV THEME
     & SOFT/FADED HOVER EFFECT (NO SUDDEN RED BORDERS)
     ========================================================== -->
<style>
/* CSS VARIABLES — MATCHING MODULES PALETTE & CONSISTENT TYPOGRAPHY */
:root {
    --n-bg-dark: #080808;
    --n-card-bg: rgba(255, 255, 255, 0.05);
    --n-card-inner: #050505;
    --n-card-border: rgba(255, 255, 255, 0.08);
    --n-text-white: #ffffff;
    --n-text-muted: rgba(255, 255, 255, 0.65);
    --n-text-dim: rgba(255, 255, 255, 0.45);
    --n-red-brand: #FF0033;
    --n-red-header: #99001b;
    --n-purple-header: #4c1d95;
    --n-navy-header: #1e3a8a;
    --n-font: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;

    /* Typographic Hierarchy (Konsisten & Proporsional) */
    --font-heading-main: clamp(1.8rem, 3.2vw, 2.3rem);
    --font-subbab: 1.15rem;
    --font-subbab-card: 1.1rem;
    --font-title-hero: clamp(1.2rem, 1.5vw, 1.35rem);
    --font-title-card: 0.92rem;
    --font-body: 0.85rem;
    --font-meta: 0.78rem;
    --font-badge: 0.68rem;
}

/* BASE WRAPPER (Lebar & Margin Persis Sama dengan Navbar: max-width 1180px) */
.ref-news-wrapper {
    width: 100%;
    max-width: 1180px;
    margin: 0 auto;
    font-family: var(--n-font);
    color: var(--n-text-white);
    padding: 0 16px 50px;
    box-sizing: border-box;
}

/* ============================================================
   1. TOP BANNER HEADER (100% FULL WIDTH MENTOK KANAN KIRI)
   ============================================================ */
.ref-banner-header {
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    margin-top: -10px;
    margin-bottom: 32px;
    border-radius: 0;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.6);
    border: none;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    background: #000;
}

/* Top Strip (Blue Accent + Red Marquee) */
.banner-top-strip {
    display: flex;
    height: 38px;
    width: 100%;
    background: #c62828;
    position: relative;
    overflow: hidden;
    align-items: center;
}

.strip-blue-accent {
    width: 44px;
    height: 100%;
    background: #1d4ed8;
    clip-path: polygon(0 0, 100% 0, 52% 100%, 0% 100%);
    flex-shrink: 0;
    z-index: 2;
}

.strip-red-marquee {
    flex: 1;
    overflow: hidden;
    white-space: nowrap;
    display: flex;
    align-items: center;
    background: linear-gradient(90deg, #d32f2f 0%, #b71c1c 100%);
    padding: 0 12px;
}

.marquee-text-track {
    display: inline-block;
    color: #ffffff;
    font-size: var(--font-body, 0.85rem);
    font-weight: 600;
    letter-spacing: 0.02em;
    animation: bannerMarqueeScroll 32s linear infinite;
}
.marquee-text-track:hover {
    animation-play-state: paused;
}
@keyframes bannerMarqueeScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/* Photo Banner with Dark Overlay & Centered "NEWS" */
.banner-photo-wrap {
    position: relative;
    width: 100%;
    height: clamp(230px, 26vw, 300px);
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #000;
}

.banner-bg-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    filter: brightness(0.75);
    transform: scale(1.02);
}

.banner-dark-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(4, 4, 6, 0.2) 0%, rgba(4, 4, 6, 0.75) 100%);
    pointer-events: none;
}

/* Centered NEWS Title (Ditempatkan di bagian atas agar pas di atas card overlap) */
.banner-news-title-box {
    position: absolute;
    top: 28%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 5;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none;
    margin: 0;
    padding: 0;
    background: transparent;
    border: none;
}

.banner-news-text {
    font-size: var(--font-heading-main, clamp(1.8rem, 3.2vw, 2.3rem));
    font-weight: 800;
    line-height: 1.2;
    letter-spacing: -0.5px;
    color: #ffffff;
    margin: 0;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 0 4px 20px rgba(0, 0, 0, 0.95), 0 0 35px rgba(0, 0, 0, 0.85);
}


/* ============================================================
   2. MAIN CONTENT LAYOUT
   ============================================================ */
.ref-main-content {
    display: flex;
    flex-direction: column;
    gap: 26px;
}

/* ============================================================
   HOVER BEHAVIOR SPECIFICATION (AS REQUESTED):
   "hovernya jangan selalu tbtb ada border merah, kasih yang misal 
   pas kursornya diarahin ke card nanti jadinya warnanya lebih pudar 
   atau gimana gitu."
   Smooth background transition to softer/faded tint, gentle brightness,
   no abrupt red borders!
   ============================================================ */
.news-unified-card,
.panel-card,
.event-item,
.bottom-card,
.upcoming-accordion-item {
    transition: background-color 0.28s ease, 
                opacity 0.28s ease, 
                transform 0.28s ease, 
                box-shadow 0.28s ease, 
                border-color 0.28s ease;
}

/* ============================================================
   SECTION 1: UNIFIED NEWS SHOWCASE CARD (100% PERSIS REFERENSI)
   1 Card Tunggal: Hero Full-Bleed Kiri & 5 Baris List di Kanan
   ============================================================ */
.news-unified-card {
    display: grid;
    grid-template-columns: 1.35fr 1fr;
    width: 100%;
    margin-top: -150px;
    margin-bottom: 0;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    overflow: hidden;
    position: relative;
    z-index: 10;
    box-shadow: 
        0 24px 50px rgba(0, 0, 0, 0.85),
        0 10px 20px rgba(0, 0, 0, 0.6),
        0 0 30px rgba(0, 0, 0, 0.5);
}

.news-unified-card:hover {
    box-shadow: 
        0 30px 60px rgba(0, 0, 0, 0.95),
        0 14px 28px rgba(0, 0, 0, 0.7),
        0 0 40px rgba(255, 0, 51, 0.1);
}

/* Left Hero: Full bleed image with bottom overlay text */
.unified-hero-pane {
    position: relative;
    min-height: 440px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
    cursor: pointer;
    background: #000;
}

/* 4-PHOTO AUTO SLIDER ENGINE (UNCROPPED) */
.hero-slider-track {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.hero-slide-item {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.85s ease-in-out, visibility 0.85s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.hero-slide-item.slide-active {
    opacity: 1;
    visibility: visible;
}

.hero-backdrop-blur {
    display: none;
}

.hero-slide-item .unified-hero-img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    z-index: 1;
    transition: transform 0.6s ease;
}

.unified-hero-pane:hover .hero-slide-item.slide-active .unified-hero-img {
    transform: scale(1.03);
}

.hero-slider-controls {
    position: absolute;
    top: 14px;
    right: 14px;
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 5;
    background: rgba(4, 4, 6, 0.65);
    padding: 5px 10px;
    border-radius: 20px;
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.12);
}

.hero-slider-dots {
    display: flex;
    align-items: center;
    gap: 5px;
}

.slider-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.4);
    cursor: pointer;
    transition: all 0.28s ease;
}

.slider-dot.active {
    width: 18px;
    border-radius: 8px;
    background: var(--n-red-brand, #FF0033);
}

.slider-counter {
    font-size: 0.72rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.85);
    letter-spacing: 0.04em;
}

.unified-hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.08) 0%, rgba(0, 0, 0, 0.38) 45%, rgba(8, 8, 8, 0.92) 82%, #080808 100%);
    pointer-events: none;
    z-index: 1;
}

.unified-hero-content {
    position: relative;
    z-index: 2;
    padding: 22px 24px 18px;
}

.featured-tag-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 8px;
}

.badge-pill.badge-green {
    background: #16a34a;
    color: #ffffff;
    font-size: var(--font-badge, 0.68rem);
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 3px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}

.badge-pill.badge-coral {
    background: #f43f5e;
    color: #ffffff;
    font-size: var(--font-badge, 0.68rem);
    font-weight: 700;
    padding: 3px 9px;
    border-radius: 3px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}

.coral-link {
    color: #fb7185;
    font-size: 0.82rem;
    font-weight: 700;
    text-decoration: none;
    display: inline-block;
    transition: opacity 0.2s ease;
}
.coral-link:hover {
    text-decoration: underline;
    opacity: 0.85;
}

.featured-date {
    font-size: var(--font-meta, 0.78rem);
    font-weight: 600;
    color: rgba(255, 255, 255, 0.85);
}

.featured-title {
    font-size: var(--font-title-hero, clamp(1.2rem, 1.5vw, 1.35rem));
    font-weight: 800;
    line-height: 1.3;
    margin: 0 0 8px;
    color: #ffffff;
}

.featured-desc {
    font-size: var(--font-body, 0.85rem);
    line-height: 1.55;
    color: rgba(255, 255, 255, 0.75);
    margin: 0 0 12px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.green-link {
    color: #22c55e;
    font-size: 0.82rem;
    font-weight: 700;
    text-decoration: none;
    display: inline-block;
    transition: opacity 0.2s ease;
}
.green-link:hover {
    text-decoration: underline;
    opacity: 0.85;
}

/* Right Pane: Max 5 rows visible, scrollable if > 5 items */
.unified-list-pane {
    background: rgba(0, 0, 0, 0.45);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border-left: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    flex-direction: column;
    height: 440px;
    max-height: 440px;
    overflow-y: scroll;
    overflow-x: hidden;
    padding-right: 4px;
}

/* Custom Scrollbar persis seperti Section Agenda (Image Referensi User) */
.unified-list-pane::-webkit-scrollbar {
    width: 6px;
}

.unified-list-pane::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.04);
    border-radius: 4px;
    margin: 8px 0;
}

.unified-list-pane::-webkit-scrollbar-thumb {
    background: rgba(56, 189, 248, 0.35);
    border-radius: 4px;
}

.unified-list-pane::-webkit-scrollbar-thumb:hover {
    background: rgba(56, 189, 248, 0.7);
}

/* Firefox Fallback */
@supports not selector(::-webkit-scrollbar) {
    .unified-list-pane {
        scrollbar-width: thin;
        scrollbar-color: rgba(56, 189, 248, 0.4) rgba(255, 255, 255, 0.04);
    }
}

.unified-row-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 10px 18px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.07);
    height: 88px;
    min-height: 88px;
    max-height: 88px;
    box-sizing: border-box;
    flex-shrink: 0;
    cursor: pointer;
    text-decoration: none;
    color: inherit;
    transition: background-color 0.25s ease;
}

.unified-row-item:last-child {
    border-bottom: none;
}

/* Faded hover on each row (No Red Border!) */
.unified-row-item:hover {
    background: rgba(255, 255, 255, 0.045);
    color: inherit;
}

.unified-row-item:hover .stacked-title {
    color: #ff0033;
}

.unified-row-item:hover .row-read-more {
    color: #ff0033;
    padding-left: 2px;
}

.stacked-thumb-wrap {
    position: relative;
    width: 68px;
    height: 68px;
    aspect-ratio: 1 / 1;
    flex-shrink: 0;
    border-radius: 5px;
    overflow: hidden;
}

.stacked-thumb {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.stacked-badge {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    font-size: 0.50rem;
    font-weight: 700;
    text-align: center;
    padding: 2.5px 2px 2px;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 0.01em;
    line-height: 1.2;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.tag-magenta,
.tag-blue,
.tag-teal,
.tag-green,
.tag-purple,
.tag-coral,
.tag-orange,
.tag-amber {
    background: rgba(15, 17, 23, 0.88);
    border-top: 1px solid rgba(255, 255, 255, 0.12);
    color: #e2e8f0;
}
.stacked-row-card:hover .stacked-badge {
    color: #ff3355;
    border-top-color: rgba(255, 0, 51, 0.4);
}

.stacked-content {
    flex: 1;
    min-width: 0;
}

.stacked-title {
    font-size: var(--font-title-card, 0.92rem);
    font-weight: 700;
    line-height: 1.4;
    margin: 0 0 4px;
    color: #ffffff;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.stacked-date {
    font-size: var(--font-meta, 0.76rem);
    font-weight: 600;
    color: var(--n-text-muted);
    display: flex;
    align-items: center;
    gap: 6px;
}

.row-read-more {
    color: rgba(255, 255, 255, 0.55);
    font-size: 0.74rem;
    font-weight: 700;
    transition: all 0.2s ease;
}

.agenda-detail-btn {
    margin-left: auto;
    font-size: 0.75rem;
    font-weight: 700;
    color: #ff0033;
    text-decoration: none;
    padding: 5px 12px;
    border-radius: 6px;
    background: rgba(255, 0, 51, 0.08);
    border: 1px solid rgba(255, 0, 51, 0.3);
    white-space: nowrap;
    transition: all 0.2s ease;
    flex-shrink: 0;
}

.agenda-detail-btn:hover {
    background: #ff0033;
    color: #ffffff !important;
    border-color: #ff0033;
    box-shadow: 0 0 12px rgba(255, 0, 51, 0.5);
    transform: translateY(-1px);
}


/* ============================================================
   AGENDA & JADWAL KEGIATAN LAB (PERSIS REFERENSI USER)
   ============================================================ */
.agenda-exact-section {
    width: 100%;
    margin-top: 0;
}

.agenda-exact-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 14px 40px rgba(0, 0, 0, 0.6);
}

/* Header */
.agenda-exact-header {
    background: rgba(0, 0, 0, 0.4);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding: 16px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
}

.agenda-title-wrap {
    display: flex;
    align-items: center;
    gap: 10px;
}

.agenda-glow-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #22c55e;
    box-shadow: 0 0 10px #22c55e;
    flex-shrink: 0;
}

.agenda-main-title {
    font-size: var(--font-subbab, 1.15rem);
    font-weight: 800;
    color: #ffffff;
    margin: 0;
    letter-spacing: 0.02em;
}

.agenda-pill-badge {
    background: rgba(30, 58, 138, 0.4);
    border: 1px solid #1d4ed8;
    color: #60a5fa;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    padding: 3px 10px;
    margin-left: 4px;
}

/* Filter Tabs */
.agenda-filter-tabs {
    display: flex;
    align-items: center;
    background: #050505;
    padding: 3px;
    border-radius: 8px;
    border: 1px solid #1a1a1a;
    gap: 4px;
}

.agenda-tab-btn {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.65);
    font-size: var(--font-meta, 0.78rem);
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.agenda-tab-btn:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.06);
}

.agenda-tab-btn.active,
.agenda-tab-btn[data-filter="workshop"].active,
.agenda-tab-btn[data-filter="pelatihan"].active,
.agenda-tab-btn[data-filter="event"].active {
    background: linear-gradient(135deg, #ff0033, #c40027) !important;
    border: 1px solid #ff0033 !important;
    color: #ffffff !important;
    font-weight: 700;
    box-shadow: 0 2px 10px rgba(255, 0, 51, 0.35);
}

/* 2-Columns Body */
.agenda-exact-body {
    display: grid;
    grid-template-columns: 0.88fr 1.32fr;
    gap: 26px;
    padding: 24px;
}

@media (max-width: 992px) {
    .agenda-exact-body {
        grid-template-columns: 1fr;
        gap: 20px;
        padding: 16px;
    }
}

/* Left Calendar Box */
.agenda-cal-box {
    background: rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: 20px 22px;
}

.agenda-cal-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
}

.cal-nav-btn {
    background: transparent;
    border: none;
    color: #38bdf8;
    font-size: 1.25rem;
    font-weight: 700;
    cursor: pointer;
    padding: 0 6px;
    transition: transform 0.2s ease, opacity 0.2s ease;
}

.cal-nav-btn:hover {
    opacity: 0.8;
    transform: scale(1.15);
}

.cal-month-heading {
    font-size: 0.95rem;
    font-weight: 800;
    color: #38bdf8;
    letter-spacing: 0.04em;
}

.cal-weekdays-row {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    text-align: center;
    font-size: var(--font-meta, 0.75rem);
    font-weight: 700;
    color: #64748b;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    margin-bottom: 10px;
}

.cal-grid-cells {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    row-gap: 8px;
    column-gap: 4px;
    text-align: center;
}

.cal-day-cell {
    aspect-ratio: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-size: 0.86rem;
    font-weight: 600;
    color: #94a3b8;
    border-radius: 50%;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
    width: 36px;
    height: 36px;
    margin: 0 auto;
}

.cal-day-cell:hover {
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff;
}

.cal-day-cell.empty {
    cursor: default;
    background: transparent !important;
}

/* Selected state */
.cal-day-cell.selected {
    background: #2563eb !important;
    color: #ffffff !important;
    font-weight: 800;
    box-shadow: 0 0 14px rgba(37, 99, 235, 0.6);
}

/* Today indicator */
.cal-day-cell.is-today {
    border: 1.5px solid #38bdf8 !important;
    color: #38bdf8;
    font-weight: 800;
}

.cal-day-cell.is-today.selected {
    background: #2563eb !important;
    border-color: #38bdf8 !important;
    color: #ffffff !important;
    box-shadow: 0 0 16px rgba(37, 99, 235, 0.7);
}

/* Event marker dots */
.cal-day-cell.has-dot::after {
    content: "";
    position: absolute;
    bottom: 3px;
    width: 4px;
    height: 4px;
    border-radius: 50%;
}

.cal-day-cell.dot-workshop::after,
.cal-day-cell.dot-pelatihan::after,
.cal-day-cell.dot-event::after {
    background: #ff0033;
    box-shadow: 0 0 4px rgba(255, 0, 51, 0.5);
}

/* In selected cell, adjust dot position */
.cal-day-cell.selected::after {
    background: #ffffff !important;
    box-shadow: 0 0 4px #ffffff !important;
}

/* Legend */
.cal-legend-exact {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    font-size: var(--font-meta, 0.75rem);
    color: #94a3b8;
    flex-wrap: wrap;
}

.legend-item {
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.dot-color {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    display: inline-block;
    background: #ff0033;
    box-shadow: 0 0 6px rgba(255, 0, 51, 0.35);
}

/* Right Agenda List Box */
.agenda-list-box {
    display: flex;
    flex-direction: column;
}

.agenda-list-topbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 14px;
}

.list-heading-wrap {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: var(--font-subbab-card, 1.1rem);
    font-weight: 800;
    color: #ffffff;
    letter-spacing: 0.02em;
}

.list-heading-wrap svg {
    color: #94a3b8;
}

.agenda-count-badge {
    font-size: 0.75rem;
    font-weight: 700;
    color: #94a3b8;
    background: #050505;
    padding: 3px 12px;
    border-radius: 20px;
    border: 1px solid #1a1a1a;
}

.agenda-items-container {
    display: flex;
    flex-direction: column;
    gap: 12px;
    max-height: 400px;
    overflow-y: auto;
    padding-right: 6px;
}

.agenda-items-container::-webkit-scrollbar {
    width: 5px;
}

.agenda-items-container::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.04);
    border-radius: 4px;
}

.agenda-items-container::-webkit-scrollbar-thumb {
    background: rgba(56, 189, 248, 0.3);
    border-radius: 4px;
}

.agenda-items-container::-webkit-scrollbar-thumb:hover {
    background: rgba(56, 189, 248, 0.6);
}

.agenda-row-card {
    background: rgba(0, 0, 0, 0.35);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 10px;
    padding: 14px 18px;
    display: flex;
    align-items: center;
    gap: 18px;
    transition: all 0.22s ease;
    cursor: pointer;
}

.agenda-row-card:hover {
    background: rgba(255, 255, 255, 0.06);
    border-color: rgba(255, 255, 255, 0.16);
    transform: translateY(-1px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
}

.agenda-row-card.card-highlight {
    background: rgba(255, 255, 255, 0.08);
    border-color: #2563eb;
    box-shadow: 0 0 16px rgba(37, 99, 235, 0.35);
}

.agenda-date-square {
    width: 52px;
    height: 56px;
    border-radius: 8px;
    border: 1px solid #1a1a1a;
    background: #050505;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.agenda-day-big {
    font-size: 1.22rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1;
}

.agenda-month-sub {
    font-size: 0.7rem;
    font-weight: 800;
    color: #38bdf8;
    margin-top: 3px;
    letter-spacing: 0.05em;
}

.agenda-info-wrap {
    flex: 1;
    min-width: 0;
}

.agenda-tag-line {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 3px;
}

/* Card Category Left Accent & Month Color (Warna Seragam Per Kategori) */
.agenda-row-card[data-category="workshop"],
.agenda-row-card[data-category="pelatihan"],
.agenda-row-card[data-category="event"] {
    border-left: 3.5px solid rgba(255, 255, 255, 0.15);
}
.agenda-row-card:hover {
    border-left-color: #ff0033 !important;
}
.agenda-row-card .agenda-date-square {
    border-color: rgba(255, 255, 255, 0.12);
}
.agenda-row-card:hover .agenda-date-square {
    border-color: rgba(255, 0, 51, 0.35);
}
.agenda-row-card .agenda-month-sub {
    color: #94a3b8;
}
.agenda-row-card:hover .agenda-month-sub {
    color: #ff3355;
}

.badge-custom {
    display: inline-block;
    padding: 2px 8px;
    border-radius: 4px;
    font-size: var(--font-badge, 0.68rem);
    font-weight: 800;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}

.badge-workshop,
.badge-pelatihan,
.badge-event {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: #cbd5e1;
    transition: all 0.2s ease;
}

.agenda-row-card:hover .badge-workshop,
.agenda-row-card:hover .badge-pelatihan,
.agenda-row-card:hover .badge-event {
    border-color: rgba(255, 0, 51, 0.35);
    color: #ff3355;
    background: rgba(255, 0, 51, 0.08);
}

.agenda-time-text {
    font-size: var(--font-meta, 0.78rem);
    color: #94a3b8;
    font-weight: 500;
}

.agenda-row-title {
    font-size: var(--font-title-card, 0.92rem);
    font-weight: 700;
    color: #ffffff;
    margin: 3px 0 4px;
    letter-spacing: -0.01em;
    line-height: 1.4;
}

.agenda-loc-text {
    font-size: var(--font-meta, 0.78rem);
    color: #94a3b8;
    font-weight: 500;
    display: block;
}


/* ============================================================
   SECTION 3: BOTTOM ROW (TESTIMONIAL + SUCCESS + LESSONS)
   ============================================================ */
.ref-bottom-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 24px;
}

.bottom-card {
    background: var(--n-card-bg);
    border: 1px solid var(--n-card-border);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    display: flex;
    flex-direction: column;
}
/* Faded / Softer Tint on Hover (No Red Border!) */
.bottom-card:hover {
    background: rgba(255, 255, 255, 0.08);
    opacity: 0.94;
    transform: translateY(-2px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.5);
}

/* Card 1: Testimonial */
.testimonial-card {
    padding: 20px;
    justify-content: space-between;
}
.testimonial-text {
    font-size: var(--font-body, 0.85rem);
    line-height: 1.6;
    color: var(--n-text-muted);
    font-style: italic;
    margin: 0 0 18px;
}
.testimonial-author {
    display: flex;
    align-items: center;
    gap: 12px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    padding-top: 14px;
}
.author-avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    object-fit: cover;
    border: 1.5px solid rgba(255, 255, 255, 0.2);
}
.author-info {
    min-width: 0;
}
.author-name {
    font-size: 0.9rem;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 2px;
}
.author-role {
    font-size: var(--font-meta, 0.76rem);
    color: var(--n-text-muted);
    margin: 0;
}

/* Card 2: Success Stories */
.success-stories-card {
    padding: 16px 20px 20px;
}
.success-title {
    font-size: var(--font-subbab-card, 1.1rem);
    font-weight: 800;
    color: #38bdf8;
    margin: 0 0 14px;
    letter-spacing: 0.02em;
}
.success-banner {
    position: relative;
    border-radius: 6px;
    overflow: hidden;
    height: 160px;
    background: #000;
}
.success-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}
.success-stories-card:hover .success-img {
    transform: scale(1.03);
}
.success-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 40%, rgba(0, 0, 0, 0.85) 100%);
    display: flex;
    align-items: flex-end;
    padding: 12px;
}
.success-caption {
    font-size: 0.82rem;
    font-weight: 700;
    color: #ffffff;
}

/* Card 3: Lessons Learned */
.red-header {
    background: linear-gradient(90deg, #99001b 0%, #b82331 100%);
    padding: 10px 16px;
}
.lessons-title {
    font-size: var(--font-subbab-card, 1.1rem);
    font-weight: 800;
    color: #ffffff;
    letter-spacing: 0.02em;
}
.lessons-body {
    padding: 16px;
    flex: 1;
}
.lessons-desc {
    font-size: var(--font-body, 0.85rem);
    line-height: 1.55;
    color: #ffffff;
    margin: 0 0 8px;
    font-weight: 600;
}
.lessons-subdesc {
    font-size: var(--font-meta, 0.78rem);
    line-height: 1.45;
    color: var(--n-text-muted);
    margin: 0 0 6px;
}
.view-more-link {
    display: inline-block;
    font-size: 0.82rem;
    font-weight: 800;
    color: #38bdf8;
    text-decoration: none;
    margin: 10px 0 14px;
}
.view-more-link:hover {
    text-decoration: underline;
}
.lessons-author {
    display: flex;
    align-items: center;
    gap: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    padding-top: 12px;
}
.messages-footer-bar {
    background: rgba(0, 0, 0, 0.45);
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    padding: 10px 16px;
    text-align: center;
}
.messages-text {
    font-size: var(--font-body, 0.85rem);
    font-weight: 800;
    color: #38bdf8;
    letter-spacing: 0.03em;
}


/* ============================================================
   MODALS (READ MORE & ADD EVENT)
   ============================================================ */
.modal-backdrop-custom {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.78);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.modal-dialog-custom {
    background: #080808;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 12px;
    width: 100%;
    max-width: 650px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
    overflow: hidden;
    animation: modalPop 0.24s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}
@keyframes modalPop {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}

.modal-header-custom {
    padding: 14px 20px;
    background: #050505;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.modal-badge-group {
    display: flex;
    align-items: center;
    gap: 12px;
}
.modal-cat-badge {
    background: #16a34a;
    color: #ffffff;
    font-size: var(--font-badge, 0.68rem);
    font-weight: 800;
    padding: 3px 10px;
    border-radius: 4px;
}
.modal-date-text {
    font-size: var(--font-meta, 0.78rem);
    color: var(--n-text-muted);
}
.modal-close-btn {
    background: transparent;
    border: none;
    color: #ffffff;
    font-size: 1.5rem;
    cursor: pointer;
    line-height: 1;
    padding: 0;
}

.modal-body-custom {
    padding: 20px;
    max-height: 75vh;
    overflow-y: auto;
}
.modal-article-img {
    width: 100%;
    max-height: 280px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 16px;
}
.modal-article-title {
    font-size: 1.25rem;
    font-weight: 800;
    line-height: 1.3;
    margin: 0 0 12px;
    color: #ffffff;
}
.modal-article-content {
    font-size: var(--font-body, 0.85rem);
    line-height: 1.65;
    color: var(--n-text-muted);
}

/* Forms */
.form-group-custom {
    margin-bottom: 14px;
}
.form-group-custom label {
    display: block;
    font-size: var(--font-meta, 0.78rem);
    font-weight: 700;
    margin-bottom: 6px;
    color: #ffffff;
}
.input-custom {
    width: 100%;
    background: #050505;
    border: 1px solid #1a1a1a;
    border-radius: 6px;
    padding: 9px 12px;
    color: #ffffff;
    font-size: var(--font-body, 0.85rem);
    box-sizing: border-box;
}
.input-custom:focus {
    outline: none;
    border-color: #38bdf8;
}
.btn-cancel-custom {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.82rem;
}
.btn-submit-custom {
    background: #4c1d95;
    border: none;
    color: #ffffff;
    padding: 8px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 0.82rem;
    font-weight: 700;
}


/* ============================================================
   RESPONSIVE MEDIA QUERIES (MOBILE & TABLET OPTIMIZATION)
   - Width: 720px max-width on mobile/tablet (Persis seperti Beranda)
   - Proportional typography & touch-friendly tap targets
   ============================================================ */
@media (max-width: 992px) {
    .news-unified-card {
        grid-template-columns: 1fr;
        margin-top: -110px;
    }

    .ref-bottom-grid {
        grid-template-columns: 1fr;
    }

    .banner-news-text {
        font-size: 1.9rem;
    }

    .unified-hero-pane {
        min-height: 360px;
    }

    .unified-list-pane {
        border-left: none;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        height: auto;
        max-height: 440px;
        overflow-y: scroll;
        padding-right: 4px;
    }
}

/* TABLET & MOBILE BREAKPOINT (768px — Identik dengan Menu Beranda) */
@media (max-width: 768px) {
    .ref-news-wrapper {
        max-width: 720px; /* Lebar maksimal 720px seragam dengan section Beranda */
        padding: 0 12px 40px;
    }

    .ref-main-content {
        gap: 20px;
    }

    /* Top Banner Header */
    .banner-photo-wrap {
        height: 180px;
    }

    .banner-news-text {
        font-size: 1.7rem;
    }

    .marquee-text-track {
        font-size: 0.8rem;
    }

    /* Section 1: Unified News Card */
    .news-unified-card {
        grid-template-columns: 1fr;
        margin-top: -85px;
        border-radius: 12px;
    }

    .unified-hero-pane {
        min-height: 290px;
    }

    .unified-hero-content {
        padding: 16px 16px 14px;
    }

    .featured-tag-row {
        gap: 8px;
        margin-bottom: 6px;
    }

    .featured-title {
        font-size: 1.15rem;
        line-height: 1.35;
        margin-bottom: 6px;
    }

    .featured-desc {
        font-size: 0.82rem;
        line-height: 1.5;
        margin-bottom: 10px;
        -webkit-line-clamp: 2;
    }

    .unified-list-pane {
        border-left: none;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        height: auto;
        max-height: 410px;
        overflow-y: scroll;
        padding-right: 3px;
    }

    .unified-row-item {
        padding: 11px 14px;
        gap: 12px;
        height: 82px;
        min-height: 82px;
        max-height: 82px;
        flex-shrink: 0;
    }

    .stacked-thumb-wrap {
        width: 60px;
        height: 60px;
    }

    .stacked-badge {
        font-size: 0.46rem;
        padding: 2px 1px;
    }

    .stacked-title {
        font-size: 0.86rem;
        line-height: 1.35;
        margin-bottom: 3px;
    }

    .stacked-date {
        font-size: 0.74rem;
    }

    /* Section 2: Agenda & Kalender Kegiatan */
    .agenda-exact-card {
        border-radius: 12px;
    }

    .agenda-exact-header {
        padding: 14px 16px;
        flex-direction: column;
        align-items: stretch;
        gap: 12px;
    }

    .agenda-title-wrap {
        justify-content: flex-start;
    }

    .agenda-main-title {
        font-size: 1.05rem;
    }

    .agenda-filter-tabs {
        width: 100%;
        display: flex;
        overflow-x: auto;
        padding: 3px;
        gap: 3px;
        -webkit-overflow-scrolling: touch;
    }

    .agenda-filter-tabs::-webkit-scrollbar {
        display: none;
    }

    .agenda-tab-btn {
        flex: 1;
        padding: 6px 10px;
        font-size: 0.75rem;
        text-align: center;
        white-space: nowrap;
    }

    .agenda-exact-body {
        grid-template-columns: 1fr;
        gap: 18px;
        padding: 16px 14px;
    }

    .agenda-cal-box {
        padding: 14px 12px;
        border-radius: 10px;
    }

    .agenda-cal-nav {
        margin-bottom: 10px;
    }

    .cal-month-heading {
        font-size: 0.9rem;
    }

    .cal-weekdays-row {
        font-size: 0.7rem;
        padding-bottom: 8px;
        margin-bottom: 8px;
    }

    .cal-grid-cells {
        row-gap: 6px;
    }

    .cal-day-cell {
        width: 32px;
        height: 32px;
        font-size: 0.8rem;
    }

    .cal-legend-exact {
        margin-top: 14px;
        padding-top: 10px;
        font-size: 0.7rem;
        gap: 10px;
    }

    .agenda-list-topbar {
        margin-bottom: 12px;
    }

    .list-heading-wrap {
        font-size: 1rem;
    }

    .agenda-items-container {
        gap: 10px;
        max-height: 380px;
    }

    .agenda-row-card {
        padding: 12px 14px;
        gap: 12px;
        border-radius: 8px;
    }

    .agenda-date-square {
        width: 48px;
        height: 52px;
    }

    .agenda-day-big {
        font-size: 1.15rem;
    }

    .agenda-month-sub {
        font-size: 0.65rem;
    }

    .agenda-row-title {
        font-size: 0.88rem;
        line-height: 1.35;
    }

    .agenda-time-text,
    .agenda-loc-text {
        font-size: 0.74rem;
    }

    /* Section 3: Bottom Row Cards */
    .ref-bottom-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .bottom-card {
        border-radius: 10px;
    }

    .testimonial-card,
    .success-stories-card,
    .lessons-body {
        padding: 16px;
    }

    .success-title,
    .lessons-title {
        font-size: 1.02rem;
    }

    .testimonial-text,
    .lessons-desc {
        font-size: 0.82rem;
        line-height: 1.55;
    }

    .success-banner {
        height: 145px;
    }

    /* Modal Popup on Mobile */
    .modal-dialog-custom {
        max-width: 95vw;
        border-radius: 10px;
    }

    .modal-header-custom {
        padding: 12px 16px;
    }

    .modal-body-custom {
        padding: 16px;
    }

    .modal-article-title {
        font-size: 1.15rem;
    }

    .modal-article-content {
        font-size: 0.84rem;
    }
}

/* SMALL MOBILE (MAX-WIDTH 480px) */
@media (max-width: 480px) {
    .banner-photo-wrap {
        height: 155px;
    }

    .banner-news-text {
        font-size: 1.45rem;
    }

    .news-unified-card {
        margin-top: -65px;
    }

    .unified-hero-pane {
        min-height: 250px;
    }

    .featured-title {
        font-size: 1.05rem;
    }

    .agenda-tab-btn {
        font-size: 0.72rem;
        padding: 5px 8px;
    }

    .cal-day-cell {
        width: 28px;
        height: 28px;
        font-size: 0.76rem;
    }

    .agenda-row-card {
        padding: 10px 12px;
        gap: 10px;
    }

    .agenda-detail-btn {
        padding: 4px 8px;
        font-size: 0.68rem;
    }

    .row-read-more {
        display: none;
    }
}
</style>

<!-- ==========================================================
     INTERACTIVE JAVASCRIPT
     1. Interactive Monthly Calendar (Switch months, select date)
     2. Upcoming Training Accordion (Expand / Collapse)
     3. Article & Event Modals
     4. Dynamic "+ ADD" Event Handler
     ========================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {

    /* ========================================================
       0. AUTO PHOTO SLIDER (HERO CARD - 4 FOTO STUDI BANDING)
       ======================================================== */
    const heroSlider = document.getElementById('heroPhotoSlider');
    if (heroSlider) {
        const slides = heroSlider.querySelectorAll('.hero-slide-item');
        const dots = document.querySelectorAll('.hero-slider-dots .slider-dot');
        const counter = document.getElementById('heroSliderCounter');
        let currentSlide = 0;
        let sliderTimer = null;
        const slideInterval = 3500; // 3.5 detik

        function goToSlide(idx) {
            slides.forEach((s, i) => {
                if (i === idx) s.classList.add('slide-active');
                else s.classList.remove('slide-active');
            });
            dots.forEach((d, i) => {
                if (i === idx) d.classList.add('active');
                else d.classList.remove('active');
            });
            if (counter) counter.textContent = (idx + 1) + ' / ' + slides.length;
            currentSlide = idx;
        }

        function nextSlide() {
            let next = (currentSlide + 1) % slides.length;
            goToSlide(next);
        }

        function startSlider() {
            stopSlider();
            sliderTimer = setInterval(nextSlide, slideInterval);
        }

        function stopSlider() {
            if (sliderTimer) {
                clearInterval(sliderTimer);
                sliderTimer = null;
            }
        }

        dots.forEach((dot, i) => {
            dot.addEventListener('click', function(e) {
                e.stopPropagation();
                goToSlide(i);
                startSlider();
            });
        });

        const heroPane = heroSlider.closest('.unified-hero-pane');
        if (heroPane) {
            heroPane.addEventListener('mouseenter', stopSlider);
            heroPane.addEventListener('mouseleave', startSlider);
        }

        startSlider();
    }

    /* ========================================================
       1. INTERACTIVE MONTHLY CALENDAR & AGENDA (2025 - 2026)
       Sinkronisasi Tanggal Real (Hari Ini) & Agenda Resmi NEV
       ======================================================== */
    const realToday = new Date();
    const realCurrentYear = realToday.getFullYear(); // 2026
    const realCurrentMonth = realToday.getMonth(); // 9 (Oktober, 0-indexed)
    const realCurrentDay = realToday.getDate(); // 30

    // Default kalender otomatis mengikuti tanggal real hari ini
    let currentYear = realCurrentYear;
    let currentMonth = realCurrentMonth;
    let selectedYear = realCurrentYear;
    let selectedMonth = realCurrentMonth;
    let selectedDay = realCurrentDay; // Default lingkaran biru di hari ini (30 Okt)

    const monthNames = [
        "JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI",
        "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"
    ];

    // Events dots mapping: YYYY-MM-DD -> dot CSS class (Hanya Event Resmi & Real)
    const agendaEventDots = {
        '2026-10-29': 'dot-event',      // 29 Okt 2026: Open Recruitment NEV
        '2026-10-24': 'dot-workshop',   // 24 Okt 2026: Open Laboratory (Lab NETSEC)
        '2026-05-03': 'dot-event',      // 03 Mei 2026: Studi Banding UNSOED
        '2026-03-01': 'dot-workshop',   // 01 Mar 2026: Mini Research Expo HMTT
        '2026-02-28': 'dot-pelatihan',  // 28 Feb 2026: Bootcamp Mastering VPN
        '2026-02-15': 'dot-event',      // 15 Feb 2026: Pengmas LKS SMK 2026
        '2026-01-11': 'dot-pelatihan',  // 11 Jan 2026: Malam Keakraban
        '2025-12-13': 'dot-workshop',   // 13 Des 2025: Sharing Knowledge Adaptive
        '2025-12-12': 'dot-event',      // 12 Des 2025: Studi Banding Telkom Bandung
    };

    const calMonthDisplay = document.getElementById('calMonthDisplay');
    const calDatesGrid = document.getElementById('calDatesGrid');
    const calPrevBtn = document.getElementById('calPrevBtn');
    const calNextBtn = document.getElementById('calNextBtn');
    const agendaCards = document.querySelectorAll('.agenda-row-card');
    const agendaCountDisplay = document.getElementById('agendaCountDisplay');
    const filterTabs = document.querySelectorAll('.agenda-tab-btn');

    function renderCalendar() {
        if (!calDatesGrid || !calMonthDisplay) return;

        calMonthDisplay.textContent = `${monthNames[currentMonth]}, ${currentYear}`;
        calDatesGrid.innerHTML = '';

        // First day of month (0 = Sun, 1 = Mon, 2 = Tue, etc.)
        const firstDayIndex = new Date(currentYear, currentMonth, 1).getDay();
        // Total days in month
        const totalDays = new Date(currentYear, currentMonth + 1, 0).getDate();

        // Empty cells before first day
        for (let i = 0; i < firstDayIndex; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.className = 'cal-day-cell empty';
            calDatesGrid.appendChild(emptyCell);
        }

        // Days
        for (let day = 1; day <= totalDays; day++) {
            const dayCell = document.createElement('div');
            dayCell.className = 'cal-day-cell';
            dayCell.textContent = day;

            const padMonth = String(currentMonth + 1).padStart(2, '0');
            const padDay = String(day).padStart(2, '0');
            const dateKey = `${currentYear}-${padMonth}-${padDay}`;

            // Add dot indicator if event exists in this date
            if (agendaEventDots[dateKey]) {
                dayCell.classList.add('has-dot', agendaEventDots[dateKey]);
            }

            // Real Today indicator
            if (currentYear === realCurrentYear && currentMonth === realCurrentMonth && day === realCurrentDay) {
                dayCell.classList.add('is-today');
                dayCell.setAttribute('title', 'Hari ini (Today)');
            }

            // Selected cell state
            if (currentYear === selectedYear && currentMonth === selectedMonth && day === selectedDay) {
                dayCell.classList.add('selected');
            }

            dayCell.addEventListener('click', function() {
                document.querySelectorAll('.cal-day-cell').forEach(c => c.classList.remove('selected'));
                dayCell.classList.add('selected');
                selectedYear = currentYear;
                selectedMonth = currentMonth;
                selectedDay = day;

                // Sync with right agenda cards
                agendaCards.forEach(card => card.classList.remove('card-highlight'));
                const matchedCard = Array.from(agendaCards).find(card => {
                    const cardDay = parseInt(card.dataset.day, 10);
                    const cardMonth = parseInt(card.dataset.month, 10);
                    const cardYear = parseInt(card.dataset.year, 10);
                    return cardDay === day && cardMonth === currentMonth && cardYear === currentYear;
                });

                if (matchedCard) {
                    matchedCard.classList.add('card-highlight');
                    matchedCard.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            });

            calDatesGrid.appendChild(dayCell);
        }
    }

    if (calPrevBtn) {
        calPrevBtn.addEventListener('click', function() {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            renderCalendar();
        });
    }

    if (calNextBtn) {
        calNextBtn.addEventListener('click', function() {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            renderCalendar();
        });
    }

    // Right agenda cards click interaction: clicks switch calendar to that event's month
    agendaCards.forEach(card => {
        card.addEventListener('click', function(e) {
            if (e.target.closest('.agenda-detail-btn')) return;

            agendaCards.forEach(c => c.classList.remove('card-highlight'));
            this.classList.add('card-highlight');

            const cardDay = parseInt(this.dataset.day, 10);
            const cardMonth = parseInt(this.dataset.month, 10);
            const cardYear = parseInt(this.dataset.year, 10);

            selectedYear = cardYear;
            selectedMonth = cardMonth;
            selectedDay = cardDay;

            if (currentYear !== cardYear || currentMonth !== cardMonth) {
                currentYear = cardYear;
                currentMonth = cardMonth;
                renderCalendar();
            } else {
                document.querySelectorAll('.cal-day-cell:not(.empty)').forEach(c => {
                    if (parseInt(c.textContent.trim(), 10) === cardDay) {
                        document.querySelectorAll('.cal-day-cell').forEach(cell => cell.classList.remove('selected'));
                        c.classList.add('selected');
                    }
                });
            }
        });
    });

    // Filter tabs interaction
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;
            let visibleCount = 0;

            agendaCards.forEach(card => {
                const category = card.dataset.category;
                if (filter === 'all' || category === filter) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (agendaCountDisplay) {
                agendaCountDisplay.textContent = `${visibleCount} Agenda`;
            }
        });
    });

    // Initial render
    renderCalendar();


    /* ========================================================
       3. ARTICLE & EVENT MODALS
       ======================================================== */
    const articleModal = document.getElementById('newsArticleModal');
    const modalCategory = document.getElementById('modalCategory');
    const modalDate = document.getElementById('modalDate');
    const modalTitle = document.getElementById('modalTitle');
    const modalImage = document.getElementById('modalImage');
    const modalContent = document.getElementById('modalContent');
    const modalCloseBtn = document.getElementById('modalCloseBtn');

    // News Article Direct Navigation (Langsung Buka Halaman Detail Tanpa Modal Popup)
    document.querySelectorAll('.news-open-modal').forEach(item => {
        item.addEventListener('click', function(e) {
            // Jika klik indikator titik slider, jangan redirect
            if (e.target.closest('.slider-dot')) return;

            const articleId = this.dataset.id || '1';
            window.location.href = '{{ url("/news") }}/' + articleId;
        });
    });

    // Event Modal Triggers
    document.querySelectorAll('.event-open-modal').forEach(item => {
        item.addEventListener('click', function() {
            const title = this.dataset.title || '';
            const date = this.dataset.date || '';
            const time = this.dataset.time || '';
            const desc = this.dataset.desc || '';

            if (modalTitle) modalTitle.textContent = title;
            if (modalCategory) modalCategory.textContent = 'EVENT';
            if (modalDate) modalDate.textContent = date + ' • ' + time;
            if (modalContent) modalContent.innerHTML = `<p>${desc}</p><p><strong>Waktu &amp; Lokasi:</strong> ${time}</p>`;

            if (modalImage) modalImage.style.display = 'none';
            if (articleModal) articleModal.style.display = 'flex';
        });
    });

    // Close Modals
    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', function() {
            if (articleModal) articleModal.style.display = 'none';
        });
    }

    if (articleModal) {
        articleModal.addEventListener('click', function(e) {
            if (e.target === articleModal) {
                articleModal.style.display = 'none';
            }
        });
    }


    /* ========================================================
       4. DYNAMIC "+ ADD" EVENT MODAL
       ======================================================== */
    const addEventModal = document.getElementById('addEventModal');
    const openAddEventBtn = document.getElementById('openAddEventBtn');
    const addEventCloseBtn = document.getElementById('addEventCloseBtn');
    const addEventCancelBtn = document.getElementById('addEventCancelBtn');
    const addEventForm = document.getElementById('addEventForm');
    const eventsListContainer = document.getElementById('eventsListContainer');

    if (openAddEventBtn && addEventModal) {
        openAddEventBtn.addEventListener('click', function() {
            addEventModal.style.display = 'flex';
        });
    }

    function closeAddModal() {
        if (addEventModal) addEventModal.style.display = 'none';
        if (addEventForm) addEventForm.reset();
    }

    if (addEventCloseBtn) addEventCloseBtn.addEventListener('click', closeAddModal);
    if (addEventCancelBtn) addEventCancelBtn.addEventListener('click', closeAddModal);
    if (addEventModal) {
        addEventModal.addEventListener('click', function(e) {
            if (e.target === addEventModal) closeAddModal();
        });
    }

    if (addEventForm) {
        addEventForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const title = document.getElementById('inputEventTitle').value;
            const day = document.getElementById('inputEventDay').value;
            const month = document.getElementById('inputEventMonth').value.toUpperCase();
            const meta = document.getElementById('inputEventMeta').value;
            const desc = document.getElementById('inputEventDesc').value;

            // Create new event item element
            const newEvent = document.createElement('div');
            newEvent.className = 'event-item event-open-modal';
            newEvent.dataset.title = title;
            newEvent.dataset.date = `${day} ${month}`;
            newEvent.dataset.time = meta;
            newEvent.dataset.desc = desc;

            newEvent.innerHTML = `
                <div class="event-date-box">
                    <span class="ev-day">${day}</span>
                    <span class="ev-month">${month}</span>
                </div>
                <div class="event-details">
                    <h4 class="event-name">${title}</h4>
                    <p class="event-meta">${meta}</p>
                    <a href="javascript:void(0)" class="read-more-link purple-link">Read More ...</a>
                </div>
            `;

            // Attach click listener for modal
            newEvent.addEventListener('click', function() {
                if (modalTitle) modalTitle.textContent = title;
                if (modalCategory) modalCategory.textContent = 'EVENT';
                if (modalDate) modalDate.textContent = `${day} ${month} • ${meta}`;
                if (modalContent) modalContent.innerHTML = `<p>${desc}</p><p><strong>Waktu &amp; Lokasi:</strong> ${meta}</p>`;
                if (modalImage) modalImage.style.display = 'none';
                if (articleModal) articleModal.style.display = 'flex';
            });

            if (eventsListContainer) {
                eventsListContainer.prepend(newEvent);
            }

            closeAddModal();
        });
    }

});
</script>
