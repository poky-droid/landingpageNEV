<div class="news-wrap">
    <!-- 1. CAROUSEL HEADER -->
    <div class="carousel-header">
        <div class="carousel-header-text">
            <h2 class="carousel-title">Galeri & <span class="title-accent">Agenda Kegiatan</span></h2>
            <p class="carousel-subtitle">
                Geser ke samping untuk menjelajahi dokumentasi riset, studi banding, malam keakraban, dan kegiatan laboratorium.
            </p>
        </div>
    </div>

    <!-- 2. CATEGORY FILTER BAR (TABS DI BAWAH JUDUL) -->
    <div class="news-category-bar">
        <button type="button" class="category-pill active" data-filter="all">Semua Agenda</button>
        <button type="button" class="category-pill" data-filter="studi-banding">Studi Banding</button>
        <button type="button" class="category-pill" data-filter="makrab">Makrab & Gathering</button>
        <button type="button" class="category-pill" data-filter="open-lab">Open Lab</button>
        <button type="button" class="category-pill" data-filter="pengmas">Pengmas</button>
    </div>

    <!-- 3. HORIZONTAL CAROUSEL DENGAN TOMBOL NAVIGASI DI SISI KANAN & KIRI -->
    <div class="carousel-outer-wrap">
        <!-- TOMBOL GESER KIRI (SIDE FLOATING PREV) -->
        <button type="button" class="carousel-float-btn prev" id="carouselPrevBtn" aria-label="Geser ke kiri">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </button>

        <div class="carousel-viewport" id="carouselViewport">
            <div class="carousel-track" id="carouselTrack">

            <!-- CARD 1: STUDI BANDING TELKOM UNIVERSITY -->
            <article class="carousel-card" data-category="studi-banding">
                <div class="card-media">
                    <img src="{{ asset('images/news/studibanding-cover.jpg') }}" alt="Studi Banding Telkom University" loading="lazy">
                    <span class="news-badge badge-red">STUDI BANDING</span>
                    <div class="card-media-overlay"></div>
                </div>
                <div class="card-body">
                    <div class="card-meta">
                        <span class="meta-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            12 Des 2025
                        </span>
                        <span class="meta-sep">•</span>
                        <span class="meta-item">Telkom University</span>
                    </div>
                    <h3 class="card-title">
                        <a href="javascript:void(0)" class="open-modal-trigger" data-agenda="studi-banding">Recap of Studi Banding: Diskusi & Sharing Bersama Telkom University Bandung</a>
                    </h3>
                    <p class="card-excerpt">
                        Network Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Lab & Mobile Communication Lab.
                    </p>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="card-action-btn open-modal-trigger" data-agenda="studi-banding">
                            <span>Baca Selengkapnya</span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- CARD 2: MALAM KEAKRABAN (MAKRAB) -->
            <article class="carousel-card" data-category="makrab">
                <div class="card-media">
                    <img src="{{ asset('images/news/makrab-cover.jpg') }}" alt="Malam Keakraban Network Evolution" loading="lazy">
                    <span class="news-badge badge-red">MAKRAB</span>
                    <div class="card-media-overlay"></div>
                </div>
                <div class="card-body">
                    <div class="card-meta">
                        <span class="meta-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            10–11 Jan 2026
                        </span>
                        <span class="meta-sep">•</span>
                        <span class="meta-item">Internal NEV</span>
                    </div>
                    <h3 class="card-title">
                        <a href="javascript:void(0)" class="open-modal-trigger" data-agenda="makrab">Recap of Malam Keakraban: Mempererat Solidaritas & Kekeluargaan</a>
                    </h3>
                    <p class="card-excerpt">
                        Momen berharga untuk mempererat solidaritas, membangun komunikasi, dan memperkuat rasa kekeluargaan antar anggota melalui kebersamaan, canda tawa, dan teamwork yang kuat.
                    </p>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="card-action-btn open-modal-trigger" data-agenda="makrab">
                            <span>Baca Selengkapnya</span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- CARD 3: NEV OPEN LAB (DATA DUMMY / DATA KOSONG) -->
            <article class="carousel-card is-dummy" data-category="open-lab">
                <div class="card-media card-media-placeholder">
                    <div class="placeholder-inner">
                        <div class="placeholder-icon-wrap">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                        </div>
                        <span class="placeholder-text">[ DOKUMENTASI KOSONG ]</span>
                        <span class="placeholder-sub">Dokumentasi Belum Tersedia</span>
                    </div>
                    <span class="news-badge badge-placeholder">COMING SOON</span>
                    <div class="card-media-overlay"></div>
                </div>
                <div class="card-body">
                    <div class="card-meta">
                        <span class="meta-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            Jadwal Menyusul
                        </span>
                        <span class="meta-sep">•</span>
                        <span class="meta-item">Data Dummy</span>
                    </div>
                    <h3 class="card-title">
                        <a href="javascript:void(0)" class="open-modal-trigger" data-agenda="open-lab">[Data Dummy] NEV Open Lab: Live Showcase Riset & Eksplorasi Hardware</a>
                    </h3>
                    <p class="card-excerpt">
                        Slot dummy agenda mendatang. Dokumentasi riset rack-server, routing enterprise lab, dan live cyber defense akan diperbarui setelah kegiatan terselenggara.
                    </p>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="card-action-btn open-modal-trigger" data-agenda="open-lab">
                            <span>Lihat Pratinjau</span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- CARD 4: PENGMAS (DATA DUMMY / DATA KOSONG) -->
            <article class="carousel-card is-dummy" data-category="pengmas">
                <div class="card-media card-media-placeholder">
                    <div class="placeholder-inner">
                        <div class="placeholder-icon-wrap">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                        </div>
                        <span class="placeholder-text">[ DOKUMENTASI KOSONG ]</span>
                        <span class="placeholder-sub">Dokumentasi Belum Tersedia</span>
                    </div>
                    <span class="news-badge badge-placeholder">COMING SOON</span>
                    <div class="card-media-overlay"></div>
                </div>
                <div class="card-body">
                    <div class="card-meta">
                        <span class="meta-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            Jadwal Menyusul
                        </span>
                        <span class="meta-sep">•</span>
                        <span class="meta-item">Data Dummy</span>
                    </div>
                    <h3 class="card-title">
                        <a href="javascript:void(0)" class="open-modal-trigger" data-agenda="pengmas">[Data Dummy] Pengabdian Masyarakat: Literasi Cyber Security & Jaringan</a>
                    </h3>
                    <p class="card-excerpt">
                        Slot dummy agenda mendatang. Dokumentasi program literasi keamanan siber dan pembenahan jaringan sekolah akan diunggah setelah kegiatan berlangsung.
                    </p>
                    <div class="card-footer">
                        <a href="javascript:void(0)" class="card-action-btn open-modal-trigger" data-agenda="pengmas">
                            <span>Lihat Pratinjau</span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </div>
            </article>

        </div>
    </div>

        <!-- TOMBOL GESER KANAN (SIDE FLOATING NEXT) -->
        <button type="button" class="carousel-float-btn next" id="carouselNextBtn" aria-label="Geser ke kanan">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>
    </div>

    <!-- 4. CAROUSEL PROGRESS BAR / TRACK INDICATOR -->
    <div class="carousel-progress-wrap">
        <div class="carousel-progress-bar">
            <div class="carousel-progress-fill" id="carouselProgressFill"></div>
        </div>
    </div>
