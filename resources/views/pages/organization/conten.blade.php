<!-- ==========================================================
     NEV ORGANIZATION (STRUKTUR ORGANISASI)
     Leadership & BPH: Ketum, Waketum, Sekre, Bendahara
     Departemen / Divisi: ARD, HR, Media Creative, PR
     Breakpoint: 768px Standar NEV
     ========================================================== -->
<div class="nev-org-wrap">

    <!-- ── 1. HEADER SECTION ── -->
    <header class="org-head">
        <h1 class="org-title">Struktur <span>Organisasi</span></h1>
        <p class="org-sub">Pimpinan dan Pengurus Harian Laboratorium Network Evolution Periode 2026/2027.</p>
    </header>


    <!-- ── 2. FEATURED SPOTLIGHT AUTO-SLIDE (KETUA & WAKIL KETUA) ── -->
    <div class="featured-spotlight-box" id="leaderSlider" aria-label="Sorotan Pimpinan Utama">

        <!-- SLIDE 1: KETUA UMUM (RIO ADI SETIONO) -->
        <div class="spotlight-slide active" data-slide="0">
            <span class="slide-bg-num">01</span>

            <div class="slide-photo-side">
                <div class="slide-photo-frame">
                    @if(file_exists(public_path('images/organization/ketua-umum.jpg')))
                        <img src="{{ asset('images/organization/ketua-umum.jpg') }}" alt="Rio Adi Setiono" class="leader-main-img">
                    @elseif(file_exists(public_path('images/organization/ketua-umum.png')))
                        <img src="{{ asset('images/organization/ketua-umum.png') }}" alt="Rio Adi Setiono" class="leader-main-img">
                    @else
                        <div class="slide-photo-ph">
                            <span class="ph-monogram">RAS</span>
                            <span class="ph-label">Foto Resmi</span>
                        </div>
                    @endif
                    <span class="photo-floating-pill"><span class="pill-num">01</span> &bull; Ketum</span>
                </div>
            </div>

            <div class="slide-info-side">
                <div class="info-top-badge">
                    <span class="spotlight-num">01</span>
                    <span class="officer-role-kicker">KETUA UMUM</span>
                </div>
                <h2 class="leader-headline">Rio Adi Setiono</h2>
                <p class="leader-brief">
                    Bertanggung jawab penuh atas arah strategis laboratorium, pengambil kebijakan tertinggi organisasi, serta representasi eksternal institusi Network Evolution.
                </p>

                <div class="profile-link-container">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="profile-link">
                        <span>Lihat profil</span>
                        <span class="profile-arrow">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDE 2: WAKIL KETUA UMUM (DESI YUNIAR NUR RAHMAH) -->
        <div class="spotlight-slide" data-slide="1">
            <span class="slide-bg-num vice-bg-num">01</span>

            <div class="slide-photo-side">
                <div class="slide-photo-frame">
                    @if(file_exists(public_path('images/organization/wakil-ketua-umum.jpg')))
                        <img src="{{ asset('images/organization/wakil-ketua-umum.jpg') }}" alt="Desi Yuniar Nur Rahmah" class="leader-main-img">
                    @elseif(file_exists(public_path('images/organization/wakil-ketua-umum.png')))
                        <img src="{{ asset('images/organization/wakil-ketua-umum.png') }}" alt="Desi Yuniar Nur Rahmah" class="leader-main-img">
                    @else
                        <div class="slide-photo-ph vice-ph">
                            <span class="ph-monogram">DYNR</span>
                            <span class="ph-label">Foto Resmi</span>
                        </div>
                    @endif
                    <span class="photo-floating-pill vice-pill"><span class="pill-num">01</span> &bull; Waketum</span>
                </div>
            </div>

            <div class="slide-info-side">
                <div class="info-top-badge vice-badge">
                    <span class="spotlight-num">01</span>
                    <span class="officer-role-kicker vice-kicker">WAKIL KETUA UMUM</span>
                </div>
                <h2 class="leader-headline">Desi Yuniar Nur Rahmah</h2>
                <p class="leader-brief">
                    Mengkoordinasikan operasional divisi riset, pengawasan program kerja, pembinaan internal fungsionaris, serta akselerasi program kerja laboratorium.
                </p>

                <div class="profile-link-container">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="profile-link">
                        <span>Lihat profil</span>
                        <span class="profile-arrow">↗</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- SLIDER CONTROLS (NAV DOTS & BUTTONS) -->
        <div class="slider-controls-bar">
            <div class="slider-dots">
                <button type="button" class="dot-btn active" data-slide-to="0" aria-label="Slide 1: Ketua Umum">
                    <span>01. KETUM</span>
                </button>
                <button type="button" class="dot-btn" data-slide-to="1" aria-label="Slide 2: Wakil Ketua Umum">
                    <span>01. WAKETUM</span>
                </button>
            </div>
            <div class="slider-arrows">
                <button type="button" class="arrow-nav-btn prev" id="btnPrevSlide" aria-label="Slide Sebelumnya">&larr;</button>
                <button type="button" class="arrow-nav-btn next" id="btnNextSlide" aria-label="Slide Berikutnya">&rarr;</button>
            </div>
        </div>

    </div>


    <!-- ── 3. SEKRETARIS & BENDAHARA (DUA KARTU BERSIH & SIMETRIS) ── -->
    <div class="sub-officers-section">
        <div class="officers-cards-grid">

            <!-- CARD 1: SEKRETARIS UMUM -->
            <div class="officer-card">
                <span class="card-bg-num">02</span>
                <div class="officer-card-inner">
                    <div class="officer-avatar-box">
                        @if(file_exists(public_path('images/organization/sekretaris.jpg')))
                            <img src="{{ asset('images/organization/sekretaris.jpg') }}" alt="Dwi Okta Suryaningrum" class="officer-avatar-img">
                        @elseif(file_exists(public_path('images/organization/sekretaris.png')))
                            <img src="{{ asset('images/organization/sekretaris.png') }}" alt="Dwi Okta Suryaningrum" class="officer-avatar-img">
                        @else
                            <div class="officer-avatar-ph">
                                <span>DOS</span>
                            </div>
                        @endif
                    </div>

                    <div class="officer-content">
                        <div class="officer-header-meta">
                            <span class="officer-num">02</span>
                            <span class="officer-role-kicker">SEKRETARIS UMUM</span>
                        </div>
                        <h3 class="officer-name">Dwi Okta Suryaningrum</h3>

                        <div class="profile-link-container">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="profile-link">
                                <span>Lihat profil</span>
                                <span class="profile-arrow">↗</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2: BENDAHARA UMUM -->
            <div class="officer-card">
                <span class="card-bg-num">03</span>
                <div class="officer-card-inner">
                    <div class="officer-avatar-box">
                        @if(file_exists(public_path('images/organization/bendahara.jpg')))
                            <img src="{{ asset('images/organization/bendahara.jpg') }}" alt="Vita Amellia Putri" class="officer-avatar-img">
                        @elseif(file_exists(public_path('images/organization/bendahara.png')))
                            <img src="{{ asset('images/organization/bendahara.png') }}" alt="Vita Amellia Putri" class="officer-avatar-img">
                        @else
                            <div class="officer-avatar-ph">
                                <span>VAP</span>
                            </div>
                        @endif
                    </div>

                    <div class="officer-content">
                        <div class="officer-header-meta">
                            <span class="officer-num">03</span>
                            <span class="officer-role-kicker">BENDAHARA UMUM</span>
                        </div>
                        <h3 class="officer-name">Vita Amellia Putri</h3>

                        <div class="profile-link-container">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="profile-link">
                                <span>Lihat profil</span>
                                <span class="profile-arrow">↗</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- ── 4. DIVISI ORGANISASI ── -->
    <div class="departments-section">
        <div class="dept-header-row">
            <span class="dept-main-kicker">DIVISI</span>
        </div>

        @php
        $divisionsData = [
            [
                'num' => '04',
                'title' => 'Academic Research and Development',
                'desc' => 'Bertanggung jawab atas riset ilmiah kurikulum praktikum, penyusunan dan pembaharuan modul pembelajaran, program sertifikasi teknis, serta publikasi paper dan prosiding konferensi internasional.',
                'koor' => [
                    'name' => 'Akbar Eka Wijaya',
                    'slug' => 'akbar-eka-wijaya',
                    'initials' => 'AEW',
                ],
                'staff' => [
                    ['name' => 'Fatih Satrio Asih Sedjati', 'slug' => 'fatih-satrio-asih-sedjati', 'initials' => 'FSA'],
                    ['name' => 'Gilang Hukma Rahmanda', 'slug' => 'gilang-hukma-rahmanda', 'initials' => 'GHR'],
                    ['name' => 'Muhammad Abdul Rasyid', 'slug' => 'muhammad-abdul-rasyid', 'initials' => 'MAR'],
                    ['name' => 'Biyan Naufal Remarsha', 'slug' => 'biyan-naufal-remarsha', 'initials' => 'BNR'],
                    ['name' => 'Arjuna Eka Rahmadani', 'slug' => 'arjuna-eka-rahmadani', 'initials' => 'AER'],
                    ['name' => 'M. Abdad Mubarok', 'slug' => 'm-abdad-mubarok', 'initials' => 'MAM'],
                    ['name' => 'Raditya Rizki Adi Putra', 'slug' => 'raditya-rizki-adi-putra', 'initials' => 'RRA'],
                ]
            ],
            [
                'num' => '05',
                'title' => 'Human Resource',
                'desc' => 'Mengelola pembinaan dan kaderisasi fungsionaris, pelaksanaan rekrutmen anggota baru (Open Recruitment), evaluasi performa internal berkala, serta program team building dan bonding lab.',
                'koor' => [
                    'name' => 'Masyul Khofif',
                    'slug' => 'masyul-khofif',
                    'initials' => 'MK',
                ],
                'staff' => [
                    ['name' => 'Anissa Fauzia Isyanti', 'slug' => 'anissa-fauzia-isyanti', 'initials' => 'AFI'],
                    ['name' => 'Denis Adityan Rohmansyah', 'slug' => 'denis-adityan-rohmansyah', 'initials' => 'DAR'],
                ]
            ],
            [
                'num' => '06',
                'title' => 'Media Creative',
                'desc' => 'Merancang identitas visual dan branding laboratorium, produksi materi promosi grafis & multimedia, pengelolaan media sosial resmi, serta dokumentasi visual seluruh kegiatan NEV.',
                'koor' => [
                    'name' => 'Danang Arifudin',
                    'slug' => 'danang-arifudin',
                    'initials' => 'DA',
                ],
                'staff' => [
                    ['name' => 'Bagas Wahyu Dwi Utomo', 'slug' => 'bagas-wahyu-dwi-utomo', 'initials' => 'BWU'],
                    ['name' => 'Saifudin Zuhri Ramadhan', 'slug' => 'saifudin-zuhri-ramadhan', 'initials' => 'SZR'],
                    ['name' => 'Mellyta Dwi Purwanti', 'slug' => 'mellyta-dwi-purwanti', 'initials' => 'MDP'],
                    ['name' => 'Rafael Albert Christoper Lumban Tobing', 'slug' => 'rafael-albert-christoper-lumban-tobing', 'initials' => 'RAC'],
                ]
            ],
            [
                'num' => '07',
                'title' => 'Public Relations',
                'desc' => 'Membangun relasi eksternal, kemitraan strategis dengan industri teknologi, kolaborasi riset antar-laboratorium dan institusi kampus, serta komunikasi publik dan keprotokoleran.',
                'koor' => [
                    'name' => 'Muhammad Frisqi Abiwardhana',
                    'slug' => 'muhammad-frisqi-abiwardhana',
                    'initials' => 'MFA',
                ],
                'staff' => [
                    ['name' => 'Muhammad Arif Azmi', 'slug' => 'muhammad-arif-azmi', 'initials' => 'MAA'],
                    ['name' => 'Naufal Auriga Heryanto', 'slug' => 'naufal-auriga-heryanto', 'initials' => 'NAH'],
                ]
            ],
        ];
        @endphp

        <div class="dept-list-wrap">
            @foreach($divisionsData as $index => $div)
                <div class="dept-row-item {{ $index === 0 ? 'active' : '' }}" data-dept="{{ $index }}">
                    <span class="dept-bg-num">{{ $div['num'] }}</span>
                    <div class="dept-row-header">
                        <span class="dept-num">{{ $div['num'] }}</span>
                        <h3 class="dept-title">{{ $div['title'] }}</h3>
                        <span class="dept-toggle-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                        </span>
                    </div>
                    <div class="dept-collapse-body">
                        <p class="dept-description">{{ $div['desc'] }}</p>

                        <!-- ROSTER / ANGGOTA DIVISI DALAM KARTU FOTO -->
                        <div class="dept-team-wrapper">
                            <div class="team-photo-grid">
                                <!-- KOORDINATOR -->
                                <div class="team-photo-card is-koor">
                                    <div class="card-photo-frame">
                                        @if(file_exists(public_path('images/organization/' . $div['koor']['slug'] . '.jpg')))
                                            <img src="{{ asset('images/organization/' . $div['koor']['slug'] . '.jpg') }}" alt="{{ $div['koor']['name'] }}" class="card-photo-img">
                                        @elseif(file_exists(public_path('images/organization/' . $div['koor']['slug'] . '.png')))
                                            <img src="{{ asset('images/organization/' . $div['koor']['slug'] . '.png') }}" alt="{{ $div['koor']['name'] }}" class="card-photo-img">
                                        @elseif(file_exists(public_path('images/organization/' . $div['koor']['slug'] . '.jpeg')))
                                            <img src="{{ asset('images/organization/' . $div['koor']['slug'] . '.jpeg') }}" alt="{{ $div['koor']['name'] }}" class="card-photo-img">
                                        @else
                                            <div class="card-photo-ph koor-ph">
                                                <span class="ph-monogram-text">{{ $div['koor']['initials'] }}</span>
                                                <span class="ph-slot-label">Foto Resmi</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-photo-info">
                                        <h4 class="card-person-name">{{ $div['koor']['name'] }}</h4>
                                        <span class="card-person-role koor-role">Koordinator Divisi</span>
                                        <div class="card-profile-link-container">
                                            <a href="{{ $div['koor']['github'] ?? 'https://github.com' }}" target="_blank" rel="noopener noreferrer" class="profile-link card-profile-link">
                                                <span>Lihat profil</span>
                                                <span class="profile-arrow">↗</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- STAFF -->
                                @foreach($div['staff'] as $staff)
                                    <div class="team-photo-card is-staff">
                                        <div class="card-photo-frame">
                                            @if(file_exists(public_path('images/organization/' . $staff['slug'] . '.jpg')))
                                                <img src="{{ asset('images/organization/' . $staff['slug'] . '.jpg') }}" alt="{{ $staff['name'] }}" class="card-photo-img">
                                            @elseif(file_exists(public_path('images/organization/' . $staff['slug'] . '.png')))
                                                <img src="{{ asset('images/organization/' . $staff['slug'] . '.png') }}" alt="{{ $staff['name'] }}" class="card-photo-img">
                                            @elseif(file_exists(public_path('images/organization/' . $staff['slug'] . '.jpeg')))
                                                <img src="{{ asset('images/organization/' . $staff['slug'] . '.jpeg') }}" alt="{{ $staff['name'] }}" class="card-photo-img">
                                            @else
                                                <div class="card-photo-ph">
                                                    <span class="ph-monogram-text">{{ $staff['initials'] }}</span>
                                                    <span class="ph-slot-label">Foto Resmi</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="card-photo-info">
                                            <h4 class="card-person-name">{{ $staff['name'] }}</h4>
                                            <span class="card-person-role">Staff Divisi</span>
                                            <div class="card-profile-link-container">
                                                <a href="{{ $staff['github'] ?? 'https://github.com' }}" target="_blank" rel="noopener noreferrer" class="profile-link card-profile-link">
                                                    <span>Lihat profil</span>
                                                    <span class="profile-arrow">↗</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>


