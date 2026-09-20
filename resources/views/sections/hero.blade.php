<!-- Hero Section -->
<section id="home" class="dmk-hero-section">
    <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="heroCarousel" data-bs-interval="5500" data-bs-pause="false">
        <div class="carousel-inner">
            <x-carousel-header-item
                :src="Vite::image('carousel-header-item-1.jpg')"
                badge="KONTRAKTOR KUBAH MASJID (EST. 2004)"
                title="Mahakarya Kubah Masjid Bergaransi 20 Tahun"
                subtitle="Kami membangun kubah masjid yang bukan sekadar indah, tetapi kokoh, presisi, dan abadi. Didukung teknologi oven enamel Maspion, standar material pabrik, dan tim ahli berpengalaman sejak 2004."
                class="active" />

            <x-carousel-header-item
                :src="Vite::image('carousel-header-item-2.jpg')"
                badge="KARYA SENI ARSITEKTUR ISLAMI"
                title="Menghadirkan Keagungan Arsitektur Masjid Nusantara"
                subtitle="Dari model Nabawi yang agung hingga desain kontemporer modern, setiap kubah dikerjakan dengan standar presisi pabrik dan diinstal oleh tim teknisi bersertifikat." />

            <x-carousel-header-item
                :src="Vite::image('carousel-header-item-3.jpg')"
                badge="PILIHAN MATERIAL PREMIUM"
                title="Enamel, Aluminium, Galvalum, Stainless Gold"
                subtitle="Empat pilihan material unggulan dengan karakter yang berbeda, semua berstandar ketahanan tinggi, anti bocor, dan terbukti tahan terhadap iklim tropis Indonesia." />

            <x-carousel-header-item
                :src="Vite::image('carousel-header-item-4.jpg')"
                badge="4 WORKSHOP NASIONAL"
                title="Jangkauan Dari Sabang Sampai Merauke"
                subtitle="Didukung 4 workshop strategis di Jawa Timur, Kalimantan Selatan, Kalimantan Timur, dan Nusa Tenggara Barat, proyek Anda di seluruh Indonesia kami tangani langsung dari lokasi terdekat." />
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Slide sebelumnya">
            <div class="dmk-hero-arrow">
                <i class="fa fa-arrow-left"></i>
            </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Slide selanjutnya">
            <div class="dmk-hero-arrow">
                <i class="fa fa-arrow-right"></i>
            </div>
        </button>

        <!-- Slide indicators -->
        <div class="carousel-indicators dmk-carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
    </div>

    <!-- Trust Metrics Bar -->
    <div class="dmk-trust-bar">
        <div class="container-fluid">
            <div class="dmk-trust-inner">
                <div class="dmk-trust-stat">
                    <span class="dmk-trust-num">20+</span>
                    <span class="dmk-trust-label">Tahun Pengalaman</span>
                </div>
                <div class="dmk-trust-sep"></div>
                <div class="dmk-trust-stat">
                    <span class="dmk-trust-num">20 Th</span>
                    <span class="dmk-trust-label">Garansi Resmi Maspion</span>
                </div>
                <div class="dmk-trust-sep"></div>
                <div class="dmk-trust-stat">
                    <span class="dmk-trust-num">500+</span>
                    <span class="dmk-trust-label">Proyek Selesai</span>
                </div>
                <div class="dmk-trust-sep"></div>
                <div class="dmk-trust-stat">
                    <span class="dmk-trust-num">4</span>
                    <span class="dmk-trust-label">Workshop Nasional</span>
                </div>
                <div class="dmk-trust-sep d-none d-md-block"></div>
                <div class="dmk-trust-stat d-none d-md-flex">
                    <span class="dmk-trust-num">Sabang Sampai Merauke</span>
                    <span class="dmk-trust-label">Jangkauan Layanan</span>
                </div>
            </div>
        </div>
    </div>
</section>