</div>

<!-- =========================================================
     CYBER DETAIL MODAL (BACA SELENGKAPNYA / DETAIL KEGIATAN)
     ========================================================= -->
<div id="newsDetailModal" class="news-modal-overlay" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="news-modal-backdrop" id="modalBackdrop"></div>
    <div class="news-modal-dialog">
        <!-- CLOSE BUTTON -->
        <button type="button" class="news-modal-close" id="modalCloseBtn" aria-label="Tutup Detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <!-- MODAL GALLERY SLIDER -->
        <div class="modal-gallery" id="modalGallery">
            <div class="modal-main-image-wrap">
                <img id="modalMainImg" src="" alt="Dokumentasi Agenda" class="modal-main-img">
                <div class="modal-placeholder-view" id="modalPlaceholderView" style="display: none;">
                    <div class="placeholder-icon-wrap" style="width: 54px; height: 54px;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                    </div>
                    <span class="placeholder-text" style="margin-top: 8px;">[ DOKUMENTASI KOSONG ]</span>
                    <span class="placeholder-sub">Foto kegiatan belum tersedia • Akan diperbarui setelah agenda resmi</span>
                </div>
                <button type="button" class="modal-nav-btn prev" id="modalPrevBtn" aria-label="Foto Sebelumnya">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
                </button>
                <button type="button" class="modal-nav-btn next" id="modalNextBtn" aria-label="Foto Selanjutnya">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>
                <div class="modal-counter-pill" id="modalCounter">1 / 1</div>
            </div>
            <!-- THUMBNAILS STRIP -->
            <div class="modal-thumbnails" id="modalThumbnails"></div>
        </div>

        <!-- CYBER MODAL BODY -->
        <div class="cyber-modal-body">
            <div class="modal-header-meta">
                <span id="modalBadge" class="news-badge badge-red"></span>
                <span class="modal-date" id="modalDate"></span>
            </div>

            <h2 class="cyber-modal-title" id="modalTitle"></h2>

            <div class="cyber-modal-text" id="modalContent"></div>

            <div class="cyber-modal-tags" id="modalTags"></div>
        </div>
    </div>
</div>

