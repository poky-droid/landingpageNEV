<div class="org-container">
    <!-- 1. HEADER SECTION -->
    <div class="org-header-wrap">
        <div class="org-badge-pill">
            <span class="badge-dot"></span>
            STRUKTUR ORGANISASI
        </div>
        <h1 class="org-main-title">
            Struktur Kepengurusan <span class="title-accent">Network Evolution</span>
        </h1>
        <p class="org-subtitle">
            Hierarki kepemimpinan dan 4 divisi operasional Network Evolution periode 2025/2026 yang saling terintegrasi dalam memajukan riset, sumber daya manusia, dan teknologi jaringan digital.
        </p>

        <!-- STATS STRIP -->
        <div class="org-stats-strip">
            <div class="stat-pill">
                <span class="stat-num">24</span>
                <span class="stat-label">Total Pengurus</span>
            </div>
            <div class="stat-sep">•</div>
            <div class="stat-pill">
                <span class="stat-num">4</span>
                <span class="stat-label">Divisi Operasional</span>
            </div>
            <div class="stat-sep">•</div>
            <div class="stat-pill">
                <span class="stat-num">1</span>
                <span class="stat-label">BPH Inti</span>
            </div>
            <div class="stat-sep">•</div>
            <div class="stat-pill">
                <span class="stat-num">100%</span>
                <span class="stat-label">Sinergi Riset</span>
            </div>
        </div>
    </div>

    <!-- 2. CONTROL BAR (FILTER TABS & SEARCH) -->
    <div class="org-control-bar">
        <div class="org-filter-pills" id="orgFilterBar">
            <button type="button" class="filter-pill active" data-filter="all">Semua Struktur (24)</button>
            <button type="button" class="filter-pill" data-filter="bph">BPH Inti (4)</button>
            <button type="button" class="filter-pill" data-filter="ard">Academic R&D (8)</button>
            <button type="button" class="filter-pill" data-filter="hr">Human Resource (3)</button>
            <button type="button" class="filter-pill" data-filter="medkraf">Media Creative (6)</button>
            <button type="button" class="filter-pill" data-filter="pr">Public Relations (3)</button>
        </div>

        <div class="org-search-box">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <input type="text" id="orgSearchInput" placeholder="Cari nama atau jabatan..." autocomplete="off">
        </div>
    </div>

    <!-- 3. BAGAN STRUKTUR POHON (INTERCONNECTED HIERARCHICAL TREE) -->
    <div class="org-tree-wrapper" id="orgTreeWrapper">

        <!-- ====================================================
             LEVEL 1: KETUA UMUM (TOP LEADER)
             ==================================================== -->
        <div class="tree-tier tier-leader" data-section="bph">
            <div class="tier-label-pill">CHIEF EXECUTIVE</div>
            <div class="member-card card-leader" data-member-id="ketua">
                <div class="card-glow-edge"></div>
                <div class="member-avatar-wrap">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=300&auto=format&fit=crop&q=80" alt="Muhammad Fathur Rahman" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                    <div class="member-avatar-fallback">MFR</div>
                    <span class="role-status-dot leader" title="Ketua Umum"></span>
                </div>
                <div class="member-details">
                    <span class="member-badge badge-leader">KETUA UMUM</span>
                    <h3 class="member-name">Muhammad Fathur Rahman</h3>
                    <p class="member-role">Ketua Umum NEV</p>
                    <div class="member-meta-tag">
                        <span>Teknik Telekomunikasi</span> • <span>2023</span>
                    </div>
                </div>
                <div class="card-action-hint">
                    <span>Lihat Detail</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
        </div>

        <!-- CONNECTOR LINE: KETUA -> WAKIL -->
        <div class="tree-line-stem" data-section="bph">
            <span class="circuit-node"></span>
        </div>

        <!-- ====================================================
             LEVEL 2: WAKIL KETUA (VICE LEADER)
             ==================================================== -->
        <div class="tree-tier tier-vice" data-section="bph">
            <div class="tier-label-pill">VICE CHIEF EXECUTIVE</div>
            <div class="member-card card-vice" data-member-id="wakil">
                <div class="card-glow-edge"></div>
                <div class="member-avatar-wrap">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&auto=format&fit=crop&q=80" alt="Dimas Arya Pratama" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                    <div class="member-avatar-fallback">DAP</div>
                    <span class="role-status-dot vice" title="Wakil Ketua Umum"></span>
                </div>
                <div class="member-details">
                    <span class="member-badge badge-vice">WAKIL KETUA</span>
                    <h3 class="member-name">Dimas Arya Pratama</h3>
                    <p class="member-role">Wakil Ketua Umum NEV</p>
                    <div class="member-meta-tag">
                        <span>Teknik Informatika</span> • <span>2023</span>
                    </div>
                </div>
                <div class="card-action-hint">
                    <span>Lihat Detail</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </div>
            </div>
        </div>

        <!-- CONNECTOR LINE: WAKIL -> SEKRETARIS & BENDAHARA (BPH STEM & BRIDGE) -->
        <div class="tree-connector-bph" data-section="bph">
            <div class="stem-v"></div>
            <div class="cross-bridge-h">
                <span class="circuit-node left"></span>
                <span class="circuit-node center"></span>
                <span class="circuit-node right"></span>
            </div>
            <div class="drop-pair">
                <div class="drop-line left"></div>
                <div class="drop-line right"></div>
            </div>
        </div>

        <!-- ====================================================
             LEVEL 3: SEKRETARIS & BENDAHARA (BPH INTI)
             ==================================================== -->
        <div class="tree-tier tier-bph" data-section="bph">
            <div class="bph-row">
                <!-- SEKRETARIS -->
                <div class="bph-col" data-section="bph">
                    <div class="tier-label-pill sub">ADMINISTRATION</div>
                    <div class="member-card card-bph" data-member-id="sekretaris">
                        <div class="card-glow-edge"></div>
                        <div class="member-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&auto=format&fit=crop&q=80" alt="Anindya Putri Rahayu" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback">APR</div>
                            <span class="role-status-dot bph" title="Sekretaris"></span>
                        </div>
                        <div class="member-details">
                            <span class="member-badge badge-bph">SEKRETARIS</span>
                            <h3 class="member-name">Anindya Putri Rahayu</h3>
                            <p class="member-role">Sekretaris Umum</p>
                            <div class="member-meta-tag">
                                <span>Sistem Informasi</span> • <span>2023</span>
                            </div>
                        </div>
                        <div class="card-action-hint">
                            <span>Lihat Detail</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </div>
                </div>

                <!-- BENDAHARA -->
                <div class="bph-col" data-section="bph">
                    <div class="tier-label-pill sub">FINANCE & TREASURY</div>
                    <div class="member-card card-bph" data-member-id="bendahara">
                        <div class="card-glow-edge"></div>
                        <div class="member-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=300&auto=format&fit=crop&q=80" alt="Safira Nabila Dewi" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback">SND</div>
                            <span class="role-status-dot bph" title="Bendahara"></span>
                        </div>
                        <div class="member-details">
                            <span class="member-badge badge-bph">BENDAHARA</span>
                            <h3 class="member-name">Safira Nabila Dewi</h3>
                            <p class="member-role">Bendahara Umum</p>
                            <div class="member-meta-tag">
                                <span>Teknik Telekomunikasi</span> • <span>2023</span>
                            </div>
                        </div>
                        <div class="card-action-hint">
                            <span>Lihat Detail</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONNECTOR LINE: BPH TO 4 DIVISIONS (MAIN TRUNK & BUS LINE) -->
        <div class="tree-connector-to-divisions">
            <div class="main-trunk-stem">
                <span class="circuit-node"></span>
            </div>
            <div class="divisions-bus-bar">
                <span class="circuit-node node-ard"></span>
                <span class="circuit-node node-hr"></span>
                <span class="circuit-node node-medkraf"></span>
                <span class="circuit-node node-pr"></span>
            </div>
        </div>

        <!-- ====================================================
             LEVEL 4: 4 DIVISI OPERASIONAL (KOOR + ANGGOTA TERHUBUNG)
             ==================================================== -->
        <div class="tree-divisions-row">

            <!-- ── DIVISI 1: ACADEMIC RESEARCH & DEVELOPMENT (1 KOOR + 7 ANGGOTA) ── -->
            <div class="division-branch branch-ard" data-section="ard">
                <div class="division-header-card">
                    <div class="div-badge-pill ard">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        DIVISI 01
                    </div>
                    <h3 class="div-title">Academic R&D</h3>
                    <span class="div-headcount">1 Koor + 7 Anggota</span>
                </div>

                <div class="div-branch-stem"></div>

                <!-- KOORDINATOR ARD -->
                <div class="koor-card-wrap">
                    <div class="member-card card-koor" data-member-id="koor-ard">
                        <div class="card-glow-edge"></div>
                        <div class="member-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&auto=format&fit=crop&q=80" alt="Alifian Farhan Nugraha" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback">AFN</div>
                            <span class="role-status-dot koor ard" title="Koordinator"></span>
                        </div>
                        <div class="member-details">
                            <span class="member-badge badge-koor ard">KOORDINATOR</span>
                            <h4 class="member-name">Alifian Farhan Nugraha</h4>
                            <p class="member-role">Koor Academic R&D</p>
                            <div class="member-meta-tag">Teknik Telekomunikasi</div>
                        </div>
                        <div class="card-action-hint">
                            <span>Detail</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </div>
                </div>

                <!-- CONNECTOR TO 7 MEMBERS -->
                <div class="koor-to-members-connector">
                    <div class="koor-stem-v"></div>
                    <div class="members-bracket-label">7 ANGGOTA DIVISI</div>
                </div>

                <!-- 7 ANGGOTA ARD -->
                <div class="members-stack">
                    <!-- Anggota 1 -->
                    <div class="member-card card-staff" data-member-id="ard-1">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=180&auto=format&fit=crop&q=80" alt="Bagas Satria Utama" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">BSU</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Bagas Satria Utama</h5>
                            <p class="member-role">Staff Research & Networking Lab</p>
                        </div>
                    </div>

                    <!-- Anggota 2 -->
                    <div class="member-card card-staff" data-member-id="ard-2">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=180&auto=format&fit=crop&q=80" alt="Kevin Jonathan Wijaya" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">KJW</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Kevin Jonathan Wijaya</h5>
                            <p class="member-role">Staff Cloud & Sysadmin Research</p>
                        </div>
                    </div>

                    <!-- Anggota 3 -->
                    <div class="member-card card-staff" data-member-id="ard-3">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?w=180&auto=format&fit=crop&q=80" alt="M. Rizky Kurniawan" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">MRK</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">M. Rizky Kurniawan</h5>
                            <p class="member-role">Staff Cyber Defense & Security</p>
                        </div>
                    </div>

                    <!-- Anggota 4 -->
                    <div class="member-card card-staff" data-member-id="ard-4">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=180&auto=format&fit=crop&q=80" alt="Daffa Fakhri Haidar" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">DFH</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Daffa Fakhri Haidar</h5>
                            <p class="member-role">Staff Network Automation</p>
                        </div>
                    </div>

                    <!-- Anggota 5 -->
                    <div class="member-card card-staff" data-member-id="ard-5">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=180&auto=format&fit=crop&q=80" alt="Rian Aditya Pratama" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">RAP</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Rian Aditya Pratama</h5>
                            <p class="member-role">Staff Routing & Infrastructure</p>
                        </div>
                    </div>

                    <!-- Anggota 6 -->
                    <div class="member-card card-staff" data-member-id="ard-6">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=180&auto=format&fit=crop&q=80" alt="Nurul Aini Zahra" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">NAZ</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Nurul Aini Zahra</h5>
                            <p class="member-role">Staff Scientific Paper & Curriculum</p>
                        </div>
                    </div>

                    <!-- Anggota 7 -->
                    <div class="member-card card-staff" data-member-id="ard-7">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?w=180&auto=format&fit=crop&q=80" alt="Farhan Fauzan Hakim" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">FFH</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Farhan Fauzan Hakim</h5>
                            <p class="member-role">Staff Testbed & Hardware Lab</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── DIVISI 2: HUMAN RESOURCE (1 KOOR + 2 ANGGOTA) ── -->
            <div class="division-branch branch-hr" data-section="hr">
                <div class="division-header-card">
                    <div class="div-badge-pill hr">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        DIVISI 02
                    </div>
                    <h3 class="div-title">Human Resource</h3>
                    <span class="div-headcount">1 Koor + 2 Anggota</span>
                </div>

                <div class="div-branch-stem"></div>

                <!-- KOORDINATOR HR -->
                <div class="koor-card-wrap">
                    <div class="member-card card-koor" data-member-id="koor-hr">
                        <div class="card-glow-edge"></div>
                        <div class="member-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&auto=format&fit=crop&q=80" alt="Ilham Tegar Ramadhan" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback">ITR</div>
                            <span class="role-status-dot koor hr" title="Koordinator"></span>
                        </div>
                        <div class="member-details">
                            <span class="member-badge badge-koor hr">KOORDINATOR</span>
                            <h4 class="member-name">Ilham Tegar Ramadhan</h4>
                            <p class="member-role">Koor Human Resource</p>
                            <div class="member-meta-tag">Informatika</div>
                        </div>
                        <div class="card-action-hint">
                            <span>Detail</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </div>
                </div>

                <!-- CONNECTOR TO 2 MEMBERS -->
                <div class="koor-to-members-connector">
                    <div class="koor-stem-v"></div>
                    <div class="members-bracket-label">2 ANGGOTA DIVISI</div>
                </div>

                <!-- 2 ANGGOTA HR -->
                <div class="members-stack">
                    <!-- Anggota 1 -->
                    <div class="member-card card-staff" data-member-id="hr-1">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=180&auto=format&fit=crop&q=80" alt="Syahrul Gunawan" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">SG</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Syahrul Gunawan</h5>
                            <p class="member-role">Staff Talent & Onboarding</p>
                        </div>
                    </div>

                    <!-- Anggota 2 -->
                    <div class="member-card card-staff" data-member-id="hr-2">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=180&auto=format&fit=crop&q=80" alt="Tiara Maulida Sari" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">TMS</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Tiara Maulida Sari</h5>
                            <p class="member-role">Staff Member Welfare & Bonding</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── DIVISI 3: MEDIA CREATIVE (1 KOOR + 5 ANGGOTA) ── -->
            <div class="division-branch branch-medkraf" data-section="medkraf">
                <div class="division-header-card">
                    <div class="div-badge-pill medkraf">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg>
                        DIVISI 03
                    </div>
                    <h3 class="div-title">Media Creative</h3>
                    <span class="div-headcount">1 Koor + 5 Anggota</span>
                </div>

                <div class="div-branch-stem"></div>

                <!-- KOORDINATOR MEDIA CREATIVE -->
                <div class="koor-card-wrap">
                    <div class="member-card card-koor" data-member-id="koor-medkraf">
                        <div class="card-glow-edge"></div>
                        <div class="member-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=300&auto=format&fit=crop&q=80" alt="Naufal Zaki Al-Ghifari" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback">NZA</div>
                            <span class="role-status-dot koor medkraf" title="Koordinator"></span>
                        </div>
                        <div class="member-details">
                            <span class="member-badge badge-koor medkraf">KOORDINATOR</span>
                            <h4 class="member-name">Naufal Zaki Al-Ghifari</h4>
                            <p class="member-role">Koor Media Creative</p>
                            <div class="member-meta-tag">Desain Komunikasi Visual</div>
                        </div>
                        <div class="card-action-hint">
                            <span>Detail</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </div>
                </div>

                <!-- CONNECTOR TO 5 MEMBERS -->
                <div class="koor-to-members-connector">
                    <div class="koor-stem-v"></div>
                    <div class="members-bracket-label">5 ANGGOTA DIVISI</div>
                </div>

                <!-- 5 ANGGOTA MEDIA CREATIVE -->
                <div class="members-stack">
                    <!-- Anggota 1 -->
                    <div class="member-card card-staff" data-member-id="medkraf-1">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=180&auto=format&fit=crop&q=80" alt="Fajar Wahyu Hidayat" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">FWH</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Fajar Wahyu Hidayat</h5>
                            <p class="member-role">Staff Graphic Design & Visual</p>
                        </div>
                    </div>

                    <!-- Anggota 2 -->
                    <div class="member-card card-staff" data-member-id="medkraf-2">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=180&auto=format&fit=crop&q=80" alt="Raka Bayu Samudra" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">RBS</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Raka Bayu Samudra</h5>
                            <p class="member-role">Staff Video & Motion Graphics</p>
                        </div>
                    </div>

                    <!-- Anggota 3 -->
                    <div class="member-card card-staff" data-member-id="medkraf-3">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=180&auto=format&fit=crop&q=80" alt="Maya Anggraini Putri" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">MAP</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Maya Anggraini Putri</h5>
                            <p class="member-role">Staff Copywriting & Social Feed</p>
                        </div>
                    </div>

                    <!-- Anggota 4 -->
                    <div class="member-card card-staff" data-member-id="medkraf-4">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=180&auto=format&fit=crop&q=80" alt="Rendy Pratama Kusuma" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">RPK</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Rendy Pratama Kusuma</h5>
                            <p class="member-role">Staff UI/UX & Web Assets</p>
                        </div>
                    </div>

                    <!-- Anggota 5 -->
                    <div class="member-card card-staff" data-member-id="medkraf-5">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=180&auto=format&fit=crop&q=80" alt="Vania Putri Lestari" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">VPL</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Vania Putri Lestari</h5>
                            <p class="member-role">Staff Photography & Documentation</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ── DIVISI 4: PUBLIC RELATIONS (1 KOOR + 2 ANGGOTA) ── -->
            <div class="division-branch branch-pr" data-section="pr">
                <div class="division-header-card">
                    <div class="div-badge-pill pr">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        DIVISI 04
                    </div>
                    <h3 class="div-title">Public Relations</h3>
                    <span class="div-headcount">1 Koor + 2 Anggota</span>
                </div>

                <div class="div-branch-stem"></div>

                <!-- KOORDINATOR PR -->
                <div class="koor-card-wrap">
                    <div class="member-card card-koor" data-member-id="koor-pr">
                        <div class="card-glow-edge"></div>
                        <div class="member-avatar-wrap">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&auto=format&fit=crop&q=80" alt="Bryan Ardiansyah" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback">BA</div>
                            <span class="role-status-dot koor pr" title="Koordinator"></span>
                        </div>
                        <div class="member-details">
                            <span class="member-badge badge-koor pr">KOORDINATOR</span>
                            <h4 class="member-name">Bryan Ardiansyah</h4>
                            <p class="member-role">Koor Public Relations</p>
                            <div class="member-meta-tag">Sistem Informasi</div>
                        </div>
                        <div class="card-action-hint">
                            <span>Detail</span>
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </div>
                </div>

                <!-- CONNECTOR TO 2 MEMBERS -->
                <div class="koor-to-members-connector">
                    <div class="koor-stem-v"></div>
                    <div class="members-bracket-label">2 ANGGOTA DIVISI</div>
                </div>

                <!-- 2 ANGGOTA PR -->
                <div class="members-stack">
                    <!-- Anggota 1 -->
                    <div class="member-card card-staff" data-member-id="pr-1">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=180&auto=format&fit=crop&q=80" alt="Clarissa Amanda Putri" class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">CAP</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Clarissa Amanda Putri</h5>
                            <p class="member-role">Staff External Partnerships & Media</p>
                        </div>
                    </div>

                    <!-- Anggota 2 -->
                    <div class="member-card card-staff" data-member-id="pr-2">
                        <div class="member-avatar-wrap sm">
                            <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=180&auto=format&fit=crop&q=80" alt="Gilang Ramadhan S." class="member-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" loading="lazy">
                            <div class="member-avatar-fallback sm">GRS</div>
                        </div>
                        <div class="member-details">
                            <h5 class="member-name">Gilang Ramadhan S.</h5>
                            <p class="member-role">Staff Community & Outreach</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ====================================================
     MEMBER DETAIL MODAL (POP-UP BIODATA CYBER)
     ==================================================== -->