<!-- ==========================================
     CSS STYLING (CONSISTENT PADDING & VISUAL HARMONY)
     ========================================== -->
<style>
* {
    box-sizing: border-box;
}

.nev-org-wrap {
    width: 100%;
    max-width: 860px;
    margin: 0 auto;
    padding: 0;
    color: #e6e8ec;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
}

/* 1. HEADER */
.org-head {
    text-align: center;
    margin-bottom: 32px;
}

.org-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 800;
    letter-spacing: -1px;
    color: #ffffff;
    margin: 0 0 10px;
    line-height: 1.15;
}

.org-title span {
    color: #FF0033;
    text-shadow: 0 0 24px rgba(255, 0, 51, 0.45);
}

.org-sub {
    font-size: clamp(13px, 2vw, 14px);
    color: rgba(255, 255, 255, 0.65);
    margin: 0 auto;
    max-width: 540px;
    line-height: 1.6;
}


/* 2. FEATURED SPOTLIGHT AUTO-SLIDER */
.featured-spotlight-box {
    position: relative;
    background: rgba(14, 14, 18, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 28px;
    margin-bottom: 28px;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
    overflow: hidden;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
}

.featured-spotlight-box:hover {
    border-color: rgba(255, 0, 51, 0.35);
    box-shadow: 0 20px 48px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.15);
}