<script>
(function() {
    // =========================================================
    // PILIHAN 3: CYBER HORIZONTAL CAROUSEL ENGINE
    // =========================================================
    function initCyberCarousel() {
        const track = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('carouselPrevBtn');
        const nextBtn = document.getElementById('carouselNextBtn');
        const currentIdxEl = document.getElementById('carouselCurrentIndex');
        const totalCountEl = document.getElementById('carouselTotalCount');
        const progressFill = document.getElementById('carouselProgressFill');
        const filterPills = document.querySelectorAll('.news-category-bar .category-pill');

        if (!track) return;

        const cards = Array.from(track.querySelectorAll('.carousel-card'));
        let activeFilter = 'all';
        let autoplayTimer = null;
        const autoplayInterval = 3800; // 3.8s

        function getVisibleCards() {
            return cards.filter(function(card) {
                return !card.classList.contains('is-hidden');
            });
        }

        function updateProgress() {
            const visible = getVisibleCards();
            if (totalCountEl) totalCountEl.textContent = String(visible.length).padStart(2, '0');

            const maxScroll = track.scrollWidth - track.clientWidth;
            const progress = maxScroll > 0 ? (track.scrollLeft / maxScroll) : 0;
            if (progressFill) progressFill.style.width = Math.min(100, Math.max(12, (progress * 100))) + '%';

            if (visible.length > 0 && currentIdxEl) {
                const cardWidth = visible[0].offsetWidth + 24;
                const currentIdx = Math.min(visible.length, Math.floor((track.scrollLeft + cardWidth / 2) / cardWidth) + 1);
                currentIdxEl.textContent = String(Math.max(1, currentIdx)).padStart(2, '0');
            }
        }

        function scrollNext() {
            const visible = getVisibleCards();
            if (!visible.length) return;
            const cardWidth = visible[0].offsetWidth + 24;
            const maxScroll = track.scrollWidth - track.clientWidth;

            if (track.scrollLeft >= maxScroll - 20) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: cardWidth, behavior: 'smooth' });
            }
        }

        function scrollPrev() {
            const visible = getVisibleCards();
            if (!visible.length) return;
            const cardWidth = visible[0].offsetWidth + 24;
            if (track.scrollLeft <= 20) {
                track.scrollTo({ left: track.scrollWidth, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            }
        }

        function startAutoplay() {
            stopAutoplay();
            autoplayTimer = setInterval(scrollNext, autoplayInterval);
        }

        function stopAutoplay() {
            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                scrollNext();
                startAutoplay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                scrollPrev();
                startAutoplay();
            });
        }

        track.addEventListener('scroll', updateProgress, { passive: true });
        track.addEventListener('mouseenter', stopAutoplay);
        track.addEventListener('mouseleave', startAutoplay);

        // Drag to scroll (Mouse)
        let isDown = false;
        let startX = 0;
        let scrollLeftPos = 0;

        track.addEventListener('mousedown', function(e) {
            isDown = true;
            track.classList.add('grabbing');
            startX = e.pageX - track.offsetLeft;
            scrollLeftPos = track.scrollLeft;
            stopAutoplay();
        });

        window.addEventListener('mouseup', function() {
            if (isDown) {
                isDown = false;
                track.classList.remove('grabbing');
                startAutoplay();
            }
        });

        track.addEventListener('mousemove', function(e) {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - track.offsetLeft;
            const walk = (x - startX) * 1.5;
            track.scrollLeft = scrollLeftPos - walk;
        });

        // Touch support
        track.addEventListener('touchstart', stopAutoplay, { passive: true });
        track.addEventListener('touchend', startAutoplay, { passive: true });

        // Category Filter
        filterPills.forEach(function(pill) {
            pill.addEventListener('click', function() {
                filterPills.forEach(function(p) { p.classList.remove('active'); });
                this.classList.add('active');
                activeFilter = this.getAttribute('data-filter');

                cards.forEach(function(card) {
                    const cat = card.getAttribute('data-category');
                    if (activeFilter === 'all' || cat === activeFilter) {
                        card.classList.remove('is-hidden');
                    } else {
                        card.classList.add('is-hidden');
                    }
                });

                track.scrollTo({ left: 0, behavior: 'smooth' });
                setTimeout(updateProgress, 120);
            });
        });

        updateProgress();
        startAutoplay();
    }

    // =========================================================
    // MODAL DETAIL AGENDA INTERACTION
    // =========================================================
    const newsAgendas = {
        'studi-banding': {
            badge: 'STUDI BANDING',
            badgeClass: 'badge-red',
            date: '12 Desember 2025 • Telkom University Bandung',
            title: 'Recap of Studi Banding: Diskusi & Sharing Bersama Telkom University Bandung',
            images: [
                "{{ asset('images/news/studibanding-cover.jpg') }}",
                "{{ asset('images/news/studibanding-slide2.jpg') }}",
                "{{ asset('images/news/studibanding-diskusi.jpg') }}",
                "{{ asset('images/news/studibanding-group.jpg') }}"
            ],
            paragraphs: [
                "Halo, NEVERS! 👋✨",
                "<strong>[RECAP OF STUDI BANDING]</strong> Network Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Laboratory & Mobile Communication Laboratory 🚀",
                "Kegiatan ini menjadi momen berharga untuk saling bertukar wawasan, pengalaman, serta memperluas relasi dalam dunia teknologi dan jaringan komputer. Diskusi hangat mencakup arsitektur server, manajemen laboratorium jaringan, riset bersama, hingga praktik terbaik pengelolaan sistem cloud lab.",
                "Semoga kolaborasi dan silaturahmi yang terjalin dapat membawa inovasi serta semangat baru untuk terus berkembang bersama 💡✨",
                "Terima kasih atas kunjungan dan sharing session yang luar biasa, NEVERS! Sampai jumpa di kesempatan berikutnya 🙌"
            ],
            tags: ['#NetworkEvolution', '#NEVERS', '#StudiBanding', '#AdaptiveNetwork', '#TelkomUniversity', '#NetworkEngineering', '#Kolaborasi', '#OraKonekOraKepenak']
        },
        'makrab': {
            badge: 'MAKRAB',
            badgeClass: 'badge-red',
            date: '10–11 Januari 2026 • Internal NEV',
            title: 'Recap of Malam Keakraban: Mempererat Solidaritas & Kekeluargaan',
            images: [
                "{{ asset('images/news/makrab-cover.jpg') }}",
                "{{ asset('images/news/makrab-sate.jpg') }}",
                "{{ asset('images/news/makrab-collage.jpg') }}",
                "{{ asset('images/news/makrab-text.jpg') }}"
            ],
            paragraphs: [
                "Halo, NEVERS! 👋✨",
                "<strong>[RECAP OF MALAM KEAKRABAN]</strong> Network Evolution kembali mengadakan malam keakraban sebagai momen untuk mempererat solidaritas, membangun komunikasi, serta memperkuat rasa kekeluargaan antar anggota 🤝🔥",
                "Melalui kebersamaan, canda tawa, dan berbagai aktivitas yang dilakukan bersama—mulai dari fun games, masak & makan bersama, hingga sharing santai seputar perjalanan divisi—diharapkan seluruh anggota dapat semakin kompak dalam bertumbuh, belajar, dan berkembang bersama di lingkungan Network Evolution 🚀",
                "Karena di NEV, ini bukan hanya tentang konfigurasi jaringan, tapi juga tentang membangun hubungan dan teamwork yang kuat 💡",
                "See you on the next journey, NEVERS! 🙌"
            ],
            tags: ['#NetworkEvolution', '#NEVERS', '#MalamKeakraban', '#TeamWork', '#Solidarity', '#AdaptiveNetwork', '#OraKonekOraKepenak']
        },
        'open-lab': {
            badge: 'COMING SOON',
            badgeClass: 'badge-placeholder',
            date: 'Jadwal Menyusul • Research Showcase',
            title: '[Data Dummy] NEV Open Lab: Live Showcase Riset & Eksplorasi Hardware',
            isDummy: true,
            images: [],
            paragraphs: [
                "Halo, NEVERS! 🌐",
                "<strong>[DATA DUMMY / AGENDA MENDATANG]</strong> Ini adalah kartu placeholder untuk agenda Open Lab mendatang.",
                "Dokumentasi lengkap, galeri foto demonstrasi rack-server laboratorium, simulasi routing enterprise, serta showcase pertahanan siber akan otomatis diperbarui di sini setelah kegiatan resmi terselenggara.",
                "Nantikan jadwal dan informasi selengkapnya melalui kanal resmi media sosial Network Evolution! 🚀"
            ],
            tags: ['#ComingSoon', '#DataDummy', '#OpenLab', '#NetworkEvolution', '#AdaptiveNetwork']
        },
        'pengmas': {
            badge: 'COMING SOON',
            badgeClass: 'badge-placeholder',
            date: 'Jadwal Menyusul • Sosialisasi & Edukasi',
            title: '[Data Dummy] Pengabdian Masyarakat: Literasi Cyber Security & Jaringan Sekolah',
            isDummy: true,
            images: [],
            paragraphs: [
                "Halo, NEVERS! 🤝",
                "<strong>[DATA DUMMY / AGENDA MENDATANG]</strong> Ini adalah kartu placeholder untuk agenda Pengabdian Masyarakat (Pengmas).",
                "Dokumentasi kegiatan dan arsip publikasi sosialisasi literasi keamanan siber serta instalasi jaringan sekolah mitra akan diunggah setelah pelaksanaan kegiatan selesai.",
                "Stay tuned untuk pembaruan agenda sosial NEV berikutnya! 🙌"
            ],
            tags: ['#ComingSoon', '#DataDummy', '#Pengmas', '#NetworkEvolution', '#SocialImpact']
        }
    };

    function initNewsModal() {
        const modal = document.getElementById('newsDetailModal');
        const modalBackdrop = document.getElementById('modalBackdrop');
        const modalCloseBtn = document.getElementById('modalCloseBtn');
        const modalMainImg = document.getElementById('modalMainImg');
        const modalPlaceholderView = document.getElementById('modalPlaceholderView');
        const modalPrevBtn = document.getElementById('modalPrevBtn');
        const modalNextBtn = document.getElementById('modalNextBtn');
        const modalCounter = document.getElementById('modalCounter');
        const modalThumbnails = document.getElementById('modalThumbnails');
        const modalBadge = document.getElementById('modalBadge');
        const modalDate = document.getElementById('modalDate');
        const modalTitle = document.getElementById('modalTitle');
        const modalContent = document.getElementById('modalContent');
        const modalTags = document.getElementById('modalTags');

        if (!modal) return;

        let currentAgenda = null;
        let currentImgIdx = 0;

        function updateModalImage(idx) {
            if (!currentAgenda || !currentAgenda.images || !currentAgenda.images.length) return;
            currentImgIdx = (idx + currentAgenda.images.length) % currentAgenda.images.length;
            modalMainImg.src = currentAgenda.images[currentImgIdx];
            modalCounter.textContent = (currentImgIdx + 1) + ' / ' + currentAgenda.images.length;

            const thumbs = modalThumbnails.querySelectorAll('.modal-thumb-item');
            thumbs.forEach(function(thumb, i) {
                if (i === currentImgIdx) thumb.classList.add('active');
                else thumb.classList.remove('active');
            });
        }

        function openModal(agendaKey) {
            const data = newsAgendas[agendaKey];
            if (!data) return;
            currentAgenda = data;
            currentImgIdx = 0;

            modalBadge.className = 'news-badge ' + data.badgeClass;
            modalBadge.textContent = data.badge;
            modalDate.textContent = data.date;
            modalTitle.textContent = data.title;

            modalContent.innerHTML = data.paragraphs.map(function(p) { return '<p>' + p + '</p>'; }).join('');

            modalTags.innerHTML = data.tags.map(function(t) {
                const isHighlight = t.indexOf('OraKonekOraKepenak') !== -1;
                return '<span class="hashtag-pill' + (isHighlight ? ' highlight' : '') + '">' + t + '</span>';
            }).join('');

            // Tampilkan galeri foto untuk agenda nyata, atau placeholder untuk data dummy
            if (data.isDummy || !data.images || data.images.length === 0) {
                if (modalPlaceholderView) modalPlaceholderView.style.display = 'flex';
                modalMainImg.style.display = 'none';
                modalPrevBtn.style.display = 'none';
                modalNextBtn.style.display = 'none';
                modalCounter.style.display = 'none';
                modalThumbnails.style.display = 'none';
                modalThumbnails.innerHTML = '';
            } else {
                if (modalPlaceholderView) modalPlaceholderView.style.display = 'none';
                modalMainImg.style.display = 'block';
                modalMainImg.src = data.images[0];
                modalCounter.textContent = '1 / ' + data.images.length;

                if (data.images.length > 1) {
                    modalPrevBtn.style.display = 'flex';
                    modalNextBtn.style.display = 'flex';
                    modalCounter.style.display = 'block';
                    modalThumbnails.style.display = 'flex';

                    modalThumbnails.innerHTML = data.images.map(function(img, i) {
                        return '<button type="button" class="modal-thumb-item' + (i === 0 ? ' active' : '') + '" data-idx="' + i + '" aria-label="Pilih foto ' + (i+1) + '"><img src="' + img + '" alt="Thumbnail"></button>';
                    }).join('');

                    modalThumbnails.querySelectorAll('.modal-thumb-item').forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            const idx = parseInt(this.getAttribute('data-idx'));
                            updateModalImage(idx);
                        });
                    });
                } else {
                    modalPrevBtn.style.display = 'none';
                    modalNextBtn.style.display = 'none';
                    modalCounter.style.display = 'none';
                    modalThumbnails.style.display = 'none';
                    modalThumbnails.innerHTML = '';
                }
            }

            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        modalPrevBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            updateModalImage(currentImgIdx - 1);
        });

        modalNextBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            updateModalImage(currentImgIdx + 1);
        });

        modalCloseBtn.addEventListener('click', closeModal);
        modalBackdrop.addEventListener('click', closeModal);

        document.addEventListener('keydown', function(e) {
            if (!modal.classList.contains('active')) return;
            if (e.key === 'Escape') closeModal();
            if (e.key === 'ArrowLeft') updateModalImage(currentImgIdx - 1);
            if (e.key === 'ArrowRight') updateModalImage(currentImgIdx + 1);
        });

        document.querySelectorAll('.open-modal-trigger').forEach(function(trigger) {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                const key = this.getAttribute('data-agenda');
                if (key) openModal(key);
            });
        });
    }

    function initPage() {
        initCyberCarousel(); // Inisialisasi Carousel Horizontal Interaktif (Pilihan 3)
        initNewsModal();     // Inisialisasi pop-up detail cyber
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPage);
    } else {
        initPage();
    }
})();
</script>