<div id="orgMemberModal" class="org-modal-overlay" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="org-modal-backdrop" id="orgModalBackdrop"></div>
    <div class="org-modal-dialog">
        <button type="button" class="org-modal-close" id="orgModalCloseBtn" aria-label="Tutup Detail">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>

        <div class="org-modal-header">
            <div class="org-modal-avatar-wrap">
                <img id="modalMemberImg" src="" alt="Foto Member" class="org-modal-avatar" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <div id="modalMemberFallback" class="org-modal-fallback">NEV</div>
            </div>
            <div class="org-modal-title-wrap">
                <span id="modalMemberBadge" class="member-badge badge-leader"></span>
                <h2 id="modalMemberName" class="org-modal-name"></h2>
                <p id="modalMemberRole" class="org-modal-role"></p>
                <div id="modalMemberDept" class="org-modal-dept"></div>
            </div>
        </div>

        <div class="org-modal-body">
            <div class="modal-info-grid">
                <div class="info-card">
                    <span class="info-lbl">DIVISI</span>
                    <span id="modalDivision" class="info-val"></span>
                </div>
                <div class="info-card">
                    <span class="info-lbl">PERIODE</span>
                    <span class="info-val">2025 / 2026</span>
                </div>
                <div class="info-card full">
                    <span class="info-lbl">BIDANG FOKUS / TANGGUNG JAWAB</span>
                    <span id="modalFocus" class="info-val"></span>
                </div>
            </div>

            <div class="modal-bio-wrap">
                <span class="info-lbl">KOMITMEN & DESKRIPSI PERAN</span>
                <p id="modalBio" class="modal-bio-text"></p>
            </div>

            <div class="modal-tags-wrap" id="modalTagsWrap"></div>
        </div>
    </div>
