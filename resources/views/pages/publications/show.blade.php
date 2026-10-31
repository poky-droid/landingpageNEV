@extends('pages.layout.master')

@section('content')

<!-- CYBER GRID OVERLAY (PERSIS MENU NEWS & MODULES) -->
<div class="cyber-grid-overlay"></div>

<main class="publications-page-wrapper">
    <div class="pub-detail-container">

        <!-- TOP BAR: BACK NAVIGATION -->
        <nav class="pub-top-nav">
            <a href="{{ url('/publications') }}" class="back-link">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                <span>Kembali ke Halaman Publikasi</span>
            </a>
        </nav>

        <!-- 2-COLUMN MAIN LAYOUT (100% PERSIS USER REFERENCE) -->
        <div class="pub-detail-grid">

            <!-- ================= LEFT COLUMN ================= -->
            <div class="pub-detail-left">

                <!-- 1. TOP HERO CARD: TITLE, AUTHORS, VENUE -->
                <div class="pub-card pub-hero-detail-card">
                    
                    <!-- Badges Row -->
                    <div class="pub-badges-row">
                        <span class="badge-type">{{ $paper['badge_type'] }}</span>
                        <span class="badge-year">{{ $paper['year'] }}</span>
                        @if($paper['peer_reviewed'])
                        <span class="badge-peer">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Ditelaah Sejawat
                        </span>
                        @endif
                    </div>

                    <!-- Paper Main Title -->
                    <h1 class="pub-detail-title">{{ $paper['title'] }}</h1>

                    <!-- Authors Section -->
                    <div class="pub-authors-section">
                        <span class="sec-label">PENULIS</span>
                        <div class="authors-pills-row">
                            @foreach($paper['authors'] as $author)
                            <div class="author-pill">
                                <span class="author-name">{{ $author['name'] }}</span>
                                <sup class="author-affil-sup">{{ $author['affil'] }}</sup>
                            </div>
                            @endforeach
                        </div>

                        <!-- Affiliations List -->
                        <div class="affiliations-list">
                            @foreach($paper['affiliations'] as $idx => $affil)
                            <p class="affil-item"><span class="affil-idx">{{ $idx }}.</span> {{ $affil }}</p>
                            @endforeach
                        </div>
                    </div>

                    <!-- PUBLISHED IN Inner Box -->
                    <div class="published-in-box">
                        <div class="venue-icon-wrapper">
                            <!-- IEEE / Conference Icon -->
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                <line x1="9" y1="7" x2="15" y2="7"></line>
                                <line x1="9" y1="11" x2="13" y2="11"></line>
                            </svg>
                        </div>
                        <div class="venue-content">
                            <span class="venue-label">DITERBITKAN DALAM</span>
                            <h3 class="venue-title">{{ $paper['venue']['name'] }}</h3>
                            <p class="venue-issn">{{ $paper['venue']['issn'] }}</p>
                            
                            <div class="venue-meta-footer">
                                <span class="meta-tag meta-tag-loc">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                    {{ $paper['venue']['location'] }}
                                </span>
                                <span class="meta-tag meta-tag-date">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                        <line x1="16" y1="2" x2="16" y2="6"></line>
                                        <line x1="8" y1="2" x2="8" y2="6"></line>
                                        <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg>
                                    {{ $paper['venue']['date'] }}
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 2. CONTENT TABS CARD (Ringkasan & Abstrak, Kontribusi Penulis, Referensi) -->
                <div class="pub-card pub-tabs-card">

                    <!-- Tab Header Buttons -->
                    <div class="pub-tab-nav" role="tablist">
                        <button type="button" class="tab-btn active" data-tab="tab-overview" role="tab" aria-selected="true">
                            Ringkasan &amp; Abstrak
                        </button>
                        <button type="button" class="tab-btn" data-tab="tab-contribution" role="tab" aria-selected="false">
                            Kontribusi Penulis
                        </button>
                        <button type="button" class="tab-btn" data-tab="tab-references" role="tab" aria-selected="false">
                            Referensi ({{ count($paper['references']) }})
                        </button>
                    </div>

                    <!-- TAB PANE 1: RINGKASAN & ABSTRAK -->
                    <div class="tab-content active" id="tab-overview" role="tabpanel">
                        <div class="abstract-section">
                            <span class="sec-label">ABSTRAK</span>
                            <p class="abstract-body">
                                {{ $paper['abstract'] }}
                            </p>
                        </div>

                        <!-- Topik Riset & Kata Kunci -->
                        <div class="keywords-section">
                            <span class="sec-label">TOPIK RISET &amp; KATA KUNCI</span>
                            <div class="keywords-pills-row">
                                @foreach($paper['keywords'] as $kw)
                                <span class="keyword-pill">{{ $kw }}</span>
                                @endforeach
                            </div>
                        </div>

                        <!-- Repository Notice Callout (Amber Box) -->
                        <div class="repository-notice-callout">
                            <div class="notice-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fbbf24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                            </div>
                            <div class="notice-content">
                                <h4 class="notice-title">Pemberitahuan Repositori</h4>
                                <p class="notice-desc">
                                    Makalah ini telah terindeks dan diterbitkan dalam prosiding konferensi resmi. Distribusi pra-cetak (pre-print) dan akses terbuka dikelola sesuai kebijakan penerbit serta pedoman repositori IEEE / Lab NEV.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- TAB PANE 2: KONTRIBUSI PENULIS -->
                    <div class="tab-content" id="tab-contribution" role="tabpanel" style="display: none;">
                        <span class="sec-label">PERNYATAAN KONTRIBUSI PENULIS (CRediT)</span>
                        <div class="contributions-list">
                            @foreach($paper['contributions'] as $contrib)
                            <div class="contrib-item">
                                <div class="contrib-bullet">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                                <p class="contrib-text">{{ $contrib }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- TAB PANE 3: DAFTAR PUSTAKA -->
                    <div class="tab-content" id="tab-references" role="tabpanel" style="display: none;">
                        <span class="sec-label">DAFTAR PUSTAKA ({{ count($paper['references']) }})</span>
                        <ol class="references-list">
                            @foreach($paper['references'] as $ref)
                            <li class="ref-item">
                                <span class="ref-text">{{ $ref }}</span>
                            </li>
                            @endforeach
                        </ol>
                    </div>

                </div>

            </div>

            <!-- ================= RIGHT COLUMN (SIDEBAR) ================= -->
            <aside class="pub-detail-sidebar">
                <div class="pub-card pub-sidebar-card">

                    <!-- Sidebar Header -->
                    <div class="sidebar-header">
                        <div class="sidebar-icon-wrap">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                            </svg>
                        </div>
                        <h2 class="sidebar-title">Akses &amp; Metadata</h2>
                    </div>

                    <!-- Primary Action Button -->
                    <a href="{{ $paper['doi_url'] }}" target="_blank" rel="noopener noreferrer" class="btn-primary-publisher">
                        <span>Lihat di Situs Penerbit</span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="7" y1="17" x2="17" y2="7"></line>
                            <polyline points="7 7 17 7 17 17"></polyline>
                        </svg>
                    </a>

                    <!-- DOI Record Row -->
                    <div class="doi-record-row">
                        <span class="doi-label">Catatan DOI</span>
                        <a href="{{ $paper['doi_url'] }}" target="_blank" rel="noopener noreferrer" class="doi-pill" title="Buka DOI">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="margin-right: 5px; flex-shrink: 0;">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                            <span>{{ $paper['doi'] }}</span>
                        </a>
                    </div>

                    <div class="sidebar-divider"></div>

                    <!-- Citation Header -->
                    <div class="citation-header-row">
                        <span class="citation-title">FORMAT SITASI IEEE</span>
                        <span class="citation-badge">Standar</span>
                    </div>

                    <!-- Monospace Citation Box -->
                    <div class="citation-codebox" id="citationBox">
                        {{ $paper['citation'] }}
                    </div>

                    <!-- Copy Citation Button -->
                    <button type="button" class="btn-copy-citation" id="copyCitationBtn">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span id="copyBtnText">Salin Sitasi</span>
                    </button>

                    <div class="sidebar-divider"></div>

                    <!-- Metadata Table (Key-Value) -->
                    <div class="metadata-table">
                        <div class="meta-row">
                            <span class="meta-key">Tipe Dokumen</span>
                            <span class="meta-val">{{ $paper['document_type'] }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-key">Tahun Publikasi</span>
                            <span class="meta-val meta-badge-year">{{ $paper['publication_year'] }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-key">Grup Riset</span>
                            <span class="meta-val val-group">{{ $paper['research_group'] }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-key">Lisensi / Akses</span>
                            <span class="meta-val val-license">{{ $paper['license'] }}</span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-key">Telaah Sejawat</span>
                            <span class="meta-val val-peer">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                {{ $paper['peer_review_status'] }}
                            </span>
                        </div>
                        <div class="meta-row">
                            <span class="meta-key">Halaman</span>
                            <span class="meta-val">{{ $paper['pages'] }}</span>
                        </div>
                    </div>

                </div>
            </aside>

        </div>

    </div>
</main>

<!-- FOOTER -->
<section id="footer" class="footer-section">
    @include('pages.footer.conten')
</section>

@endsection

@push('styles')
<style>
/* Reset & Global Background Matched with News & Modules */
body {
    min-height: 100vh;
    margin: 0;
    background-color: #080808;
    background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
    background-size: 66px 66px;
    background-attachment: fixed;
    color: #fff;
    overflow-x: hidden;
    position: relative;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
}

.cyber-grid-overlay {
    position: fixed;
    inset: 0;
    background-color: #080808;
    background-image: 
        linear-gradient(to right, rgba(255, 255, 255, 0.055) 1px, transparent 1px),
        linear-gradient(to bottom, rgba(255, 255, 255, 0.055) 1px, transparent 1px);
    background-size: 66px 66px;
    pointer-events: none;
    z-index: 0;
}

.publications-page-wrapper {
    position: relative;
    z-index: 1;
    min-height: 80vh;
    padding-top: 100px;
    padding-bottom: 80px;
}

.pub-detail-container {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 16px;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .pub-detail-container {
        padding: 0 12px;
    }
}

/* =========================================================
   TOP NAVIGATION & BREADCRUMB
   ========================================================= */
.pub-top-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 28px;
    flex-wrap: wrap;
    gap: 16px;
}

.back-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #94a3b8;
    text-decoration: none;
    font-size: 13.5px;
    font-weight: 500;
    transition: all 0.2s ease;
    padding: 6px 12px;
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.08);
}

.back-link:hover {
    color: #ff3355;
    border-color: rgba(255, 0, 51, 0.35);
    background: rgba(255, 0, 51, 0.08);
    transform: translateX(-2px);
}

/* =========================================================
   2-COLUMN GRID LAYOUT
   ========================================================= */
.pub-detail-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 350px;
    gap: 28px;
    align-items: start;
}