<style>
/* WRAPPER & CONTAINER */
.news-wrap {
    max-width: 1180px;
    width: 100%;
    margin: 0 auto;
    padding: 0 20px;
    font-family: 'Inter', sans-serif;
    color: #fff;
    box-sizing: border-box;
}

/* =========================================================
   PILIHAN 3: MODERN CYBER HORIZONTAL CAROUSEL
   ========================================================= */

/* 1. CAROUSEL HEADER */
.carousel-header {
    margin-bottom: 24px;
}

.carousel-header-text {
    max-width: 720px;
}

.carousel-title {
    font-size: clamp(1.7rem, 2.5vw, 2.2rem);
    font-weight: 700;
    color: #ffffff;
    line-height: 1.2;
    margin: 0 0 10px;
    letter-spacing: -0.4px;
}

.carousel-title .title-accent {
    color: #FF0033;
    text-shadow: 0 0 24px rgba(255, 0, 51, 0.45);
}

.carousel-subtitle {
    color: rgba(255, 255, 255, 0.62);
    font-size: 0.92rem;
    line-height: 1.6;
    margin: 0;
}

/* 2. CATEGORY FILTER BAR (TABS DI BAWAH JUDUL) */
.news-category-bar {
    display: flex;
    align-items: center;
    gap: 12px;
    margin: 0 0 28px;
    padding-bottom: 12px;
    overflow-x: auto;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    scrollbar-width: none;
}
.news-category-bar::-webkit-scrollbar {
    display: none;
}

