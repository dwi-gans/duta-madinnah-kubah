<!-- Feature Section : Dark Industrial -->
<section id="feature" class="dmk-feature-section">
    {{-- Subtle Islamic geometric bg --}}
    <div class="dmk-geo-bg" aria-hidden="true"></div>

    <div class="container position-relative">
        <div class="row g-0 align-items-center">
            <!-- Section header -->
            <div class="col-12 mb-4 mb-lg-5">
                <div class="d-flex flex-wrap align-items-end justify-content-between gap-3">
                    <div>
                        <div class="dmk-section-eyebrow dmk-eyebrow-light mb-2">
                            <span class="dmk-eyebrow-bar"></span>
                            <span>KEUNGGULAN KAMI</span>
                        </div>
                        <h2 class="dmk-section-heading dmk-heading-light mb-0">
                            Mengapa Mempercayakan<br>Kubah Masjid Kepada Kami
                        </h2>
                    </div>
                    <p class="dmk-section-subtext-light mb-0" style="max-width: 380px;">
                        Standar konstruksi bertaraf nasional, material pabrik bergaransi, dan tim profesional yang jujur dan amanah.
                    </p>
                </div>
            </div>

            <!-- Left feature items -->
            <div class="col-12 col-lg-4">
                <x-feature-item
                    number="01"
                    icon="fa-mosque"
                    title="Simbol Peradaban Islam"
                    description="Mitra jujur dan amanah untuk membangun kubah yang mencerminkan keagungan dan kebesaran peradaban Islam di wilayah Anda." />
                <x-feature-item
                    number="02"
                    icon="fa-certificate"
                    title="Garansi Tertulis 20 Tahun"
                    description="Sertifikat garansi resmi PT. Maspion atas ketahanan warna enamel dan galvalum hingga 20 tahun tanpa pengecatan ulang." />
            </div>

            <!-- Center image -->
            <div class="col-12 col-lg-4 py-4 py-lg-0">
                <div class="dmk-feature-visual wow zoomIn" data-wow-delay="0.3s">
                    <img src="{{ Vite::image('feature.jpg') }}" alt="Proses Konstruksi Kubah" class="dmk-feature-img">
                    <div class="dmk-feature-img-overlay"></div>
                    <div class="dmk-feature-label">CRAFTSMANSHIP</div>
                </div>
            </div>

            <!-- Right feature items -->
            <div class="col-12 col-lg-4">
                <x-feature-item
                    number="03"
                    icon="fa-helmet-safety"
                    title="Tim Ahli K3 Bersertifikat"
                    description="Tenaga fabrikasi dan instalasi berpengalaman puluhan tahun, memenuhi standar keselamatan K3 untuk pengerjaan di ketinggian." />
                <x-feature-item
                    number="04"
                    icon="fa-file-invoice-dollar"
                    title="Konsultasi & RAB Gratis"
                    description="Konsultasi desain, simulasi 3D, dan Rencana Anggaran Biaya transparan tanpa biaya tersembunyi sebelum kontrak." />
            </div>
        </div>
    </div>
</section>