@media (max-width: 1024px) {
    .pub-detail-grid {
        grid-template-columns: 1fr;
    }
}

/* Base Card Style */
.pub-card {
    background: linear-gradient(180deg, #101017 0%, #0c0c12 100%);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-top: 1px solid rgba(255, 255, 255, 0.14);
    border-radius: 16px;
    box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(12px);
}

/* =========================================================
   1. HERO CARD (LEFT TOP)
   ========================================================= */
.pub-hero-detail-card {
    padding: 32px 36px;
    margin-bottom: 24px;
}

.pub-badges-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
}

.badge-type {
    background: rgba(255, 0, 51, 0.12);
    border: 1px solid rgba(255, 0, 51, 0.32);
    color: #ff385c;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.06em;
    padding: 4px 12px;
    border-radius: 6px;
    text-transform: uppercase;
}

.badge-year {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: #e2e8f0;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}

.badge-peer {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.12);
    color: #cbd5e1;
    font-size: 11px;
    font-weight: 600;
    padding: 4px 10px;
    border-radius: 6px;
}

.pub-detail-title {
    font-size: 26px;
    line-height: 1.35;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 22px 0;
    letter-spacing: -0.015em;
}

@media (max-width: 768px) {
    .pub-detail-title {
        font-size: 21px;
    }
}