.category-pill {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.6);
    font-family: 'Inter', sans-serif;
    font-size: 0.92rem;
    font-weight: 500;
    padding: 8px 18px;
    cursor: pointer;
    border-radius: 999px;
    white-space: nowrap;
    transition: all 0.25s ease;
    position: relative;
}

.category-pill:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.05);
}

.category-pill.active {
    color: #fff;
    font-weight: 700;
    background: rgba(255, 0, 51, 0.14);
    box-shadow: inset 0 0 0 1px rgba(255, 0, 51, 0.45);
}

/* BADGES */
.news-badge {
    display: inline-flex;
    align-items: center;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 1.2px;
    padding: 6px 14px;
    border-radius: 999px;
    text-transform: uppercase;
    backdrop-filter: blur(8px);
}

.badge-red {
    background: #FF0033;
    color: #fff;
    box-shadow: 0 0 16px rgba(255, 0, 51, 0.55);
}

.badge-blue {
    background: rgba(0, 150, 255, 0.22);
    color: #60b5ff;
    border: 1px solid rgba(0, 150, 255, 0.4);
}

.badge-cyan {
    background: rgba(0, 207, 255, 0.2);
    color: #00e5ff;
    border: 1px solid rgba(0, 207, 255, 0.4);
}

.badge-amber {
    background: rgba(255, 170, 0, 0.2);
    color: #ffbe33;
    border: 1px solid rgba(255, 170, 0, 0.4);
}

