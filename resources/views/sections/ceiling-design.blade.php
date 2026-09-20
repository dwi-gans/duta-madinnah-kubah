<!-- Ceiling / Plafon Dome Section -->
<section id="ceiling-design" class="dmk-ceiling-section">
    <div class="container">
        <!-- Section Header -->
        <div class="row align-items-end mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="dmk-section-eyebrow dmk-eyebrow-light mb-2">
                    <span class="dmk-eyebrow-bar"></span>
                    <span>INTERIOR & PLAFON KUBAH</span>
                </div>
                <h2 class="dmk-section-heading dmk-heading-light mb-0">
                    Seni Kaligrafi & Ornamen<br>Plafon Dalam Kubah Masjid
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="dmk-section-subtext-light mb-0">
                    Menyempurnakan keagungan ruang sholat dengan lukisan plafon bernilai seni tinggi, mulai dari ornamen geometris bintang Arabesque hingga untaian kaligrafi Asmaul Husna.
                </p>
            </div>
        </div>

        <!-- Plafon Grid (8 Bento Cards) -->
        <div class="row g-3 g-lg-4 dmk-plafon-grid">
            @php
                $plafons = [
                    [
                        'id' => 1,
                        'title' => 'Motif Bintang Arabesque Emas',
                        'tag' => 'Ornamen Geometris',
                        'desc' => 'Perpaduan harmonis motif bintang geometri delapan sudut dan aksen emas klasik yang memancarkan ketenangan serta keagungan ruang utama masjid.',
                        'img' => asset('img/plafon/plafon-1.png'),
                    ],
                    [
                        'id' => 2,
                        'title' => 'Kaligrafi Asmaul Husna Hijau Emas',
                        'tag' => 'Seni Kaligrafi',
                        'desc' => 'Untaian kaligrafi Asmaul Husna dengan latar kubah hijau zamrud dan lingkaran cahaya kuning emas yang menyejukkan pandangan jamaah.',
                        'img' => asset('img/plafon/plafon-2.png'),
                    ],
                    [
                        'id' => 3,
                        'title' => 'Floral Geometris Hitam Emas',
                        'tag' => 'Modern Luxury',
                        'desc' => 'Kombinasi kontras mewah antara warna hitam elegan dan goresan emas ornamen bunga melingkar bertingkat untuk arsitektur masjid kontemporer.',
                        'img' => asset('img/plafon/plafon-3.png'),
                    ],
                    [
                        'id' => 4,
                        'title' => 'Kubah Putih Kaligrafi Marun',
                        'tag' => 'Minimalis Khusyuk',
                        'desc' => 'Kubah dasar putih bersih dengan pusat ornamen marun yang terfokus, memberikan kesan lapang, cerah, dan hening di ruang ibadah.',
                        'img' => asset('img/plafon/plafon-4.png'),
                    ],
                    [
                        'id' => 5,
                        'title' => 'Kaligrafi Ornamen Hijau Zamrud',
                        'tag' => 'Karakter Kuat',
                        'desc' => 'Komposisi kaligrafi melingkar berpadu warna hijau alami yang melambangkan kesuburan, kedamaian, dan kemakmuran umat.',
                        'img' => asset('img/plafon/plafon-5.png'),
                    ],
                    [
                        'id' => 6,
                        'title' => 'Segi Delapan Bintang Geometris',
                        'tag' => 'Klasik Andalusia',
                        'desc' => 'Arsitektur plafon berbentuk oktagon dengan ornamen bintang geometris simetris yang mempertegas ketinggian dan struktur atap masjid.',
                        'img' => asset('img/plafon/plafon-6.png'),
                    ],
                    [
                        'id' => 7,
                        'title' => 'Polikromatik Multi-Warna Megah',
                        'tag' => 'Warisan Ottoman',
                        'desc' => 'Karya seni plafon berdetail tinggi dengan ragam warna cerah yang kaya, terinspirasi dari kemegahan interior masjid bersejarah dunia.',
                        'img' => asset('img/plafon/plafon-7.png'),
                    ],
                    [
                        'id' => 8,
                        'title' => 'Motif Awan Langit & Kaligrafi',
                        'tag' => 'Nuansa Alam Syahdu',
                        'desc' => 'Gradasi cat awan langit yang lembut dipadukan dengan lingkaran kaligrafi hijau menenangkan seolah menatap langit terbuka yang teduh.',
                        'img' => asset('img/plafon/plafon-8.png'),
                    ],
                ];
            @endphp

            @foreach ($plafons as $p)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="dmk-plafon-card">
                        <div class="dmk-plafon-visual-wrap">
                            <img src="{{ $p['img'] }}" alt="{{ $p['title'] }}" class="dmk-plafon-img" loading="lazy">
                            <button type="button"
                                    class="dmk-plafon-overlay dmk-media-trigger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#dmk-media-modal"
                                    data-title="{{ $p['title'] }}"
                                    data-description="{{ $p['desc'] }}"
                                    data-image="{{ $p['img'] }}"
                                    aria-label="Perbesar: {{ $p['title'] }}">
                                <div class="dmk-plafon-overlay-inner">
                                    <i class="fa fa-expand-alt"></i>
                                </div>
                            </button>
                        </div>
                        <div class="dmk-plafon-info">
                            <span class="dmk-plafon-tag">{{ $p['tag'] }}</span>
                            <h5 class="dmk-plafon-title">{{ $p['title'] }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Banner Konsultasi Plafon -->
        <div class="dmk-plafon-cta mt-4 mt-lg-5 p-3 p-lg-4 rounded-3 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
                <div class="dmk-plafon-cta-icon">
                    <i class="bi bi-palette2 text-warning fs-3"></i>
                </div>
                <div>
                    <h6 class="text-white mb-1 fw-bold">Punya Konsep Kaligrafi atau Warna Sendiri?</h6>
                    <p class="text-white-50 small mb-0">Kami melayani pengerjaan motif plafon kustom sesuai request arsitektur dan filosofi masjid Anda.</p>
                </div>
            </div>
            <a href="https://wa.me/6281331181861?text=Halo%20Admin%20Duta%20Madinna%20Kubah,%20saya%20ingin%20konsultasi%20mengenai%20pembuatan%20motif%20plafon%20kubah%20masjid"
               target="_blank"
               class="btn dmk-btn-gold px-4 py-2 text-nowrap">
                <i class="fab fa-whatsapp me-2"></i>Konsultasi Plafon
            </a>
        </div>
    </div>
</section>
