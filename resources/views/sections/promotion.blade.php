<!-- Promotion Section -->
<section id="promotion" class="dmk-promo-section">
    <div class="container">
        <div class="row align-items-end mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="dmk-section-eyebrow dmk-eyebrow-light mb-2">
                    <span class="dmk-eyebrow-bar"></span>
                    <span>INFO & PENAWARAN</span>
                </div>
                <h2 class="dmk-section-heading dmk-heading-light mb-0">
                    Penawaran &<br>Informasi Terkini
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="dmk-section-subtext-light mb-0">
                    Dapatkan penawaran harga pabrik terbaik dan paket komplit fabrikasi kubah untuk panitia pembangunan masjid Anda.
                </p>
            </div>
        </div>

        <div class="dmk-carousel-wrapper position-relative">
            <div class="owl-carousel promo-carousel">
                @foreach ($informations as $information)
                    <x-data-card :model="$information" />
                @endforeach
            </div>

            <!-- Carousel Controls (Left & Right) -->
            <button type="button" class="btn dmk-slider-btn dmk-slider-btn-light dmk-slider-btn-prev" id="promo-prev" aria-label="Sebelumnya">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" class="btn dmk-slider-btn dmk-slider-btn-light dmk-slider-btn-next" id="promo-next" aria-label="Selanjutnya">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>
