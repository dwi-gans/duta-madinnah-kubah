<!-- Portfolio Section -->
<section id="portfolio" class="dmk-portfolio-section">
    <div class="container">
        <div class="row align-items-end mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="dmk-section-eyebrow mb-2">
                    <span class="dmk-eyebrow-bar"></span>
                    <span>DOKUMENTASI PROYEK</span>
                </div>
                <h2 class="dmk-section-heading mb-0">
                    Jejak Karya Kami<br>Di Seluruh Nusantara
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="dmk-section-subtext mb-0">
                    Bukti nyata kepercayaan pengurus yayasan dan panitia masjid dari berbagai pelosok tanah air.
                </p>
            </div>
        </div>

        <div class="dmk-carousel-wrapper position-relative">
            <div class="owl-carousel portfolio-carousel">
                @foreach ($portfolios as $portfolio)
                    <x-data-card :model="$portfolio" />
                @endforeach
            </div>

            <!-- Carousel Controls (Left & Right) -->
            <button type="button" class="btn dmk-slider-btn dmk-slider-btn-prev" id="porto-prev" aria-label="Sebelumnya">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" class="btn dmk-slider-btn dmk-slider-btn-next" id="porto-next" aria-label="Selanjutnya">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