/* Authors */
.sec-label {
    display: block;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.08em;
    color: #94a3b8;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.authors-pills-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 14px;
}

.author-pill {
    display: inline-flex;
    align-items: baseline;
    gap: 3px;
    background: rgba(255, 255, 255, 0.035);
    border: 1px solid rgba(255, 255, 255, 0.09);
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    color: #f1f5f9;
    transition: all 0.2s ease;
}

.author-pill:hover {
    border-color: rgba(255, 0, 51, 0.35);
    background: rgba(255, 0, 51, 0.08);
    color: #ff3355;
}

.author-affil-sup {
    color: #ff3355;
    font-weight: 700;
    font-size: 10px;
    margin-left: 2px;
}

.affiliations-list {
    margin-top: 10px;
    border-left: 2px solid rgba(255, 255, 255, 0.1);
    padding-left: 14px;
}

.affil-item {
    font-size: 12px;
    color: #94a3b8;
    line-height: 1.5;
    margin: 4px 0;
}

.affil-idx {
    color: #64748b;
    font-weight: 600;
}

/* Published in Box */
.published-in-box {
    margin-top: 28px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.03) 0%, rgba(99, 102, 241, 0.04) 100%);
    border: 1px solid rgba(129, 140, 248, 0.2);
    border-radius: 12px;
    padding: 20px 22px;
    display: flex;
    gap: 18px;
    align-items: flex-start;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.05);
}