.spotlight-slide {
    display: none;
    grid-template-columns: 240px 1fr;
    gap: 28px;
    align-items: center;
    opacity: 0;
    transform: translateY(6px);
    transition: opacity 0.4s ease, transform 0.4s ease;
}

.spotlight-slide.active {
    display: grid;
    opacity: 1;
    transform: translateY(0);
}

/* SLIDE PHOTO SIDE */
.slide-photo-side {
    width: 100%;
}

.slide-photo-frame {
    position: relative;
    width: 100%;
    aspect-ratio: 1 / 1.22;
    background: #0e0f14;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
}

.leader-main-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.slide-photo-ph {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: linear-gradient(180deg, #13141a 0%, #0a0b0e 100%);
}

.slide-photo-ph.vice-ph {
    background: linear-gradient(180deg, #13141a 0%, #0a0b0e 100%);
}

.ph-monogram {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 2.2rem;
    font-weight: 800;
    color: #e4e6eb;
    letter-spacing: 2px;
}

.ph-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9.5px;
    color: #646b7a;
    letter-spacing: 1px;
}

.photo-floating-pill {
    position: absolute;
    bottom: 12px;
    left: 50%;
    transform: translateX(-50%);
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9.5px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    padding: 3px 12px;
    border-radius: 999px;
    white-space: nowrap;
    background: rgba(11, 12, 16, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #e4e6eb;
    backdrop-filter: blur(8px);
}

.photo-floating-pill .pill-num {
    color: #FF0033;
    font-weight: 800;
}

.photo-floating-pill.vice-pill {
    background: rgba(11, 12, 16, 0.85);
    border-color: rgba(255, 255, 255, 0.15);
}

.photo-floating-pill.vice-pill .pill-num {
    color: #8c95a6;
}

/* WATERMARK NUMBERS (FOR VISUAL CONTINUITY 01, 02, 03) */
.slide-bg-num {
    position: absolute;
    top: 10px;
    right: 22px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 68px;
    font-weight: 800;
    color: rgba(255, 255, 255, 0.03);
    line-height: 1;
    pointer-events: none;
    user-select: none;
    letter-spacing: -2px;
}

.slide-bg-num.vice-bg-num {
    color: rgba(255, 255, 255, 0.025);
}

/* SLIDE INFO SIDE */
.slide-info-side {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.info-top-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
}

.spotlight-num {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 14px;
    font-weight: 700;
    color: #FF0033;
    letter-spacing: 0.5px;
    min-width: 24px;
}

.info-top-badge.vice-badge .spotlight-num {
    color: #a2abbc;
}

.officer-role-kicker.vice-kicker {
    color: #8c94a4;
}

.leader-headline {
    font-size: clamp(1.6rem, 3.8vw, 2.2rem);
    font-weight: 800;
    letter-spacing: -0.6px;
    color: #fff;
    margin: 0 0 8px;
    line-height: 1.15;
}

.leader-meta-chip {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: #8c95a6;
    margin-bottom: 14px;
}

.leader-brief {
    font-size: clamp(12.5px, 1.8vw, 13.5px);
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.7;
    margin: 0 0 18px;
    max-width: 480px;
}

/* SLIDER CONTROLS BAR */
.slider-controls-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 24px;
    padding-top: 18px;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
}

.slider-dots {
    display: flex;
    align-items: center;
    gap: 8px;
}

.dot-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 5px 12px;
    border-radius: 6px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.55);
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.25s ease;
}