.hashtag-pill {
    font-size: 0.74rem;
    color: #999;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.08);
    padding: 3px 10px;
    border-radius: 999px;
    font-family: 'JetBrains Mono', monospace;
}

.hashtag-pill.highlight {
    color: #FF0033;
    border-color: rgba(255, 0, 51, 0.3);
    background: rgba(255, 0, 51, 0.06);
}

/* 3. CAROUSEL OUTER WRAPPER & SIDE FLOATING BUTTONS (GESER KIRI & KANAN) */
.carousel-outer-wrap {
    position: relative;
    width: 100%;
}

.carousel-float-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: rgba(12, 12, 18, 0.9);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    z-index: 15;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.7), 0 0 16px rgba(255, 0, 51, 0.25);
    transition: all 0.25s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.carousel-float-btn.prev {
    left: -24px;
}

.carousel-float-btn.next {
    right: -24px;
}

.carousel-float-btn:hover {
    background: #FF0033;
    border-color: #FF0033;
    transform: translateY(-50%) scale(1.12);
    box-shadow: 0 0 24px rgba(255, 0, 51, 0.9);
}

@media (max-width: 991px) {
    .carousel-float-btn.prev {
        left: -10px;
    }
    .carousel-float-btn.next {
        right: -10px;
    }
}

@media (max-width: 768px) {
    .carousel-float-btn {
        width: 40px;
        height: 40px;
    }
    .carousel-float-btn.prev {
        left: 2px;
    }
    .carousel-float-btn.next {
        right: 2px;
    }
}

.carousel-viewport {
    position: relative;
    width: 100%;
    overflow: hidden;
    margin: 0 -4px;
    padding: 4px;
}

.carousel-track {
    display: flex;
    gap: 24px;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    padding: 12px 4px 28px;
    scrollbar-width: none;
    cursor: grab;
}

.carousel-track.grabbing {
    cursor: grabbing;
    scroll-behavior: auto;
    scroll-snap-type: none;
    user-select: none;
}

.carousel-track::-webkit-scrollbar {
    display: none;
}

/* 4. GLASSMORPHISM CAROUSEL CARDS */
.carousel-card {
    flex: 0 0 350px;
    max-width: 350px;
    scroll-snap-align: start;
    background: rgba(14, 14, 20, 0.72);
    border: 1px solid rgba(255, 255, 255, 0.09);
    border-radius: 22px;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1),
                border-color 0.35s ease,
                box-shadow 0.35s ease,
                opacity 0.3s ease;
}

.carousel-card.is-hidden {
    display: none;
}

.carousel-card:hover {
    transform: translateY(-8px);
    border-color: rgba(255, 0, 51, 0.45);
    box-shadow: 0 20px 48px rgba(0, 0, 0, 0.75), 0 0 26px rgba(255, 0, 51, 0.18);
}

/* DUMMY / DATA KOSONG CARDS & PLACEHOLDER STYLES */
.carousel-card.is-dummy {
    border-style: dashed;
    border-color: rgba(255, 255, 255, 0.14);
}

.carousel-card.is-dummy:hover {
    border-style: solid;
    border-color: rgba(255, 0, 51, 0.45);
}

.card-media-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #07070a 0%, #111118 100%);
    position: relative;
    overflow: hidden;
}

.card-media-placeholder::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
    background-size: 20px 20px;
    pointer-events: none;
}

.placeholder-inner {
    position: relative;
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 16px;
    gap: 6px;
}

.placeholder-icon-wrap {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(255, 255, 255, 0.45);
    margin-bottom: 2px;
}

.placeholder-text {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 1px;
    color: rgba(255, 255, 255, 0.65);
}

.placeholder-sub {
    font-size: 0.72rem;
    color: rgba(255, 255, 255, 0.38);
}

.badge-placeholder {
    background: rgba(255, 255, 255, 0.08);
    color: rgba(255, 255, 255, 0.75);
    border: 1px dashed rgba(255, 255, 255, 0.25);
}

/* MODAL PLACEHOLDER VIEW */
.modal-placeholder-view {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #07070b 0%, #101018 100%);
    position: relative;
    text-align: center;
    padding: 24px;
    box-sizing: border-box;
    gap: 8px;
}

.modal-placeholder-view::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: 
        linear-gradient(rgba(255, 255, 255, 0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255, 255, 255, 0.035) 1px, transparent 1px);
    background-size: 24px 24px;
    pointer-events: none;
}

.card-media {
    position: relative;
    width: 100%;
    height: 220px;
    overflow: hidden;
    background: #08080a;
}

.card-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.carousel-card:hover .card-media img {
    transform: scale(1.06);
}

.card-media .news-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    z-index: 5;
    font-size: 0.65rem;
    padding: 5px 12px;
}