.venue-icon-wrapper {
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.18), rgba(168, 85, 247, 0.12));
    border: 1px solid rgba(129, 140, 248, 0.35);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #a5b4fc;
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2);
}

.venue-content {
    flex: 1;
}

.venue-label {
    display: block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    color: #818cf8;
    text-transform: uppercase;
    margin-bottom: 4px;
}

.venue-title {
    font-size: 15px;
    font-weight: 600;
    color: #f8fafc;
    margin: 0 0 4px 0;
    line-height: 1.4;
}

.venue-issn {
    font-size: 12px;
    color: #94a3b8;
    margin: 0 0 12px 0;
}

.venue-meta-footer {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.meta-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    padding: 4px 11px;
    border-radius: 6px;
    font-weight: 500;
}

.meta-tag.meta-tag-loc,
.meta-tag.meta-tag-date {
    color: #cbd5e1;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.meta-tag.meta-tag-loc svg,
.meta-tag.meta-tag-date svg {
    color: #ff3355;
}

/* =========================================================
   2. CONTENT TABS CARD (LEFT BOTTOM)
   ========================================================= */
.pub-tabs-card {
    overflow: hidden;
}

.pub-tab-nav {
    display: flex;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    background: rgba(13, 13, 18, 0.7);
    padding: 0 24px;
    gap: 8px;
    overflow-x: auto;
}

.tab-btn {
    background: transparent;
    border: none;
    border-bottom: 2px solid transparent;
    color: #94a3b8;
    font-size: 13.5px;
    font-weight: 600;
    padding: 16px 16px 14px 16px;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
}

.tab-btn:hover {
    color: #f8fafc;
}

.tab-btn.active {
    color: #ffffff;
    border-bottom-color: #ff0033;
    background: linear-gradient(180deg, transparent 0%, rgba(255, 0, 51, 0.08) 100%);
}

.tab-content {
    padding: 32px 36px;
}

@media (max-width: 768px) {
    .pub-hero-detail-card,
    .tab-content {
        padding: 24px;
    }
}

.abstract-body {
    font-size: 14.5px;
    line-height: 1.75;
    color: #cbd5e1;
    margin: 0 0 28px 0;
    text-align: justify;
}

.keywords-section {
    margin-bottom: 28px;
}

.keywords-pills-row {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

/* Clean Neutral Keyword Pills with NEV Red Hover */
.keyword-pill {
    font-size: 12px;
    font-weight: 500;
    padding: 5px 12px;
    border-radius: 6px;
    transition: all 0.2s ease;
    cursor: default;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #94a3b8;
}

.keyword-pill:hover {
    background: rgba(255, 0, 51, 0.08);
    border-color: rgba(255, 0, 51, 0.35);
    color: #ff3355;
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.2);
    transform: translateY(-1px);
}

/* Amber Repository Notice */
.repository-notice-callout {
    display: flex;
    gap: 14px;
    align-items: flex-start;
    background: linear-gradient(90deg, rgba(245, 158, 11, 0.09) 0%, rgba(245, 158, 11, 0.03) 100%);
    border: 1px solid rgba(245, 158, 11, 0.28);
    border-left: 3px solid #fbbf24;
    border-radius: 12px;
    padding: 16px 20px;
}

.notice-icon {
    flex-shrink: 0;
    margin-top: 2px;
}

.notice-title {
    font-size: 13px;
    font-weight: 700;
    color: #fbbf24;
    margin: 0 0 4px 0;
}

.notice-desc {
    font-size: 12px;
    color: #d1d5db;
    line-height: 1.55;
    margin: 0;
}

/* Tab 2: Author Contributions */
.contributions-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.contrib-item {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 10px;
    padding: 12px 16px;
    transition: border-color 0.2s ease;
}

.contrib-item:hover {
    border-color: rgba(255, 255, 255, 0.12);
}

.contrib-bullet {
    margin-top: 3px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contrib-bullet {
    color: #ff3355;
}

.contrib-text {
    font-size: 13px;
    color: #cbd5e1;
    line-height: 1.6;
    margin: 0;
}

/* Tab 3: References */
.references-list {
    margin: 0;
    padding-left: 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.ref-item {
    font-size: 12.5px;
    color: #94a3b8;
    line-height: 1.6;
    padding-left: 4px;
}

.ref-text {
    color: #cbd5e1;
}

/* =========================================================
   3. SIDEBAR (RIGHT COLUMN)
   ========================================================= */
.pub-sidebar-card {
    padding: 28px 24px;
    position: sticky;
    top: 100px;
}

.sidebar-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.sidebar-icon-wrap {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: rgba(255, 0, 51, 0.12);
    border: 1px solid rgba(255, 0, 51, 0.28);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ff3355;
    flex-shrink: 0;
}

.sidebar-title {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.btn-primary-publisher {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 12px 18px;
    background: linear-gradient(135deg, #ff0033, #c40027);
    color: #ffffff;
    font-size: 13.5px;
    font-weight: 600;
    border-radius: 10px;
    text-decoration: none;
    box-shadow: 0 4px 16px rgba(255, 0, 51, 0.35);
    transition: all 0.2s ease;
    box-sizing: border-box;
}

.btn-primary-publisher:hover {
    background: linear-gradient(135deg, #ff1a47, #d9002c);
    box-shadow: 0 6px 20px rgba(255, 0, 51, 0.55);
    transform: translateY(-1px);
    color: #ffffff;
}

.doi-record-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    margin-top: 18px;
}

.doi-label {
    font-size: 12px;
    color: #94a3b8;
    font-weight: 500;
}

.doi-pill {
    font-family: 'JetBrains Mono', 'Fira Code', monospace;
    font-size: 11px;
    color: #94a3b8;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 4px 10px;
    border-radius: 6px;
    text-decoration: none;
    max-width: 180px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
}

.doi-pill:hover {
    color: #ff3355;
    border-color: rgba(255, 0, 51, 0.35);
    background: rgba(255, 0, 51, 0.08);
    box-shadow: 0 0 10px rgba(255, 0, 51, 0.2);
}

.sidebar-divider {
    height: 1px;
    background: rgba(255, 255, 255, 0.08);
    margin: 22px 0;
}

.citation-header-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.citation-title {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.06em;
    color: #64748b;
}

.citation-badge {
    font-size: 10px;
    color: #94a3b8;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 2px 7px;
    border-radius: 4px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.citation-codebox {
    background: #07070a;
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: 8px;
    padding: 12px 14px;
    font-family: 'JetBrains Mono', 'Fira Code', monospace;
    font-size: 11px;
    line-height: 1.55;
    color: #cbd5e1;
    word-break: break-word;
    margin-bottom: 12px;
}

.btn-copy-citation {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    width: 100%;
    padding: 9px 14px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 8px;
    color: #e2e8f0;
    font-size: 12.5px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-copy-citation:hover {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border-color: rgba(255, 255, 255, 0.2);
}

.btn-copy-citation.copied {
    background: rgba(16, 185, 129, 0.15);
    border-color: rgba(16, 185, 129, 0.4);
    color: #34d399;
}

/* Metadata Table */
.metadata-table {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.meta-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 12.5px;
}

.meta-key {
    color: #94a3b8;
}

.meta-val {
    color: #e2e8f0;
    font-weight: 500;
    text-align: right;
}

.meta-val.val-group {
    color: #ff3355;
    font-weight: 600;
    background: rgba(255, 0, 51, 0.08);
    border: 1px solid rgba(255, 0, 51, 0.2);
    padding: 2px 8px;
    border-radius: 5px;
    font-size: 11.5px;
}

.meta-val.val-license {
    color: #38bdf8;
    font-weight: 500;
}

.meta-val.val-peer {
    color: #34d399;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.meta-val.meta-badge-year {
    color: #f1f5f9;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 2px 8px;
    border-radius: 5px;
    font-size: 11.5px;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Tab Switching Functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-tab');

            tabBtns.forEach(b => {
                b.classList.remove('active');
                b.setAttribute('aria-selected', 'false');
            });
            tabContents.forEach(c => {
                c.classList.remove('active');
                c.style.display = 'none';
            });

            this.classList.add('active');
            this.setAttribute('aria-selected', 'true');
            const targetContent = document.getElementById(targetId);
            if (targetContent) {
                targetContent.classList.add('active');
                targetContent.style.display = 'block';
            }
        });
    });

    // 2. Copy Citation Functionality
    const copyBtn = document.getElementById('copyCitationBtn');
    const copyText = document.getElementById('copyBtnText');
    const citationBox = document.getElementById('citationBox');

    if (copyBtn && citationBox) {
        copyBtn.addEventListener('click', function() {
            const textToCopy = citationBox.innerText.trim();
            navigator.clipboard.writeText(textToCopy).then(() => {
                copyBtn.classList.add('copied');
                copyText.textContent = '✓ Tersalin!';
                setTimeout(() => {
                    copyBtn.classList.remove('copied');
                    copyText.textContent = 'Salin Sitasi';
                }, 2200);
            }).catch(err => {
                console.error('Failed to copy text: ', err);
            });
        });
    }
});
</script>
@endpush