</div>

<script>
(function() {
    // DATA PROFIL 24 PENGURUS LENGKAP
    const membersData = {
        'ketua': {
            name: 'Muhammad Fathur Rahman',
            role: 'Ketua Umum NEV',
            badge: 'KETUA UMUM',
            badgeClass: 'badge-leader',
            division: 'Badan Pengurus Harian (BPH)',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=80',
            fallback: 'MFR',
            focus: 'Strategic Leadership, Organizational Direction & Laboratory Roadmap',
            bio: 'Bertanggung jawab penuh atas arah gerak strategis organisasi, koordinasi lintas divisi, menjaga hubungan baik dengan pimpinan universitas dan laboratorium mitra, serta memastikan visi NEV sebagai pusat riset kolaboratif mahasiswa tercapai.',
            tags: ['#Leadership', '#ResearchStrategy', '#TelkomUniversity', '#AdaptiveNetwork', '#TeamLead']
        },
        'wakil': {
            name: 'Dimas Arya Pratama',
            role: 'Wakil Ketua Umum NEV',
            badge: 'WAKIL KETUA',
            badgeClass: 'badge-vice',
            division: 'Badan Pengurus Harian (BPH)',
            dept: 'S1 Teknik Informatika • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&auto=format&fit=crop&q=80',
            fallback: 'DAP',
            focus: 'Operational Excellence, Program Execution & Cross-Division Synergy',
            bio: 'Mendampingi Ketua Umum dalam pengawasan pelaksanaan program kerja 4 divisi operasional, manajemen timeline riset, serta evaluasi berkala capaian harian seluruh anggota organisasi.',
            tags: ['#Operations', '#ProjectManagement', '#Teamwork', '#AdaptiveNetwork', '#Productivity']
        },
        'sekretaris': {
            name: 'Anindya Putri Rahayu',
            role: 'Sekretaris Umum',
            badge: 'SEKRETARIS',
            badgeClass: 'badge-bph',
            division: 'Badan Pengurus Harian (BPH)',
            dept: 'S1 Sistem Informasi • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500&auto=format&fit=crop&q=80',
            fallback: 'APR',
            focus: 'Administrative Systems, Archiving, MoUs & Official Correspondence',
            bio: 'Mengelola tata kelola administrasi organisasi, persuratan resmi, notulensi rapat evaluasi, arsip dokumen riset, serta koordinasi jadwal agenda formal internal dan eksternal.',
            tags: ['#Administration', '#Documentation', '#Governance', '#Archiving']
        },
        'bendahara': {
            name: 'Safira Nabila Dewi',
            role: 'Bendahara Umum',
            badge: 'BENDAHARA',
            badgeClass: 'badge-bph',
            division: 'Badan Pengurus Harian (BPH)',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=500&auto=format&fit=crop&q=80',
            fallback: 'SND',
            focus: 'Budget Planning, Financial Transparency & Sponsorship Accounting',
            bio: 'Mengatur alur kas masuk dan keluar organisasi, penyusunan rancangan anggaran belanja divisi (RAB), transparansi pembukuan keuangan, serta pelaporan pendanaan riset laboratorium.',
            tags: ['#Finance', '#Budgeting', '#Transparency', '#CashFlow']
        },

        // ACADEMIC R&D
        'koor-ard': {
            name: 'Alifian Farhan Nugraha',
            role: 'Koordinator Academic R&D',
            badge: 'KOORDINATOR ARD',
            badgeClass: 'badge-koor ard',
            division: 'Academic Research & Development',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2022',
            img: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&auto=format&fit=crop&q=80',
            fallback: 'AFN',
            focus: 'Research Roadmaps, Laboratory Architecture & Technology Curriculum',
            bio: 'Memimpin perumusan silabus riset, penjadwalan sharing session teknologi, serta membimbing 7 anggota divisi dalam riset jaringan komputer, server, dan cybersecurity.',
            tags: ['#ResearchLead', '#NetworkArchitecture', '#R&D', '#Mentorship']
        },
        'ard-1': {
            name: 'Bagas Satria Utama',
            role: 'Staff Research & Networking Lab',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=500&auto=format&fit=crop&q=80',
            fallback: 'BSU',
            focus: 'Cisco Routing, Enterprise Switching & Protocol Simulation',
            bio: 'Fokus pada riset implementasi routing dinamis enterprise (BGP, OSPF) dan pemodelan topologi jaringan berkecepatan tinggi.',
            tags: ['#Cisco', '#Routing', '#Switching', '#GNS3']
        },
        'ard-2': {
            name: 'Kevin Jonathan Wijaya',
            role: 'Staff Cloud & Sysadmin Research',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Teknik Informatika • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=500&auto=format&fit=crop&q=80',
            fallback: 'KJW',
            focus: 'Linux Server, Proxmox VE & Cloud Virtualization',
            bio: 'Mengelola server riset internal NEV, otomatisasi kontainer Docker, dan penyediaan infrastruktur komputasi lab virtual.',
            tags: ['#Sysadmin', '#Linux', '#Proxmox', '#Docker']
        },
        'ard-3': {
            name: 'M. Rizky Kurniawan',
            role: 'Staff Cyber Defense & Security',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Rekayasa Perangkat Lunak • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?w=500&auto=format&fit=crop&q=80',
            fallback: 'MRK',
            focus: 'Penetration Testing, Vulnerability Assessment & Firewall Hardening',
            bio: 'Mempelajari metodologi ethical hacking, mitigasi serangan DDoS, audit keamanan server jaringan, serta analisis lalu lintas Wireshark.',
            tags: ['#CyberSecurity', '#PenTest', '#Wireshark', '#Firewall']
        },
        'ard-4': {
            name: 'Daffa Fakhri Haidar',
            role: 'Staff Network Automation',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=500&auto=format&fit=crop&q=80',
            fallback: 'DFH',
            focus: 'Python for Network Engineers, Ansible & Netmiko',
            bio: 'Mengembangkan skrip otomatisasi konfigurasi perangkat switch & router massal menggunakan Python dan Ansible playbook.',
            tags: ['#Automation', '#Python', '#Ansible', '#DevNet']
        },
        'ard-5': {
            name: 'Rian Aditya Pratama',
            role: 'Staff Routing & Infrastructure',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=500&auto=format&fit=crop&q=80',
            fallback: 'RAP',
            focus: 'SDN (Software-Defined Networking) & Adaptive Laboratory',
            bio: 'Melakukan eksperimen controller OpenFlow dan optimasi throughput pada arsitektur Adaptive Network Laboratory.',
            tags: ['#SDN', '#OpenFlow', '#AdaptiveNetwork', '#QoS']
        },
        'ard-6': {
            name: 'Nurul Aini Zahra',
            role: 'Staff Scientific Paper & Curriculum',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Sistem Informasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=80',
            fallback: 'NAZ',
            focus: 'Scientific Writing, Research Papers & Academic Workshops',
            bio: 'Menyusun modul pelatihan teknis, panduan praktikum lab, dan mengkoordinasi penulisan jurnal ilmiah anggota.',
            tags: ['#PaperWriting', '#Academic', '#Curriculum', '#Research']
        },
        'ard-7': {
            name: 'Farhan Fauzan Hakim',
            role: 'Staff Testbed & Hardware Lab',
            badge: 'STAFF ARD',
            badgeClass: 'badge-staff',
            division: 'Academic Research & Development',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1463453091185-61582044d556?w=500&auto=format&fit=crop&q=80',
            fallback: 'FFH',
            focus: 'Hardware Maintenance, Rack Server Cabling & Patch Panels',
            bio: 'Memelihara rack server fisik, manajemen pengkabelan serat optik (FTTH / UTP Cat6), serta kalibrasi perangkat keras lab.',
            tags: ['#HardwareLab', '#ServerRack', '#Cabling', '#Infrastructure']
        },

        // HUMAN RESOURCE
        'koor-hr': {
            name: 'Ilham Tegar Ramadhan',
            role: 'Koordinator Human Resource',
            badge: 'KOORDINATOR HR',
            badgeClass: 'badge-koor hr',
            division: 'Human Resource',
            dept: 'S1 Teknik Informatika • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&auto=format&fit=crop&q=80',
            fallback: 'ITR',
            focus: 'Talent Management, People Development & Organizational Culture',
            bio: 'Bertanggung jawab atas manajemen sumber daya manusia, kenyamanan anggota, pengembangan soft skills, dan menjaga kekeluargaan di NEV.',
            tags: ['#PeopleLead', '#Culture', '#HRManagement', '#Solidarity']
        },
        'hr-1': {
            name: 'Syahrul Gunawan',
            role: 'Staff Talent & Onboarding',
            badge: 'STAFF HR',
            badgeClass: 'badge-staff',
            division: 'Human Resource',
            dept: 'S1 Sistem Informasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=500&auto=format&fit=crop&q=80',
            fallback: 'SG',
            focus: 'Open Recruitment, Onboarding Process & Member Database',
            bio: 'Mengkoordinasi proses seleksi anggota baru, registrasi profil, serta pemetaan minat riset personil.',
            tags: ['#Recruitment', '#Onboarding', '#Database', '#HR']
        },
        'hr-2': {
            name: 'Tiara Maulida Sari',
            role: 'Staff Member Welfare & Bonding',
            badge: 'STAFF HR',
            badgeClass: 'badge-staff',
            division: 'Human Resource',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=500&auto=format&fit=crop&q=80',
            fallback: 'TMS',
            focus: 'Malam Keakraban, Gathering, Bonding Games & Member Engagement',
            bio: 'Merancang acara rekreasi, malam keakraban (Makrab), mini games, dan program apresiasi berkala antar anggota.',
            tags: ['#Makrab', '#Bonding', '#Engagement', '#TeamBuilding']
        },

        // MEDIA CREATIVE
        'koor-medkraf': {
            name: 'Naufal Zaki Al-Ghifari',
            role: 'Koordinator Media Creative',
            badge: 'KOORDINATOR MEDKRAF',
            badgeClass: 'badge-koor medkraf',
            division: 'Media Creative',
            dept: 'S1 Desain Komunikasi Visual • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=500&auto=format&fit=crop&q=80',
            fallback: 'NZA',
            focus: 'Visual Identity, Cyber Branding & Creative Direction',
            bio: 'Memimpin tim kreatif dalam merancang identitas visual modern NEV, panduan grafis cyber, dan konten publikasi digital berkualitas tinggi.',
            tags: ['#CreativeDirector', '#Branding', '#CyberDesign', '#Visual']
        },
        'medkraf-1': {
            name: 'Fajar Wahyu Hidayat',
            role: 'Staff Graphic Design & Visual',
            badge: 'STAFF MEDKRAF',
            badgeClass: 'badge-staff',
            division: 'Media Creative',
            dept: 'S1 Desain Komunikasi Visual • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&auto=format&fit=crop&q=80',
            fallback: 'FWH',
            focus: 'Poster Design, Carousel Infographics & Cyber Typography',
            bio: 'Membuat aset grafis publikasi Instagram, poster seminar riset, dan infografis teknologi jaringan komputer.',
            tags: ['#GraphicDesign', '#Photoshop', '#Illustrator', '#Infographic']
        },
        'medkraf-2': {
            name: 'Raka Bayu Samudra',
            role: 'Staff Video & Motion Graphics',
            badge: 'STAFF MEDKRAF',
            badgeClass: 'badge-staff',
            division: 'Media Creative',
            dept: 'S1 Teknik Informatika • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=500&auto=format&fit=crop&q=80',
            fallback: 'RBS',
            focus: 'Reels Editing, Motion Bumper & Event Aftermovie',
            bio: 'Memproduksi konten video dinamis, teaser kegiatan studi banding, dan motion graphics bumper media sosial.',
            tags: ['#VideoEditing', '#PremierePro', '#AfterEffects', '#Motion']
        },
        'medkraf-3': {
            name: 'Maya Anggraini Putri',
            role: 'Staff Copywriting & Social Feed',
            badge: 'STAFF MEDKRAF',
            badgeClass: 'badge-staff',
            division: 'Media Creative',
            dept: 'S1 Sistem Informasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=500&auto=format&fit=crop&q=80',
            fallback: 'MAP',
            focus: 'Content Planning, Social Media Copy & Tech Storytelling',
            bio: 'Menulis narasi caption media sosial, storytelling kegiatan riset, dan strategi komunikasi feed Instagram resmi.',
            tags: ['#Copywriting', '#SocialMedia', '#Storytelling', '#ContentStrategy']
        },
        'medkraf-4': {
            name: 'Rendy Pratama Kusuma',
            role: 'Staff UI/UX & Web Assets',
            badge: 'STAFF MEDKRAF',
            badgeClass: 'badge-staff',
            division: 'Media Creative',
            dept: 'S1 Rekayasa Perangkat Lunak • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&auto=format&fit=crop&q=80',
            fallback: 'RPK',
            focus: 'Figma Prototyping, Web Cyber Aesthetics & Iconography',
            bio: 'Merancang antarmuka website NEV, mockup landing page interaktif, dan ikonografi digital bertema cyber.',
            tags: ['#UIUX', '#Figma', '#WebDesign', '#CyberAesthetics']
        },
        'medkraf-5': {
            name: 'Vania Putri Lestari',
            role: 'Staff Photography & Documentation',
            badge: 'STAFF MEDKRAF',
            badgeClass: 'badge-staff',
            division: 'Media Creative',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=500&auto=format&fit=crop&q=80',
            fallback: 'VPL',
            focus: 'Camera Operation, Event Photography & Color Grading',
            bio: 'Mendokumentasikan seluruh kegiatan studi banding, open lab, dan malam keakraban dengan hasil foto profesional.',
            tags: ['#Photography', '#Lightroom', '#Documentation', '#EventPhotos']
        },

        // PUBLIC RELATIONS
        'koor-pr': {
            name: 'Bryan Ardiansyah',
            role: 'Koordinator Public Relations',
            badge: 'KOORDINATOR PR',
            badgeClass: 'badge-koor pr',
            division: 'Public Relations',
            dept: 'S1 Sistem Informasi • Angkatan 2023',
            img: 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=500&auto=format&fit=crop&q=80',
            fallback: 'BA',
            focus: 'External Partnerships, Inter-Campus Networking & Media Outreach',
            bio: 'Membangun relasi eksternal bersama universitas mitra (seperti Telkom University Bandung), instansi industri, dan komunitas riset teknologi nasional.',
            tags: ['#PRLead', '#Partnerships', '#Collaboration', '#Networking']
        },
        'pr-1': {
            name: 'Clarissa Amanda Putri',
            role: 'Staff External Partnerships & Media',
            badge: 'STAFF PR',
            badgeClass: 'badge-staff',
            division: 'Public Relations',
            dept: 'S1 Teknik Telekomunikasi • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500&auto=format&fit=crop&q=80',
            fallback: 'CAP',
            focus: 'Media Partner, Sponsorship Proposal & Guest Liaison',
            bio: 'Menghubungkan NEV dengan media partner teknologi dan mengelola komunikasi sponsorship untuk kegiatan besar.',
            tags: ['#MediaPartner', '#Sponsorship', '#GuestLiaison', '#PR']
        },
        'pr-2': {
            name: 'Gilang Ramadhan S.',
            role: 'Staff Community & Outreach',
            badge: 'STAFF PR',
            badgeClass: 'badge-staff',
            division: 'Public Relations',
            dept: 'S1 Informatika • Angkatan 2024',
            img: 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=500&auto=format&fit=crop&q=80',
            fallback: 'GRS',
            focus: 'Community Outreach, Pengabdian Masyarakat & School Roadshow',
            bio: 'Mengkoordinasi agenda Pengabdian Masyarakat (Pengmas), sosialisasi literasi keamanan siber ke sekolah-sekolah mitra.',
            tags: ['#Community', '#Pengmas', '#SocialImpact', '#Outreach']
        }
    };

    // INISIALISASI MODAL INTERACTIVE
    function initOrgModal() {
        const modal = document.getElementById('orgMemberModal');
        const backdrop = document.getElementById('orgModalBackdrop');
        const closeBtn = document.getElementById('orgModalCloseBtn');
        const modalImg = document.getElementById('modalMemberImg');
        const modalFallback = document.getElementById('modalMemberFallback');
        const modalBadge = document.getElementById('modalMemberBadge');
        const modalName = document.getElementById('modalMemberName');
        const modalRole = document.getElementById('modalMemberRole');
        const modalDept = document.getElementById('modalMemberDept');
        const modalDivision = document.getElementById('modalDivision');
        const modalFocus = document.getElementById('modalFocus');
        const modalBio = document.getElementById('modalBio');
        const modalTagsWrap = document.getElementById('modalTagsWrap');

        if (!modal) return;

        function openModal(id) {
            const data = membersData[id];
            if (!data) return;

            modalImg.src = data.img;
            modalImg.style.display = 'block';
            modalFallback.style.display = 'none';
            modalFallback.textContent = data.fallback;

            modalBadge.className = 'member-badge ' + data.badgeClass;
            modalBadge.textContent = data.badge;
            modalName.textContent = data.name;
            modalRole.textContent = data.role;
            modalDept.textContent = data.dept;
            modalDivision.textContent = data.division;
            modalFocus.textContent = data.focus;
            modalBio.textContent = data.bio;

            modalTagsWrap.innerHTML = data.tags.map(function(t) {
                return '<span class="org-tag-pill">' + t + '</span>';
            }).join('');

            modal.classList.add('active');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            modal.classList.remove('active');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        closeBtn.addEventListener('click', closeModal);
        backdrop.addEventListener('click', closeModal);
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && modal.classList.contains('active')) closeModal();
        });

        document.querySelectorAll('.member-card').forEach(function(card) {
            card.addEventListener('click', function() {
                const id = this.getAttribute('data-member-id');
                if (id) openModal(id);
            });
        });
    }

    // FILTER TABS & SEARCH INTERACTIVE
    function initOrgControls() {
        const filterBtns = document.querySelectorAll('#orgFilterBar .filter-pill');
        const searchInput = document.getElementById('orgSearchInput');
        const cards = document.querySelectorAll('.member-card');
        const sections = document.querySelectorAll('[data-section]');

        function applyFilter() {
            const activePill = document.querySelector('#orgFilterBar .filter-pill.active');
            const filterVal = activePill ? activePill.getAttribute('data-filter') : 'all';
            const searchVal = searchInput ? searchInput.value.toLowerCase().trim() : '';

            cards.forEach(function(card) {
                const id = card.getAttribute('data-member-id');
                const data = membersData[id] || {};
                const nameMatch = !searchVal || (data.name && data.name.toLowerCase().includes(searchVal)) || (data.role && data.role.toLowerCase().includes(searchVal));
                
                let filterMatch = true;
                if (filterVal !== 'all') {
                    const cardSection = card.closest('[data-section]');
                    const sec = cardSection ? cardSection.getAttribute('data-section') : '';
                    filterMatch = (sec === filterVal);
                }

                if (nameMatch && filterMatch) {
                    card.classList.remove('is-dimmed');
                } else {
                    card.classList.add('is-dimmed');
                }
            });
        }

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                filterBtns.forEach(function(b) { b.classList.remove('active'); });
                this.classList.add('active');
                applyFilter();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', applyFilter);
        }
    }

    function init() {
        initOrgModal();
        initOrgControls();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
</script>

<style>
/* ====================================================
   ORGANIZATION STRUCTURE CSS (CYBER INTERCONNECTED TREE)
   ==================================================== */

.org-container {
    max-width: 1320px;
    width: 100%;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    color: #fff;
}

/* 1. HEADER SECTION */
.org-header-wrap {
    text-align: center;
    max-width: 820px;
    margin: 0 auto 36px;
}

.org-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    border-radius: 999px;
    background: rgba(255, 0, 51, 0.08);
    border: 1px solid rgba(255, 0, 51, 0.35);
    color: #FF0033;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.76rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    margin-bottom: 16px;
    text-transform: uppercase;
}