.card-media-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, transparent 50%, rgba(14, 14, 20, 0.8) 100%);
    pointer-events: none;
    z-index: 2;
}

.carousel-card .card-body,
.card-body {
    background: transparent !important;
    border: none !important;
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.card-meta {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 12px;
    font-size: 0.78rem;
    color: rgba(255, 255, 255, 0.55);
    font-family: 'JetBrains Mono', monospace;
}

.card-meta .meta-item {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.card-meta .meta-sep {
    color: rgba(255, 255, 255, 0.25);
}

.card-title {
    font-size: 1.08rem;
    font-weight: 700;
    line-height: 1.4;
    margin: 0 0 12px;
}

.card-title a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.25s;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.card-title a:hover {
    color: #FF0033;
}

.card-excerpt {
    color: rgba(255, 255, 255, 0.62);
    font-size: 0.86rem;
    line-height: 1.6;
    margin: 0 0 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    flex: 1;
}

.carousel-card .card-footer,
.card-footer {
    background: transparent !important;
    border: none !important;
    margin-top: auto;
    padding-top: 16px;
    border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
}

.card-action-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #FF0033;
    font-size: 0.86rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
}

.card-action-btn svg {
    transition: transform 0.25s ease;
}

.card-action-btn:hover {
    color: #ff335c;
}

.card-action-btn:hover svg {
    transform: translateX(4px);
}

/* 5. CAROUSEL PROGRESS BAR */
.carousel-progress-wrap {
    margin-top: 16px;
    display: flex;
    justify-content: center;
}

.carousel-progress-bar {
    width: 220px;
    height: 4px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 999px;
    overflow: hidden;
    position: relative;
}

.carousel-progress-fill {
    height: 100%;
    width: 20%;
    background: #FF0033;
    border-radius: 999px;
    box-shadow: 0 0 8px rgba(255, 0, 51, 0.8);
    transition: width 0.2s ease;
}


/* =========================================================
   CYBER DETAIL MODAL (POP-UP BACA SELENGKAPNYA)
   ========================================================= */
.news-modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px 16px;
    box-sizing: border-box;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1),
                visibility 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.news-modal-overlay.active {
    opacity: 1;
    visibility: visible;
}

.news-modal-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(4, 4, 7, 0.88);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

.news-modal-dialog {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 820px;
    max-height: 90vh;
    background: #0c0c10;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 32px rgba(255, 0, 51, 0.18);
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    overflow-x: hidden;
    transform: scale(0.95) translateY(18px);
    transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1);
}

.news-modal-overlay.active .news-modal-dialog {
    transform: scale(1) translateY(0);
}

/* Custom scrollbar for modal */
.news-modal-dialog::-webkit-scrollbar {
    width: 6px;
}
.news-modal-dialog::-webkit-scrollbar-track {
    background: #09090c;
}
.news-modal-dialog::-webkit-scrollbar-thumb {
    background: rgba(255, 0, 51, 0.4);
    border-radius: 999px;
}
.news-modal-dialog::-webkit-scrollbar-thumb:hover {
    background: #FF0033;
}

/* CLOSE BUTTON */
.news-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    z-index: 10;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.22);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    backdrop-filter: blur(8px);
    transition: all 0.25s ease;
}

.news-modal-close:hover {
    background: #FF0033;
    border-color: #FF0033;
    transform: rotate(90deg) scale(1.05);
    box-shadow: 0 0 16px rgba(255, 0, 51, 0.8);
}

/* MODAL GALLERY */
.modal-gallery {
    position: relative;
    width: 100%;
    background: #050508;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.modal-main-image-wrap {
    position: relative;
    width: 100%;
    height: 420px;
    overflow: hidden;
    background: #060608;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-main-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: opacity 0.25s ease;
}

.modal-nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.22);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    backdrop-filter: blur(8px);
    transition: all 0.25s ease;
    z-index: 5;
}

.modal-nav-btn.prev { left: 16px; }
.modal-nav-btn.next { right: 16px; }

.modal-nav-btn:hover {
    background: #FF0033;
    border-color: #FF0033;
    transform: translateY(-50%) scale(1.08);
    box-shadow: 0 0 16px rgba(255, 0, 51, 0.8);
}

.modal-counter-pill {
    position: absolute;
    bottom: 14px;
    right: 16px;
    background: rgba(0, 0, 0, 0.65);
    border: 1px solid rgba(255, 255, 255, 0.18);
    color: rgba(255, 255, 255, 0.9);
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.72rem;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 999px;
    backdrop-filter: blur(6px);
    z-index: 5;
}

/* THUMBNAILS STRIP */
.modal-thumbnails {
    display: flex;
    gap: 10px;
    padding: 12px 20px;
    background: rgba(8, 8, 12, 0.85);
    overflow-x: auto;
    align-items: center;
}

.modal-thumb-item {
    width: 58px;
    height: 58px;
    border-radius: 10px;
    border: 2px solid transparent;
    padding: 0;
    background: transparent;
    cursor: pointer;
    overflow: hidden;
    flex-shrink: 0;
    opacity: 0.55;
    transition: all 0.25s ease;
}

.modal-thumb-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.modal-thumb-item:hover {
    opacity: 0.85;
}

.modal-thumb-item.active {
    opacity: 1;
    border-color: #FF0033;
    box-shadow: 0 0 12px rgba(255, 0, 51, 0.6);
    transform: scale(1.04);
}

