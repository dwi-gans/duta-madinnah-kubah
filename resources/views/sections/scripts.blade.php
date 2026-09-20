<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Inisialisasi Carousel Tombol Navigasi -->
    <script>
        $(document).ready(function () {
            $('#promo-prev').click(function () {
                $('.promo-carousel').trigger('prev.owl.carousel');
            });
            $('#promo-next').click(function () {
                $('.promo-carousel').trigger('next.owl.carousel');
            });
            $('#porto-prev').click(function () {
                $('.portfolio-carousel').trigger('prev.owl.carousel');
            });
            $('#porto-next').click(function () {
                $('.portfolio-carousel').trigger('next.owl.carousel');
            });
            $('#dome-prev').click(function () {
                $('.dome-carousel').trigger('prev.owl.carousel');
            });
            $('#dome-next').click(function () {
                $('.dome-carousel').trigger('next.owl.carousel');
            });

            // Sinkronisasi indikator hero carousel saat slide berpindah
            $('#heroCarousel').on('slide.bs.carousel', function (e) {
                $('.dmk-carousel-indicators button').removeClass('active').removeAttr('aria-current');
                $('.dmk-carousel-indicators button[data-bs-slide-to="' + e.to + '"]').addClass('active').attr('aria-current', 'true');
            });

            // Auto-tutup navbar saat menu diklik di layar mobile
            $('.navbar-nav .nav-link').on('click', function () {
                if ($('.navbar-toggler').is(':visible')) {
                    $('#navbarCollapse').collapse('hide');
                }
            });
        });
    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- ═══ DMK Modern Scroll Reveal & Micro-interactions ═══ -->
    <script>
    (function() {
        'use strict';

        // ── 1. Stagger animation untuk cards ──
        function applyStagger(selector, baseDelay) {
            document.querySelectorAll(selector).forEach(function(el, i) {
                el.style.transitionDelay = (i * baseDelay) + 'ms';
            });
        }

        // 2. Intersection Observer : smooth reveal
        var revealObserver = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('dmk-in-view');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.08,
            rootMargin: '0px 0px -40px 0px'
        });

        // Apply to service cards dengan stagger
        document.querySelectorAll('.dmk-service-card').forEach(function(el, i) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(32px)';
            el.style.transition = 'opacity 0.55s cubic-bezier(0.34, 1.3, 0.64, 1) ' + (i * 90) + 'ms, transform 0.55s cubic-bezier(0.34, 1.3, 0.64, 1) ' + (i * 90) + 'ms';
            revealObserver.observe(el);
        });

        // Apply to dome cards dengan stagger
        document.querySelectorAll('.dmk-dome-card').forEach(function(el, i) {
            el.style.opacity = '0';
            el.style.transform = 'translateY(24px) scale(0.97)';
            el.style.transition = 'opacity 0.5s ease ' + (i * 80) + 'ms, transform 0.5s cubic-bezier(0.34, 1.2, 0.64, 1) ' + (i * 80) + 'ms';
            revealObserver.observe(el);
        });

        // Apply to feature items
        document.querySelectorAll('.dmk-feature-item').forEach(function(el, i) {
            el.style.opacity = '0';
            el.style.transform = 'translateX(-24px)';
            el.style.transition = 'opacity 0.45s ease ' + (i * 100) + 'ms, transform 0.45s cubic-bezier(0.34, 1.2, 0.64, 1) ' + (i * 100) + 'ms';
            revealObserver.observe(el);
        });

        // Trigger reveal: set to in-view
        document.addEventListener('scroll', function() {}, { passive: true });

        // ── Inject CSS for dmk-in-view ──
        var style = document.createElement('style');
        style.textContent = '.dmk-in-view { opacity: 1 !important; transform: none !important; }';
        document.head.appendChild(style);

        // ── 3. Keyboard accessibility: Enter triggers modal on service cards ──
        document.querySelectorAll('.dmk-service-card').forEach(function(card) {
            card.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    card.click();
                }
            });
        });

        // ── 4. Smooth navbar brand pulse on logo hover ──
        var brand = document.querySelector('.navbar-brand');
        if (brand) {
            brand.style.transition = 'transform 0.3s cubic-bezier(0.34, 1.45, 0.64, 1)';
            brand.addEventListener('mouseenter', function() {
                brand.style.transform = 'scale(1.04)';
            });
            brand.addEventListener('mouseleave', function() {
                brand.style.transform = 'scale(1)';
            });
        }

    })();
    </script>

    <!-- DMK Media Modal : JS populate -->
    <script>
    (function() {
        var modal = document.getElementById('dmk-media-modal');
        if (!modal) return;

        modal.addEventListener('show.bs.modal', function(e) {
            var trigger = e.relatedTarget;
            if (!trigger) return;

            var title = trigger.getAttribute('data-title')       || '';
            var desc  = trigger.getAttribute('data-description') || '';
            var image = trigger.getAttribute('data-image')       || '';
            var imgEl   = document.getElementById('dmk-modal-img');
            var titleEl = document.getElementById('dmk-modal-title');
            var descEl  = document.getElementById('dmk-modal-desc');

            if (imgEl)   { imgEl.src = image; imgEl.alt = title; }
            if (titleEl) { titleEl.textContent = title; }
            if (descEl)  { descEl.textContent = desc || 'Hubungi kami untuk informasi lebih lanjut.'; }
        });

        /* Reset saat modal ditutup */
        modal.addEventListener('hidden.bs.modal', function() {
            var imgEl = document.getElementById('dmk-modal-img');
            if (imgEl) { imgEl.src = ''; }
        });
    })();
    </script>