.org-badge-pill .badge-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #FF0033;
    box-shadow: 0 0 10px #FF0033;
}

.org-main-title {
    font-size: clamp(1.85rem, 3.2vw, 2.75rem);
    font-weight: 800;
    line-height: 1.2;
    margin: 0 0 14px;
    color: #ffffff;
    letter-spacing: -0.5px;
}

.org-main-title .title-accent {
    color: #FF0033;
    text-shadow: 0 0 24px rgba(255, 0, 51, 0.5);
}

.org-subtitle {
    color: rgba(255, 255, 255, 0.65);
    font-size: 0.95rem;
    line-height: 1.65;
    margin: 0 0 24px;
}

.org-stats-strip {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    padding: 10px 22px;
    background: rgba(14, 14, 20, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 999px;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    flex-wrap: wrap;
    justify-content: center;
}

.stat-pill {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.85rem;
}

.stat-pill .stat-num {
    font-family: 'JetBrains Mono', monospace;
    font-weight: 700;
    color: #FF0033;
}

.stat-pill .stat-label {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.82rem;
}

.stat-sep {
    color: rgba(255, 255, 255, 0.2);
    font-size: 0.75rem;
}

/* 2. CONTROL BAR */
.org-control-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    margin: 0 0 42px;
    flex-wrap: wrap;
}