/* =========================================================
   CYBER MODAL BODY & TEXT ISOLATION
   ========================================================= */
.cyber-modal-body {
    padding: 32px 34px 38px;
    background: transparent !important;
}

.modal-header-meta {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
    flex-wrap: wrap;
}

.modal-date {
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.85rem;
    font-family: 'JetBrains Mono', monospace;
}

.cyber-modal-title {
    font-size: clamp(1.35rem, 2vw, 1.75rem);
    font-weight: 700;
    line-height: 1.35;
    color: #ffffff !important;
    margin: 0 0 20px;
    letter-spacing: -0.3px;
    background: transparent !important;
}

/* FIX: ISOLASI PENUH DARI BOOTSTRAP MODAL-CONTENT */
.cyber-modal-text {
    background: transparent !important;
    background-color: transparent !important;
    border: none !important;
    box-shadow: none !important;
    color: rgba(255, 255, 255, 0.88) !important;
    font-size: 0.96rem;
    line-height: 1.8;
    margin-bottom: 26px;
}

.cyber-modal-text p {
    margin: 0 0 16px;
    color: rgba(255, 255, 255, 0.86) !important;
    background: transparent !important;
    line-height: 1.8;
}

.cyber-modal-text p:last-child {
    margin-bottom: 0;
}

.cyber-modal-text strong {
    color: #ffffff !important;
    font-weight: 700;
}

.cyber-modal-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

/* =========================================================
   RESPONSIVE MOBILE & TABLET (SENADA DENGAN HOMEPAGE)
   ========================================================= */
@media (max-width: 768px) {
    .news-wrap {
        padding: 0 16px;
    }

    .carousel-header {
        margin-bottom: 20px;
    }

    .carousel-title {
        font-size: clamp(1.45rem, 4.5vw, 1.85rem);
    }

    .carousel-subtitle {
        font-size: 0.88rem;
        line-height: 1.55;
    }

    .news-category-bar {
        gap: 8px;
        margin-bottom: 22px;
        padding-bottom: 10px;
    }

    .category-pill {
        font-size: 0.82rem;
        padding: 6px 14px;
    }

    .carousel-float-btn {
        width: 40px;
        height: 40px;
    }
    .carousel-float-btn.prev {
        left: -8px;
    }
    .carousel-float-btn.next {
        right: -8px;
    }
}

@media (max-width: 640px) {
    .news-wrap {
        padding: 0 14px;
    }

    .carousel-header {
        margin-bottom: 16px;
    }

    .carousel-title {
        font-size: 1.38rem;
        letter-spacing: -0.2px;
    }

    .carousel-subtitle {
        font-size: 0.82rem;
    }

    .news-category-bar {
        margin-bottom: 16px;
        gap: 6px;
    }

    .category-pill {
        font-size: 0.78rem;
        padding: 5px 12px;
    }

    /* Carousel Cards on Mobile: Proporsional & Rapi */
    .carousel-track {
        gap: 16px;
        padding: 8px 4px 20px;
    }

    .carousel-card {
        flex: 0 0 min(290px, 80vw);
        max-width: min(290px, 80vw);
        border-radius: 18px;
    }

    .card-media {
        height: 175px;
    }

    .carousel-card .card-body,
    .card-body {
        padding: 16px 16px 18px !important;
    }

    .card-meta {
        font-size: 0.72rem;
        margin-bottom: 8px;
        gap: 6px;
    }

    .card-title {
        font-size: 0.98rem;
        line-height: 1.35;
        margin-bottom: 8px;
    }

    .card-excerpt {
        font-size: 0.82rem;
        line-height: 1.5;
        margin-bottom: 14px;
        -webkit-line-clamp: 2;
    }

    .carousel-card .card-footer,
    .card-footer {
        padding-top: 12px;
    }

    .card-action-btn {
        font-size: 0.8rem;
    }

    .carousel-float-btn {
        width: 36px;
        height: 36px;
    }

    .carousel-float-btn.prev {
        left: -6px;
    }

    .carousel-float-btn.next {
        right: -6px;
    }

    .carousel-progress-bar {
        width: 150px;
        height: 3px;
    }

    /* Modal Responsive on Mobile */
    .news-modal-overlay {
        padding: 12px 10px;
    }

    .news-modal-dialog {
        max-width: 100%;
        max-height: 92vh;
        border-radius: 18px;
    }

    .modal-main-image-wrap {
        height: 220px;
    }

    .cyber-modal-body {
        padding: 18px 16px 24px !important;
    }

    .cyber-modal-title {
        font-size: 1.15rem !important;
        line-height: 1.35;
        margin-bottom: 12px;
    }

    .cyber-modal-text {
        font-size: 0.86rem !important;
        line-height: 1.65;
        margin-bottom: 16px;
    }

    .cyber-modal-text p {
        margin-bottom: 10px;
        line-height: 1.65;
    }

    .modal-nav-btn {
        width: 32px;
        height: 32px;
    }
    .modal-nav-btn.prev { left: 8px; }
    .modal-nav-btn.next { right: 8px; }

    .modal-thumb-item {
        width: 44px;
        height: 44px;
        border-radius: 8px;
    }

    .modal-thumbnails {
        padding: 8px 14px;
        gap: 8px;
    }

    .news-modal-close {
        top: 8px;
        right: 8px;
        width: 32px;
        height: 32px;
    }
}
</style>