.dot-btn:hover {
    color: #fff;
    border-color: rgba(255, 0, 51, 0.4);
    background: rgba(255, 0, 51, 0.08);
}

.dot-btn.active {
    background: rgba(255, 0, 51, 0.16);
    border-color: #FF0033;
    color: #fff;
    box-shadow: 0 0 12px rgba(255, 0, 51, 0.3);
}

.slider-arrows {
    display: flex;
    gap: 8px;
}

.arrow-nav-btn {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: rgba(255, 255, 255, 0.7);
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
}

.arrow-nav-btn:hover {
    color: #fff;
    background: rgba(255, 0, 51, 0.12);
    border-color: rgba(255, 0, 51, 0.4);
}


/* 3. SEKRETARIAT & KEUANGAN (TWO CONSISTENT CARDS) */
.sub-officers-section {
    width: 100%;
}

.officers-cards-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.officer-card {
    position: relative;
    overflow: hidden;
    background: rgba(14, 14, 18, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 24px;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
    transition: transform 0.25s ease,
                border-color 0.25s ease,
                box-shadow 0.25s ease;
}

.officer-card:hover {
    transform: translateY(-2px);
    border-color: rgba(255, 0, 51, 0.35);
    box-shadow: 0 20px 48px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.15);
}

.card-bg-num {
    position: absolute;
    top: 10px;
    right: 18px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 52px;
    font-weight: 800;
    color: rgba(255, 255, 255, 0.025);
    line-height: 1;
    pointer-events: none;
    user-select: none;
    letter-spacing: -2px;
}

