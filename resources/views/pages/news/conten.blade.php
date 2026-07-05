<div class="container">
    <div class="news-header">
        <h1 class="news-title">Latest News</h1>
        <p class="news-subtitle">Stay updated with the latest in NEV</p>
    </div>

    <div class="news-carousel">

        <button class="nav prev" aria-label="Previous">&#10094;</button>

        <div class="news-track-wrapper">
            <div class="news-track">
                @forelse ($news as $item)
                    <div class="news-card">
                        <a href="/news/{{ $item->id }}" class="news-image-link">
                            <div class="news-image">
                                @if($item->gambar_url)
                                    <img src="{{ $item->gambar_url }}" alt="{{ $item->judul }}" loading="lazy">
                                @else
                                    <img src="https://via.placeholder.com/300x180?text=No+Image" alt="{{ $item->judul }}">
                                @endif
                                <div class="news-image-overlay"></div>
                                <span class="news-badge">News</span>
                            </div>
                        </a>
                        <div class="news-content">
                            <span class="news-date">
                                <i class="fa-regular fa-calendar"></i>
                                {{ $item->created_at ? \Carbon\Carbon::parse($item->created_at)->format('d F Y') : 'N/A' }}
                            </span>
                            <h3>{{ $item->judul ?? 'No Title' }}</h3>
                            <p>{{ Str::limit(strip_tags($item->deskripsi ?? ''), 80) }}</p>
                            <a href="/news/{{ $item->id }}" class="read-more">
                                Read More <span class="arrow">→</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="news-empty">No news available</p>
                @endforelse
            </div>
        </div>

        <button class="nav next" aria-label="Next">&#10095;</button>

    </div>

    <div class="news-dots"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.news-track');
    const wrapper = document.querySelector('.news-track-wrapper');
    let cards = document.querySelectorAll('.news-card');

    const next = document.querySelector('.next');
    const prev = document.querySelector('.prev');
    const dotsContainer = document.querySelector('.news-dots');

    if (!track || !next || !prev || cards.length === 0) {
        if (next) next.style.display = 'none';
        if (prev) prev.style.display = 'none';
        return;
    }

    // Kalau news <= 3, gak usah looping/carousel, cukup tampil statis
    if (cards.length <= 3) {
        next.style.display = 'none';
        prev.style.display = 'none';
        return;
    }

    const originalCount = cards.length;
    const cardWidth = 300 + 30; // card width + gap

    const firstClone = cards[0].cloneNode(true);
    const lastClone = cards[cards.length - 1].cloneNode(true);
    firstClone.setAttribute('aria-hidden', 'true');
    lastClone.setAttribute('aria-hidden', 'true');

    track.appendChild(firstClone);
    track.insertBefore(lastClone, track.firstChild);

    cards = document.querySelectorAll('.news-card');

    let index = 1;
    let isMoving = false;
    let autoplayTimer = null;
    let isPaused = false;

    // ---- Dots ----
    for (let i = 0; i < originalCount; i++) {
        const dot = document.createElement('button');
        dot.className = 'news-dot';
        dot.setAttribute('aria-label', `Ke slide ${i + 1}`);
        dot.addEventListener('click', () => {
            if (isMoving) return;
            index = i + 1;
            moveToIndex();
        });
        dotsContainer.appendChild(dot);
    }
    const dots = document.querySelectorAll('.news-dot');

    function updateDots() {
        let realIndex = (index - 1 + originalCount) % originalCount;
        dots.forEach((d, i) => d.classList.toggle('active', i === realIndex));
    }

    track.style.transform = `translateX(-${cardWidth * index}px)`;
    updateDots();

    function moveToIndex() {
        isMoving = true;
        track.style.transition = "transform 0.5s cubic-bezier(.25,.8,.25,1)";
        track.style.transform = `translateX(-${cardWidth * index}px)`;
        updateDots();
    }

    next.addEventListener('click', () => {
        if (isMoving) return;
        index++;
        moveToIndex();
        restartAutoplay();
    });

    prev.addEventListener('click', () => {
        if (isMoving) return;
        index--;
        moveToIndex();
        restartAutoplay();
    });

    track.addEventListener('transitionend', () => {
        isMoving = false;

        if (cards[index].isSameNode(firstClone)) {
            track.style.transition = "none";
            index = 1;
            track.style.transform = `translateX(-${cardWidth * index}px)`;
        }

        if (cards[index].isSameNode(lastClone)) {
            track.style.transition = "none";
            index = cards.length - 2;
            track.style.transform = `translateX(-${cardWidth * index}px)`;
        }
        updateDots();
    });

    // ---- Autoplay ----
    function startAutoplay() {
        autoplayTimer = setInterval(() => {
            if (isMoving || isPaused) return;
            index++;
            moveToIndex();
        }, 3500);
    }

    function restartAutoplay() {
        clearInterval(autoplayTimer);
        startAutoplay();
    }

    startAutoplay();

    // ---- Pause saat hover ----
    wrapper.addEventListener('mouseenter', () => isPaused = true);
    wrapper.addEventListener('mouseleave', () => isPaused = false);

    // ---- Swipe support (mobile) ----
    let startX = 0;
    let isDragging = false;

    wrapper.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
        isPaused = true;
    }, { passive: true });

    wrapper.addEventListener('touchend', (e) => {
        if (!isDragging || isMoving) return;
        isDragging = false;
        const diff = startX - e.changedTouches[0].clientX;

        if (Math.abs(diff) > 40) {
            if (diff > 0) { index++; } else { index--; }
            moveToIndex();
        }
        isPaused = false;
        restartAutoplay();
    });
});
</script>

