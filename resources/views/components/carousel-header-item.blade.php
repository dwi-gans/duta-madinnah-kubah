@props(['src', 'title', 'subtitle' => null, 'badge' => null])

<div {{ $attributes->merge(['class' => 'carousel-item']) }}>
    <img class="w-100 dmk-hero-img" src="{{ $src }}" alt="Kubah Masjid PT. Duta Madinna Kubah">

    {{-- Islamic geometric overlay --}}
    <div class="dmk-hero-geo-overlay" aria-hidden="true"></div>

    {{-- Cinematic dark gradient --}}
    <div class="dmk-hero-overlay"></div>

    {{-- Content --}}
    <div class="dmk-hero-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    {{-- Eyebrow --}}
                    <div class="dmk-eyebrow mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <span class="dmk-eyebrow-dot"></span>
                        <span>{{ $badge ?? 'KONTRAKTOR KUBAH MASJID (EST. 2004)' }}</span>
                    </div>

                    {{-- Main Headline --}}
                    <h1 class="dmk-hero-headline wow fadeInUp" data-wow-delay="0.2s">
                        {!! nl2br(e($title)) !!}
                    </h1>

                    {{-- Supporting text --}}
                    <p class="dmk-hero-sub wow fadeInUp" data-wow-delay="0.3s">
                        {{ $subtitle ?? 'Fabrikasi & konstruksi kubah masjid premium bergaransi 20 tahun dari PT. Maspion. Melayani seluruh Indonesia dengan standar presisi pabrik.' }}
                    </p>

                    {{-- CTAs --}}
                    <div class="dmk-hero-actions d-flex flex-wrap gap-3 wow fadeInUp" data-wow-delay="0.4s">
                        <a href="https://wa.me/6281331181861?text=Assalamu'alaikum%2C%20saya%20ingin%20konsultasi%20pembuatan%20kubah%20masjid"
                           target="_blank" class="btn dmk-btn-primary">
                            <i class="fab fa-whatsapp me-2"></i>Konsultasi Sekarang
                        </a>
                        <a href="#dome-design" class="btn dmk-btn-outline-light">
                            Jelajahi Model Kubah <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
