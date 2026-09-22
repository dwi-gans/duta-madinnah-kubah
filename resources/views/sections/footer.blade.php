<!-- Footer Start -->
<footer class="dmk-footer position-relative" id="footer">
    <div class="dmk-footer-line"></div>
    <div class="container py-5">
        <div class="row g-4 g-lg-5 justify-content-between">
            <div class="col-lg-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="dmk-logo-frame">
                        <img src="{{ Vite::image('logo.png') }}" alt="Logo PT. Duta Madinna Kubah" class="dmk-nav-logo">
                    </div>
                    <div>
                        <h4 class="dmk-brand-name text-white mb-0">PT. DUTA MADINNA KUBAH</h4>
                        <small class="text-white-50 letter-spacing-1 text-uppercase">Spesialis Fabrikasi & Konstruksi Kubah Masjid</small>
                    </div>
                </div>
                <p class="text-white-50 small pe-lg-4 mb-4">
                    Melayani pembuatan kubah masjid enamel porselen, aluminium, galvalum, dan stainless gold dengan garansi resmi dan pengerjaan tepat waktu ke seluruh penjuru Nusantara.
                </p>

                <div class="dmk-footer-contact-list">
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <i class="bi bi-geo-alt mt-1 text-warning"></i>
                        <span class="text-white-75 small"><strong>Workshop Pusat:</strong> Tugu, Sukorejo, Kec. Gandusari, Kab. Trenggalek, Jawa Timur 66372</span>
                    </div>
                    <div class="d-flex align-items-start gap-2 mb-2">
                        <i class="bi bi-telephone mt-1 text-warning"></i>
                        <span class="text-white-75 small"><strong>Hotline / WhatsApp:</strong> 0813 3118 1861</span>
                    </div>
                    <div class="d-flex align-items-start gap-2 mb-3">
                        <i class="bi bi-envelope mt-1 text-warning"></i>
                        <span class="text-white-75 small"><strong>Email Resmi:</strong> kubahdutamadinnah@gmail.com</span>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <a class="dmk-social-btn" href="https://www.facebook.com/61552978706701/" target="_blank" title="Facebook" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="dmk-social-btn" href="https://www.instagram.com/dutamadinna.kubah/" target="_blank" title="Instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="dmk-social-btn" href="https://www.tiktok.com/@dutamadinnakubah" target="_blank" title="TikTok" aria-label="TikTok">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/></svg>
                    </a>
                    <a class="dmk-social-btn" href="https://www.youtube.com/@DUTAMADINNAKUBAH" target="_blank" title="YouTube" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-3">
                <h5 class="text-white text-uppercase font-condensed letter-spacing-1 mb-3">Cabang & Workshop</h5>
                <ul class="list-unstyled text-white-75 small mb-0 d-flex flex-column gap-2 dmk-branch-list">
                    <li><i class="fa-solid fa-location-dot text-warning me-2"></i><strong>Jawa Timur:</strong> Trenggalek</li>
                    <li><i class="fa-solid fa-location-dot text-warning me-2"></i><strong>Kalimantan Selatan:</strong> Rantau, Tapin</li>
                    <li><i class="fa-solid fa-location-dot text-warning me-2"></i><strong>Kalimantan Timur:</strong> Samarinda</li>
                    <li><i class="fa-solid fa-location-dot text-warning me-2"></i><strong>Nusa Tenggara Barat:</strong> Lombok Barat</li>
                    <li><i class="fa-solid fa-location-dot text-warning me-2"></i><strong>Kalimantan Barat:</strong> Pontianak</li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h5 class="text-white text-uppercase font-condensed letter-spacing-1 mb-3">Lokasi Workshop Utama</h5>
                <div class="dmk-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.636315152208!2d111.69685739113497!3d-8.138456270984573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7919887ace7a19%3A0xef6251c0f36397aa!2sPT.%20Duta%20Madinna%20Kubah%20Trenggalek!5e0!3m2!1sen!2sid!4v1748014481349!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="dmk-footer-map"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="dmk-copyright py-3">
        <div class="container text-center">
            <p class="mb-0 text-white-50 small">&copy; {{ date('Y') }} <strong class="text-white">PT. Duta Madinna Kubah</strong>. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- Back to Top Button -->
<button class="btn back-to-top dmk-back-to-top" id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="Kembali ke atas">
    <i class="bi bi-arrow-up"></i>
</button>