<style>
.news-section {
    min-height: 100vh;
    background: linear-gradient(135deg, #050505, #0A0A0A);
    color: white;
    padding: 100px 20px;
    text-align: center;
}

/* Header */
.news-header {
    margin-bottom: 50px;
    animation: fadeIn 1s ease forwards;
}

.news-tag {
    display: inline-block;
    font-size: 0.75rem;
    letter-spacing: 3px;
    color: #FF0033;
    font-weight: 600;
    margin-bottom: 10px;
}

.news-title {
    font-size: 3rem;
    color: #fff;
    text-shadow: 0 0 20px rgba(255, 0, 51, 0.5);
    margin: 0 0 10px;
}

.news-subtitle {
    color: #aaa;
    margin: 0;
}

/* Carousel */
.news-carousel {
    position: relative;
    max-width: 1000px;
    margin: 0 auto;
}

.news-track-wrapper {
    overflow: hidden;
}

.news-track {
    display: flex;
    gap: 30px;
    will-change: transform;
}

/* Card */
.news-card {
    min-width: 300px;
    max-width: 300px;
    background: #0F0F0F;
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 15px;
    overflow: hidden;
    transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 30px rgba(255, 0, 51, 0.25);
    border-color: rgba(255, 0, 51, 0.3);
}

.news-image-link { display: block; }

.news-image {
    position: relative;
    height: 180px;
    background: linear-gradient(45deg, #111, #222);
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
}

.news-card:hover .news-image img {
    transform: scale(1.08);
}

.news-image-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.75) 0%, transparent 55%);
}

.news-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: rgba(255, 0, 51, 0.9);
    color: #fff;
    font-size: 0.65rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 999px;
    font-weight: 600;
}

.news-content {
    padding: 20px;
    text-align: left;
}

.news-date {
    font-size: 0.78rem;
    color: #888;
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 8px;
}

.news-content h3 {
    font-size: 1.05rem;
    margin: 0 0 8px;
    color: #fff;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.news-content p {
    color: #aaa;
    font-size: 0.88rem;
    line-height: 1.5;
    margin: 0 0 14px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.read-more {
    color: #00CFFF;
    text-decoration: none;
    font-size: 0.88rem;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.read-more .arrow {
    transition: transform .2s ease;
}

.read-more:hover {
    color: #FF0033;
}

.read-more:hover .arrow {
    transform: translateX(4px);
}

.news-empty {
    text-align: center;
    color: #aaa;
    width: 100%;
    padding: 40px 0;
}

/* Navigation */
.nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.08);
    color: white;
    font-size: 1.4rem;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 2;
    transition: .3s;
}

.nav:hover {
    background: rgba(255, 0, 51, 0.6);
    border-color: rgba(255, 0, 51, 0.6);
}

.prev { left: -10px; }
.next { right: -10px; }

/* Dots */
.news-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 24px;
}

.news-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255,255,255,0.2);
    border: none;
    cursor: pointer;
    transition: all .3s ease;
    padding: 0;
}

.news-dot.active {
    background: #FF0033;
    width: 22px;
    border-radius: 4px;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media (max-width: 640px) {
    .news-title { font-size: 2.2rem; }
    .prev { left: 4px; }
    .next { right: 4px; }
}
</style>