.org-filter-pills {
    display: flex;
    align-items: center;
    gap: 8px;
    overflow-x: auto;
    padding-bottom: 4px;
    scrollbar-width: none;
}
.org-filter-pills::-webkit-scrollbar { display: none; }

.filter-pill {
    background: rgba(14, 14, 20, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: rgba(255, 255, 255, 0.6);
    font-family: 'Inter', sans-serif;
    font-size: 0.84rem;
    font-weight: 500;
    padding: 8px 16px;
    border-radius: 999px;
    cursor: pointer;
    white-space: nowrap;
    transition: all 0.25s ease;
}

.filter-pill:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.06);
    border-color: rgba(255, 255, 255, 0.16);
}

.filter-pill.active {
    color: #fff;
    font-weight: 700;
    background: rgba(255, 0, 51, 0.15);
    border-color: #FF0033;
    box-shadow: 0 0 16px rgba(255, 0, 51, 0.35);
}

.org-search-box {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: rgba(14, 14, 20, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 999px;
    color: rgba(255, 255, 255, 0.4);
    min-width: 240px;
    transition: border-color 0.25s;
}

.org-search-box:focus-within {
    border-color: #FF0033;
    box-shadow: 0 0 16px rgba(255, 0, 51, 0.3);
}

.org-search-box input {
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    font-family: 'Inter', sans-serif;
    font-size: 0.84rem;
    width: 100%;
}
.org-search-box input::placeholder {
    color: rgba(255, 255, 255, 0.35);
}

/* ====================================================
   3. TREE HIERARCHY STRUCTURE & CONNECTOR LINES
   ==================================================== */
.org-tree-wrapper {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Common Tier Styles */
.tree-tier {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 3;
}

.tier-label-pill {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.65rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: rgba(255, 255, 255, 0.5);
    background: rgba(10, 10, 14, 0.9);
    padding: 3px 12px;
    border-radius: 999px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    margin-bottom: 8px;
    text-transform: uppercase;
}

.tier-label-pill.sub {
    font-size: 0.6rem;
    margin-bottom: 6px;
}

/* ── CONNECTING CIRCUITS & GLOW LINES ── */
.tree-line-stem {
    width: 2px;
    height: 40px;
    background: linear-gradient(180deg, #FF0033 0%, rgba(255, 0, 51, 0.6) 100%);
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.7);
    position: relative;
    z-index: 2;
}

.circuit-node {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #FF0033;
    box-shadow: 0 0 12px #FF0033, 0 0 20px rgba(255, 0, 51, 0.8);
    border: 2px solid #000;
}

/* WAKIL -> BPH BRIDGE */
.tree-connector-bph {
    position: relative;
    width: 100%;
    max-width: 580px;
    display: flex;
    flex-direction: column;
    align-items: center;
    z-index: 2;
}

.tree-connector-bph .stem-v {
    width: 2px;
    height: 24px;
    background: #FF0033;
    box-shadow: 0 0 8px rgba(255, 0, 51, 0.6);
}

.tree-connector-bph .cross-bridge-h {
    position: relative;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent 0%, #FF0033 15%, #FF0033 85%, transparent 100%);
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.6);
}

.tree-connector-bph .cross-bridge-h .circuit-node.left { left: 16%; }
.tree-connector-bph .cross-bridge-h .circuit-node.center { left: 50%; }
.tree-connector-bph .cross-bridge-h .circuit-node.right { left: 84%; }

.tree-connector-bph .drop-pair {
    width: 100%;
    display: flex;
    justify-content: space-around;
}

.tree-connector-bph .drop-line {
    width: 2px;
    height: 24px;
    background: #FF0033;
    box-shadow: 0 0 8px rgba(255, 0, 51, 0.6);
}

/* BPH LEVEL ROW */
.bph-row {
    display: flex;
    justify-content: center;
    gap: 32px;
    flex-wrap: wrap;
}

.bph-col {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* BPH TO 4 DIVISIONS MAIN TRUNK */
.tree-connector-to-divisions {
    position: relative;
    width: 100%;
    max-width: 1200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 10px;
    z-index: 2;
}

.main-trunk-stem {
    position: relative;
    width: 2px;
    height: 42px;
    background: linear-gradient(180deg, #FF0033 0%, rgba(255, 0, 51, 0.8) 100%);
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.7);
}

.divisions-bus-bar {
    position: relative;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent 0%, #FF0033 10%, #FF0033 90%, transparent 100%);
    box-shadow: 0 0 12px rgba(255, 0, 51, 0.7);
}

.divisions-bus-bar .circuit-node.node-ard { left: 12.5%; }
.divisions-bus-bar .circuit-node.node-hr { left: 37.5%; }
.divisions-bus-bar .circuit-node.node-medkraf { left: 62.5%; }
.divisions-bus-bar .circuit-node.node-pr { left: 87.5%; }

/* ====================================================
   DIVISIONS 4-COLUMN ROW
   ==================================================== */
.tree-divisions-row {
    position: relative;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    align-items: start;
    z-index: 3;
}

.division-branch {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.div-branch-stem {
    width: 2px;
    height: 24px;
    background: linear-gradient(180deg, #FF0033 0%, rgba(255, 0, 51, 0.5) 100%);
    box-shadow: 0 0 8px rgba(255, 0, 51, 0.5);
}

/* Division Header Card */
.division-header-card {
    width: 100%;
    background: rgba(14, 14, 20, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 16px 14px;
    text-align: center;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    transition: all 0.3s ease;
    box-sizing: border-box;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
}

.div-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.65rem;
    font-weight: 700;
    padding: 4px 10px;
    border-radius: 999px;
    margin-bottom: 8px;
    letter-spacing: 1px;
}

.div-badge-pill.ard {
    background: rgba(0, 229, 255, 0.12);
    color: #00e5ff;
    border: 1px solid rgba(0, 229, 255, 0.35);
}
.div-badge-pill.hr {
    background: rgba(179, 102, 255, 0.12);
    color: #b366ff;
    border: 1px solid rgba(179, 102, 255, 0.35);
}
.div-badge-pill.medkraf {
    background: rgba(255, 153, 0, 0.12);
    color: #ffaa00;
    border: 1px solid rgba(255, 153, 0, 0.35);
}
.div-badge-pill.pr {
    background: rgba(0, 230, 118, 0.12);
    color: #00e676;
    border: 1px solid rgba(0, 230, 118, 0.35);
}

.div-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #fff;
    margin: 0 0 4px;
    letter-spacing: -0.2px;
}

.div-headcount {
    font-size: 0.72rem;
    color: rgba(255, 255, 255, 0.45);
    font-family: 'JetBrains Mono', monospace;
}

.koor-card-wrap {
    width: 100%;
}

/* KOOR TO MEMBERS CONNECTOR */
.koor-to-members-connector {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 4px 0 10px;
}

.koor-stem-v {
    width: 2px;
    height: 18px;
    background: rgba(255, 0, 51, 0.6);
}

.members-bracket-label {
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.6rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.35);
    letter-spacing: 1.2px;
    padding: 3px 8px;
    border-radius: 999px;
    background: rgba(8, 8, 12, 0.85);
    border: 1px solid rgba(255, 255, 255, 0.06);
    margin-top: -2px;
}

/* MEMBERS STACK */
.members-stack {
    position: relative;
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

/* ====================================================
   MEMBER CARDS DESIGN
   ==================================================== */
.member-card {
    position: relative;
    background: rgba(14, 14, 20, 0.78);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 18px;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    cursor: pointer;
    overflow: hidden;
    transition: all 0.28s cubic-bezier(0.2, 0.8, 0.2, 1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.45);
    box-sizing: border-box;
}

.member-card.is-dimmed {
    opacity: 0.18;
    filter: grayscale(80%);
    pointer-events: none;
    transform: scale(0.96);
}

.member-card:hover {
    transform: translateY(-5px);
    border-color: rgba(255, 0, 51, 0.45);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.75), 0 0 24px rgba(255, 0, 51, 0.25);
}

.member-card:hover .card-action-hint {
    color: #FF0033;
}
.member-card:hover .card-action-hint svg {
    transform: translateX(3px);
}

/* Glow highlight strip */
.card-glow-edge {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent 0%, rgba(255, 0, 51, 0.6) 50%, transparent 100%);
    opacity: 0;
    transition: opacity 0.25s;
}
.member-card:hover .card-glow-edge {
    opacity: 1;
}

/* Specific Card Layouts */
.card-leader, .card-vice {
    width: 100%;
    max-width: 380px;
    padding: 20px 22px;
    display: flex;
    align-items: center;
    gap: 18px;
}

.card-bph {
    width: 100%;
    min-width: 260px;
    max-width: 300px;
    padding: 16px 18px;
    display: flex;
    align-items: center;
    gap: 14px;
}

.card-koor {
    width: 100%;
    padding: 16px 16px;
    display: flex;
    align-items: center;
    gap: 14px;
    border-color: rgba(255, 255, 255, 0.12);
}

.card-staff {
    width: 100%;
    padding: 11px 14px;
    display: flex;
    align-items: center;
    gap: 12px;
    border-radius: 14px;
    background: rgba(12, 12, 18, 0.65);
}

.card-staff:hover {
    transform: translateX(4px);
    border-color: rgba(255, 0, 51, 0.35);
    background: rgba(18, 18, 26, 0.85);
}

/* Avatars */
.member-avatar-wrap {
    position: relative;
    width: 58px;
    height: 58px;
    border-radius: 14px;
    overflow: hidden;
    background: #08080c;
    border: 2px solid rgba(255, 255, 255, 0.12);
    flex-shrink: 0;
}

.member-avatar-wrap.sm {
    width: 40px;
    height: 40px;
    border-radius: 10px;
}

.member-avatar {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.35s ease;
}
.member-card:hover .member-avatar {
    transform: scale(1.08);
}

.member-avatar-fallback {
    position: absolute;
    inset: 0;
    display: none;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #181824 0%, #0c0c12 100%);
    color: #FF0033;
    font-family: 'JetBrains Mono', monospace;
    font-weight: 700;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
}
.member-avatar-fallback.sm {
    font-size: 0.72rem;
}

/* Status Indicator Dot */
.role-status-dot {
    position: absolute;
    bottom: -1px;
    right: -1px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 2px solid #000;
}
.role-status-dot.leader { background: #FF0033; box-shadow: 0 0 6px #FF0033; }
.role-status-dot.vice { background: #ff335c; box-shadow: 0 0 6px #ff335c; }
.role-status-dot.bph { background: #ff7700; box-shadow: 0 0 6px #ff7700; }
.role-status-dot.koor.ard { background: #00e5ff; box-shadow: 0 0 6px #00e5ff; }
.role-status-dot.koor.hr { background: #b366ff; box-shadow: 0 0 6px #b366ff; }
.role-status-dot.koor.medkraf { background: #ffaa00; box-shadow: 0 0 6px #ffaa00; }
.role-status-dot.koor.pr { background: #00e676; box-shadow: 0 0 6px #00e676; }

/* Member Typography */
.member-details {
    flex: 1;
    min-width: 0;
}

.member-name {
    font-size: 0.95rem;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 3px;
    line-height: 1.3;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.card-staff .member-name {
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 2px;
}

.member-role {
    font-size: 0.78rem;
    color: rgba(255, 255, 255, 0.65);
    margin: 0;
    line-height: 1.35;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.card-staff .member-role {
    font-size: 0.72rem;
    color: rgba(255, 255, 255, 0.45);
}

.member-meta-tag {
    font-size: 0.7rem;
    color: rgba(255, 255, 255, 0.4);
    margin-top: 4px;
    font-family: 'JetBrains Mono', monospace;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Badges */
.member-badge {
    display: inline-block;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.62rem;
    font-weight: 700;
    letter-spacing: 0.8px;
    padding: 2px 8px;
    border-radius: 999px;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.badge-leader {
    background: rgba(255, 0, 51, 0.18);
    color: #ff335c;
    border: 1px solid rgba(255, 0, 51, 0.4);
}
.badge-vice {
    background: rgba(255, 80, 80, 0.16);
    color: #ff7788;
    border: 1px solid rgba(255, 80, 80, 0.35);
}
.badge-bph {
    background: rgba(255, 170, 0, 0.15);
    color: #ffbe33;
    border: 1px solid rgba(255, 170, 0, 0.35);
}
.badge-koor.ard {
    background: rgba(0, 229, 255, 0.15);
    color: #00e5ff;
    border: 1px solid rgba(0, 229, 255, 0.35);
}
.badge-koor.hr {
    background: rgba(179, 102, 255, 0.15);
    color: #b366ff;
    border: 1px solid rgba(179, 102, 255, 0.35);
}
.badge-koor.medkraf {
    background: rgba(255, 153, 0, 0.15);
    color: #ffaa00;
    border: 1px solid rgba(255, 153, 0, 0.35);
}
.badge-koor.pr {
    background: rgba(0, 230, 118, 0.15);
    color: #00e676;
    border: 1px solid rgba(0, 230, 118, 0.35);
}

.card-action-hint {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    font-size: 0.7rem;
    color: rgba(255, 255, 255, 0.35);
    font-family: 'JetBrains Mono', monospace;
    flex-shrink: 0;
    transition: all 0.25s ease;
}
.card-action-hint svg {
    transition: transform 0.25s ease;
}

/* ====================================================
   CYBER PROFILE DETAIL MODAL
   ==================================================== */
.org-modal-overlay {
    position: fixed;
    inset: 0;
    z-index: 99999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    box-sizing: border-box;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.org-modal-overlay.active {
    opacity: 1;
    visibility: visible;
}

.org-modal-backdrop {
    position: absolute;
    inset: 0;
    background: rgba(4, 4, 7, 0.88);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

.org-modal-dialog {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 620px;
    max-height: 90vh;
    background: #0c0c12;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 22px;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.85), 0 0 32px rgba(255, 0, 51, 0.2);
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    transform: scale(0.95) translateY(18px);
    transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.org-modal-overlay.active .org-modal-dialog {
    transform: scale(1) translateY(0);
}

.org-modal-close {
    position: absolute;
    top: 16px;
    right: 16px;
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.25s ease;
    z-index: 5;
}
.org-modal-close:hover {
    background: #FF0033;
    border-color: #FF0033;
    transform: rotate(90deg);
}

.org-modal-header {
    padding: 30px 28px 22px;
    display: flex;
    align-items: center;
    gap: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.org-modal-avatar-wrap {
    position: relative;
    width: 82px;
    height: 82px;
    border-radius: 18px;
    overflow: hidden;
    background: #08080c;
    border: 2px solid rgba(255, 0, 51, 0.4);
    box-shadow: 0 0 16px rgba(255, 0, 51, 0.25);
    flex-shrink: 0;
}

.org-modal-avatar {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.org-modal-fallback {
    position: absolute;
    inset: 0;
    display: none;
    align-items: center;
    justify-content: center;
    background: #141420;
    color: #FF0033;
    font-family: 'JetBrains Mono', monospace;
    font-size: 1.2rem;
    font-weight: 700;
}

.org-modal-title-wrap {
    flex: 1;
    min-width: 0;
}

.org-modal-name {
    font-size: 1.35rem;
    font-weight: 700;
    color: #ffffff;
    margin: 4px 0 4px;
    line-height: 1.3;
}

.org-modal-role {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.7);
    margin: 0 0 6px;
}

.org-modal-dept {
    font-size: 0.76rem;
    color: rgba(255, 255, 255, 0.45);
    font-family: 'JetBrains Mono', monospace;
}

.org-modal-body {
    padding: 24px 28px 30px;
}

.modal-info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-bottom: 20px;
}

.info-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 12px;
    padding: 12px 14px;
}

.info-card.full {
    grid-column: 1 / -1;
}

.info-lbl {
    display: block;
    font-family: 'JetBrains Mono', monospace;
    font-size: 0.65rem;
    font-weight: 700;
    color: rgba(255, 255, 255, 0.4);
    letter-spacing: 1px;
    margin-bottom: 4px;
}

.info-val {
    font-size: 0.86rem;
    color: #ffffff;
    font-weight: 500;
    line-height: 1.45;
}

.modal-bio-wrap {
    margin-bottom: 20px;
}

.modal-bio-text {
    font-size: 0.88rem;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.82);
    margin: 6px 0 0;
}

.modal-tags-wrap {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    padding-top: 18px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.org-tag-pill {
    font-size: 0.74rem;
    color: #999;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    padding: 3px 10px;
    border-radius: 999px;
    font-family: 'JetBrains Mono', monospace;
}

/* ====================================================
   RESPONSIVE DESIGN (TABLET & MOBILE)
   ==================================================== */
@media (max-width: 1100px) {
    .tree-divisions-row {
        grid-template-columns: repeat(2, 1fr);
        gap: 28px 20px;
    }

    .divisions-bus-bar .circuit-node.node-ard { left: 25%; }
    .divisions-bus-bar .circuit-node.node-hr { left: 75%; }
    .divisions-bus-bar .circuit-node.node-medkraf { display: none; }
    .divisions-bus-bar .circuit-node.node-pr { display: none; }
}

@media (max-width: 768px) {
    .org-container {
        padding: 0 16px;
    }

    .org-main-title {
        font-size: 1.75rem;
    }

    .org-stats-strip {
        gap: 8px 12px;
        padding: 8px 16px;
    }

    .org-control-bar {
        flex-direction: column;
        align-items: stretch;
        gap: 12px;
        margin-bottom: 30px;
    }

    .org-search-box {
        width: 100%;
    }

    .bph-row {
        flex-direction: column;
        gap: 14px;
        width: 100%;
        max-width: 340px;
    }

    .bph-col {
        width: 100%;
    }

    .card-bph {
        max-width: 100%;
    }

    .tree-divisions-row {
        grid-template-columns: 1fr;
        gap: 32px;
        width: 100%;
        max-width: 440px;
    }

    .card-leader, .card-vice {
        max-width: 100%;
    }

    .tree-connector-to-divisions .divisions-bus-bar {
        display: none;
    }
}

@media (max-width: 480px) {
    .org-container {
        padding: 0 14px;
    }

    .org-badge-pill {
        font-size: 0.68rem;
        padding: 5px 12px;
    }

    .org-main-title {
        font-size: 1.45rem;
    }

    .org-subtitle {
        font-size: 0.84rem;
    }

    .card-leader, .card-vice {
        padding: 14px 14px;
        gap: 12px;
    }

    .member-avatar-wrap {
        width: 48px;
        height: 48px;
    }

    .member-name {
        font-size: 0.88rem;
    }

    .member-role {
        font-size: 0.74rem;
    }

    .card-staff {
        padding: 10px 12px;
    }

    .org-modal-header {
        padding: 20px 18px 16px;
        gap: 14px;
    }

    .org-modal-avatar-wrap {
        width: 64px;
        height: 64px;
    }

    .org-modal-name {
        font-size: 1.15rem;
    }

    .org-modal-body {
        padding: 18px 18px 24px;
    }
}
</style>