.officer-card-inner {
    position: relative;
    z-index: 1;
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.officer-avatar-box {
    width: 78px;
    height: 92px;
    border-radius: 10px;
    background: #0e0f14;
    border: 1px solid rgba(255, 255, 255, 0.08);
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.officer-avatar-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.officer-avatar-ph {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(180deg, #13141a 0%, #0a0b0e 100%);
    font-family: 'IBM Plex Mono', monospace;
    font-size: 1.15rem;
    font-weight: 800;
    color: #e4e6eb;
    letter-spacing: 1px;
}

.officer-content {
    flex: 1;
}

.officer-header-meta {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 4px;
}

.officer-num {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 14px;
    font-weight: 700;
    color: #FF0033;
    letter-spacing: 0.5px;
    min-width: 24px;
}

.officer-role-kicker {
    display: inline-block;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    transition: color 0.2s ease;
}

.officer-card:hover .officer-role-kicker {
    color: #FF0033;
}

.officer-name {
    font-size: clamp(1.15rem, 2.5vw, 1.35rem);
    font-weight: 700;
    letter-spacing: -0.3px;
    color: #fff;
    margin: 0 0 4px;
    line-height: 1.25;
}

.officer-dept {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    color: rgba(255, 255, 255, 0.5);
    margin: 0 0 14px;
}


/* 4. BIDANG & DEPARTEMEN SECTION (SESUAI GAMBAR REFERENSI USER) */
.departments-section {
    width: 100%;
    margin-top: 36px;
}

.dept-header-row {
    margin-bottom: 16px;
    padding-left: 2px;
}

.dept-main-kicker {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2.5px;
    color: rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
}

.dept-list-wrap {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* ZERO-JITTER, LUXURY CALM ROW ITEM */
.dept-row-item {
    position: relative;
    background: rgba(14, 14, 18, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 14px;
    padding: 20px 24px;
    cursor: pointer;
    overflow: hidden;
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.08);
    transition: background-color 0.25s ease,
                border-color 0.25s ease,
                box-shadow 0.25s ease,
                transform 0.25s ease;
}

.dept-row-item:hover {
    background: rgba(255, 255, 255, 0.045);
    border-color: rgba(255, 0, 51, 0.35);
    box-shadow: 0 18px 44px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.12);
    transform: translateY(-1px);
}

.dept-row-item.active {
    background: rgba(14, 14, 18, 0.9);
    border-color: rgba(255, 0, 51, 0.4);
    box-shadow: 0 20px 48px rgba(0, 0, 0, 0.65), inset 0 1px 0 rgba(255, 255, 255, 0.12);
}

.dept-row-item.active:hover {
    background: rgba(14, 14, 18, 0.95);
    border-color: rgba(255, 0, 51, 0.5);
}

.dept-bg-num {
    position: absolute;
    top: 14px;
    right: 62px;
    font-family: 'IBM Plex Mono', monospace;
    font-size: 40px;
    font-weight: 800;
    color: rgba(255, 255, 255, 0.025);
    line-height: 1;
    pointer-events: none;
    user-select: none;
    letter-spacing: -1.5px;
    z-index: 0;
    transition: color 0.3s ease;
}

.dept-row-item:hover .dept-bg-num {
    color: rgba(255, 255, 255, 0.045);
}

.dept-row-item.active .dept-bg-num {
    color: rgba(255, 255, 255, 0.05);
}

.dept-row-header {
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 18px;
}

.dept-num {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 14px;
    font-weight: 700;
    color: #7d8596;
    min-width: 28px;
    letter-spacing: 0.5px;
    transition: color 0.2s ease;
}

.dept-row-item:hover .dept-num,
.dept-row-item.active .dept-num {
    color: #FF0033;
}

.dept-title {
    font-size: clamp(1.15rem, 3vw, 1.35rem);
    font-weight: 800;
    color: #e2e6ee;
    margin: 0;
    flex: 1;
    letter-spacing: -0.4px;
    transition: color 0.2s ease;
}

.dept-row-item:hover .dept-title,
.dept-row-item.active .dept-title {
    color: #ffffff;
}

.dept-toggle-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    color: #727c90;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.06);
    transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                color 0.2s ease,
                background-color 0.2s ease,
                border-color 0.2s ease;
}

.dept-row-item:hover .dept-toggle-icon {
    color: #fff;
    transform: translateX(3px);
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(255, 255, 255, 0.16);
}

.dept-row-item.active .dept-toggle-icon {
    transform: rotate(90deg);
    color: #FF0033;
    background: rgba(255, 0, 51, 0.1);
    border-color: rgba(255, 0, 51, 0.25);
}

.dept-row-item.active:hover .dept-toggle-icon {
    transform: rotate(90deg);
    background: rgba(255, 0, 51, 0.15);
    border-color: rgba(255, 0, 51, 0.35);
}

.dept-collapse-body {
    position: relative;
    z-index: 1;
    display: none;
    padding-top: 18px;
    padding-left: 46px;
    margin-top: 16px;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    animation: deptFadeIn 0.32s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

.dept-row-item.active .dept-collapse-body {
    display: block;
}

@keyframes deptFadeIn {
    from {
        opacity: 0;
        transform: translateY(-6px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.dept-description {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.65;
    margin: 0 0 12px;
    max-width: 620px;
}

/* ── DEPT TEAM / ROSTER STYLING ── */
.dept-team-wrapper {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin: 16px 0 4px;
}

.team-photo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(136px, 1fr));
    gap: 12px;
}

.team-photo-card {
    display: flex;
    flex-direction: column;
    background: rgba(0, 0, 0, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: 8px;
    overflow: hidden;
    transition: transform 0.25s ease,
                border-color 0.25s ease,
                box-shadow 0.25s ease;
}

.team-photo-card:hover {
    transform: translateY(-2px);
    border-color: rgba(255, 0, 51, 0.35);
    box-shadow: 0 10px 24px rgba(0, 0, 0, 0.55), 0 0 18px rgba(255, 0, 51, 0.12);
}

.team-photo-card.is-koor {
    background: rgba(255, 0, 51, 0.04);
    border-color: rgba(255, 0, 51, 0.3);
}

.team-photo-card.is-koor:hover {
    border-color: rgba(255, 0, 51, 0.5);
    box-shadow: 0 10px 26px rgba(0, 0, 0, 0.6);
}

.card-photo-frame {
    position: relative;
    width: 100%;
    aspect-ratio: 1 / 1.18;
    background: #000000;
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 9px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-photo-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.card-photo-ph {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 4px;
    background: linear-gradient(180deg, #13141a 0%, #0a0b0e 100%);
}

.card-photo-ph.koor-ph {
    background: linear-gradient(180deg, #161215 0%, #0a0b0e 100%);
}

.ph-monogram-text {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 1.25rem;
    font-weight: 800;
    color: #e4e6eb;
    letter-spacing: 1px;
}

.koor-ph .ph-monogram-text {
    color: #ff334b;
}

.ph-slot-label {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9px;
    color: rgba(255, 255, 255, 0.4);
    letter-spacing: 1px;
}

.card-photo-info {
    padding: 10px 4px 4px;
    display: flex;
    flex-direction: column;
    gap: 3px;
}

.card-person-name {
    font-size: 12.5px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.35;
    margin: 0;
}

.card-person-role {
    font-family: 'IBM Plex Mono', monospace;
    font-size: 9.5px;
    color: rgba(255, 255, 255, 0.5);
    letter-spacing: 0.5px;
}

.card-person-role.koor-role {
    color: #ff334b;
    font-weight: 600;
}


/* 5. LIHAT PROFIL LINK (CLEAN & MINIMALIST) */
.profile-link-container {
    display: inline-flex;
}

.profile-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding-bottom: 2px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.18);
    color: #9da4b2;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: -0.1px;
    transition: color 0.2s ease, border-color 0.2s ease;
}

.profile-link:hover {
    color: #ffffff;
    border-bottom-color: #FF0033;
}

.profile-arrow {
    font-size: 13px;
    line-height: 1;
    display: inline-block;
    transition: transform 0.2s ease;
}

.profile-link:hover .profile-arrow {
    transform: translate(2px, -2px);
}

.card-profile-link-container {
    display: inline-flex;
    margin-top: 5px;
}

.profile-link.card-profile-link {
    font-size: 11px;
    font-weight: 500;
    gap: 4px;
    padding-bottom: 1px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.14);
    color: #8c93a3;
}

.profile-link.card-profile-link .profile-arrow {
    font-size: 11px;
}

.profile-link.card-profile-link:hover {
    color: #ffffff;
    border-bottom-color: #FF0033;
}


/* ==========================================
     RESPONSIVE BREAKPOINTS (STANDAR 768px & 480px)
     ========================================== -->
@media (max-width: 768px) {
    .org-head {
        margin-bottom: 24px;
    }

    .slide-bg-num {
        font-size: 52px;
        right: 14px;
        top: 8px;
    }

    .card-bg-num {
        font-size: 42px;
        right: 14px;
        top: 8px;
    }

    .dot-btn {
        padding: 4px 9px;
        font-size: 10px;
    }

    .featured-spotlight-box {
        padding: 20px;
        border-radius: 14px;
        margin-bottom: 24px;
    }

    .spotlight-slide {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
    }

    .slide-photo-side {
        max-width: 200px;
        margin: 0 auto;
    }

    .info-top-badge {
        justify-content: center;
    }

    .leader-meta-chip {
        justify-content: center;
    }

    .leader-brief {
        margin: 0 auto 16px;
    }

    .profile-link-container {
        justify-content: center;
    }

    .slider-controls-bar {
        margin-top: 18px;
        padding-top: 14px;
    }

    .officers-cards-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }

    .officer-card {
        padding: 20px;
        border-radius: 14px;
    }

    .officer-card-inner {
        gap: 16px;
    }

    .dept-collapse-body {
        padding-left: 0;
    }

    .team-photo-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .dept-bg-num {
        font-size: 34px;
        top: 14px;
        right: 50px;
    }

    .dept-row-item {
        padding: 16px 14px;
    }
}

@media (max-width: 480px) {
    .slide-bg-num {
        font-size: 42px;
        right: 12px;
        top: 6px;
    }

    .card-bg-num {
        font-size: 34px;
        right: 12px;
        top: 6px;
    }

    .dept-bg-num {
        font-size: 28px;
        top: 14px;
        right: 44px;
    }

    .featured-spotlight-box {
        padding: 16px;
    }

    .slide-photo-side {
        max-width: 170px;
    }

    .officer-card {
        padding: 16px;
    }

    .officer-avatar-box {
        width: 60px;
        height: 60px;
        border-radius: 10px;
    }

    .officer-card-inner {
        gap: 14px;
    }

    .dept-row-header {
        gap: 12px;
    }

    .dept-num {
        min-width: 24px;
        font-size: 13px;
    }

    .dept-title {
        font-size: 1.1rem;
    }
}
</style>


<!-- ==========================================
     JAVASCRIPT: AUTO-SLIDER & DEPT ACCORDION
     ========================================== -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    /* ── 1. SPOTLIGHT AUTO-SLIDER ── */
    const slides = document.querySelectorAll('.spotlight-slide');
    const dots = document.querySelectorAll('.dot-btn');
    const btnPrev = document.getElementById('btnPrevSlide');
    const btnNext = document.getElementById('btnNextSlide');
    const sliderContainer = document.getElementById('leaderSlider');

    if (slides.length) {
        let currentIndex = 0;
        let autoSlideTimer = null;
        const intervalTime = 5500;

        function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;

            currentIndex = index;

            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === currentIndex);
            });

            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function startAutoSlide() {
            stopAutoSlide();
            autoSlideTimer = setInterval(nextSlide, intervalTime);
        }

        function stopAutoSlide() {
            if (autoSlideTimer) {
                clearInterval(autoSlideTimer);
                autoSlideTimer = null;
            }
        }

        if (btnNext) {
            btnNext.addEventListener('click', () => {
                nextSlide();
                startAutoSlide();
            });
        }

        if (btnPrev) {
            btnPrev.addEventListener('click', () => {
                prevSlide();
                startAutoSlide();
            });
        }

        dots.forEach((dot) => {
            dot.addEventListener('click', function () {
                const slideTo = parseInt(this.getAttribute('data-slide-to'), 10);
                showSlide(slideTo);
                startAutoSlide();
            });
        });

        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', stopAutoSlide);
            sliderContainer.addEventListener('mouseleave', startAutoSlide);
        }

        showSlide(0);
        startAutoSlide();
    }

    /* ── 2. DEPT COLLAPSE ACCORDION ── */
    const deptItems = document.querySelectorAll('.dept-row-item');
    deptItems.forEach((item) => {
        const header = item.querySelector('.dept-row-header');
        if (header) {
            header.addEventListener('click', function (e) {
                e.stopPropagation();
                const isCurrentlyActive = item.classList.contains('active');
                
                // Tutup item lain jika ingin model single accordion
                deptItems.forEach(d => d.classList.remove('active'));

                // Toggle item saat ini
                if (!isCurrentlyActive) {
                    item.classList.add('active');
                }
            });
        }
    });
});
</script>
