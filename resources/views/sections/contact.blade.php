<!-- Consultation & Price Quote Section Start -->
<section id="contact" class="dmk-contact-section position-relative py-5">
    <div class="dmk-geo-bg" aria-hidden="true"></div>

    <div class="container position-relative py-3">
        <div class="row g-4 g-lg-5 align-items-center">
            {{-- Information & Hotline Side --}}
            <div class="col-lg-7">
                <div class="mb-4">
                    <div class="dmk-section-eyebrow dmk-eyebrow-light mb-2">
                        <span class="dmk-eyebrow-bar"></span>
                        <span>KONSULTASI & ESTIMASI BIAYA</span>
                    </div>
                    <h2 class="dmk-section-heading dmk-heading-light mb-3">
                        Konsultasikan Rencana Pembangunan<br>Kubah Masjid Bersama Tim Ahli Kami
                    </h2>
                    <p class="dmk-section-subtext-light">
                        Dapatkan simulasi desain 3D, perhitungan Rencana Anggaran Biaya (RAB) presisi, dan konsultasi teknis pemilihan material kubah terbaik tanpa dipungut biaya.
                    </p>
                </div>

                {{-- Live Response Indicator --}}
                <div class="dmk-status-indicator-bar d-inline-flex align-items-center gap-2 p-2 px-3 mb-4">
                    <span class="dmk-pulse-dot"></span>
                    <span class="fw-semibold text-white small">Tim Estimator Sedang Online (Rata-rata dibalas dalam &lt; 15 menit)</span>
                </div>

                {{-- Direct Hotline Card --}}
                <div class="dmk-hotline-card p-3 p-md-4 mb-4">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="dmk-hotline-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div>
                                <small class="text-white-50 text-uppercase fw-semibold d-block">Layanan Bebas Pulsa / Hotline</small>
                                <a href="tel:081331181861" class="dmk-hotline-num text-white fw-bold text-decoration-none">
                                    0813 3118 1861
                                </a>
                            </div>
                        </div>
                        <a href="https://wa.me/6281331181861?text=Assalamu'alaikum%20PT.%20Duta%20Madinna%20Kubah,%20saya%20ingin%20konsultasi%20langsung"
                           target="_blank" class="btn dmk-btn-primary btn-sm px-3 py-2">
                            <i class="fab fa-whatsapp me-2"></i>Chat Sekarang
                        </a>
                    </div>
                </div>

                {{-- Trust Points Grid --}}
                <div class="row g-2 g-sm-3">
                    <div class="col-6">
                        <div class="dmk-contact-benefit d-flex align-items-center gap-2">
                            <i class="fa-solid fa-file-invoice-dollar text-warning"></i>
                            <span class="small fw-semibold text-white-75">Simulasi RAB Transparan</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dmk-contact-benefit d-flex align-items-center gap-2">
                            <i class="fa-solid fa-compass-drafting text-warning"></i>
                            <span class="small fw-semibold text-white-75">Gratis Desain & Gambar Kerja</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dmk-contact-benefit d-flex align-items-center gap-2">
                            <i class="fa-solid fa-certificate text-warning"></i>
                            <span class="small fw-semibold text-white-75">Sertifikat Garansi Resmi</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="dmk-contact-benefit d-flex align-items-center gap-2">
                            <i class="fa-solid fa-truck-fast text-warning"></i>
                            <span class="small fw-semibold text-white-75">Pengiriman Seluruh Nusantara</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Floating Luxury Dark Form Side --}}
            <div class="col-lg-5">
                <div class="dmk-quote-form-card p-4 p-md-5">
                    <div class="dmk-form-header mb-4">
                        <h4 class="text-white fw-bold mb-1 font-condensed text-uppercase letter-spacing-1">Minta Penawaran Harga</h4>
                        <p class="text-white-50 small mb-0">Isi formulir singkat di bawah untuk terhubung langsung dengan tim teknis kami.</p>
                    </div>

                    <form id="quoteForm">
                        <div class="mb-3">
                            <label for="nameField" class="form-label text-white-50 small fw-semibold">Nama / Panitia Masjid</label>
                            <div class="input-group dmk-input-group">
                                <span class="input-group-text bg-transparent border-0 text-warning ps-3">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input id="nameField" type="text" class="form-control dmk-form-control"
                                       placeholder="Contoh: H. Ahmad (Masjid Al-Falah)" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="serviceField" class="form-label text-white-50 small fw-semibold">Jenis Layanan / Material</label>
                            <div class="input-group dmk-input-group">
                                <span class="input-group-text bg-transparent border-0 text-warning ps-3">
                                    <i class="fa-solid fa-cubes"></i>
                                </span>
                                <select id="serviceField" class="form-select dmk-form-control" required>
                                    <option value="" selected disabled>Pilih Material Kubah</option>
                                    <option value="Kubah Masjid Enamel (Porselen Oven)">Kubah Masjid Enamel (Garansi 20 Th)</option>
                                    <option value="Kubah Masjid Aluminium Plat">Kubah Masjid Aluminium (Anti Korosi)</option>
                                    <option value="Kubah Masjid Galvalum">Kubah Masjid Galvalum (Ekonomis)</option>
                                    <option value="Kubah Masjid Stainless Gold">Kubah Masjid Stainless Gold (Mewah)</option>
                                    <option value="Ornamen & Makara Kubah">Ornamen & Makara Kubah</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="messageField" class="form-label text-white-50 small fw-semibold">Keterangan / Ukuran Diameter & Lokasi</label>
                            <div class="input-group dmk-input-group">
                                <span class="input-group-text bg-transparent border-0 text-warning ps-3 align-self-start pt-2">
                                    <i class="fa-solid fa-comment-dots"></i>
                                </span>
                                <textarea id="messageField" class="form-control dmk-form-control" rows="3"
                                          placeholder="Contoh: Estimasi diameter 6 meter, tinggi 4 meter untuk lokasi di Samarinda..."></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn dmk-btn-primary w-100 py-3 fw-bold">
                            <i class="fab fa-whatsapp me-2 fs-5"></i>Kirim Pertanyaan via WhatsApp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Consultation & Price Quote Section End -->
