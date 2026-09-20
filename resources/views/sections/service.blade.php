<!-- Material Showcase Section -->
<section id="service" class="dmk-service-section">
    {{-- Subtle Islamic mesh background --}}
    <div class="dmk-islamic-mesh" aria-hidden="true"></div>

    <div class="container position-relative">
        <!-- Section header -->
        <div class="row align-items-end mb-4 mb-lg-5">
            <div class="col-lg-7">
                <div class="dmk-section-eyebrow mb-2">
                    <span class="dmk-eyebrow-bar"></span>
                    <span>MATERIAL SYSTEM</span>
                </div>
                <h2 class="dmk-section-heading mb-0">
                    Empat Material Kubah<br>Standar Mutu Tertinggi
                </h2>
            </div>
            <div class="col-lg-5 mt-3 mt-lg-0">
                <p class="dmk-section-subtext mb-0">
                    Dipilih berdasarkan kebutuhan konstruksi, anggaran, dan estetika dengan ketahanan terverifikasi untuk iklim tropis Indonesia.
                </p>
            </div>
        </div>

        <!-- 4 Material Cards -->
        <div class="row g-3 g-lg-4">
            <x-service-item
                title="Kubah Enamel"
                tag="PORSELEN ENAMEL"
                badge="Garansi 20 Tahun"
                image="enamel.png"
                description="Pelapisan porselen oven 850°C. Warna cerah abadi, anti gores, dan bebas perawatan jangka panjang."
                wow-delay="0.1s"
                data-bs-toggle="modal"
                data-bs-target="#modal-enamel" />

            <x-service-item
                title="Kubah Aluminium"
                tag="ALUMINIUM PLAT"
                badge="Anti Korosi Permanen"
                image="alumunium.png"
                description="Plat aluminium murni 0,8mm. Bobot ringan dan anti karat seumur hidup, ideal untuk kubah bentang lebar tanpa beban berlebih."
                wow-delay="0.2s"
                data-bs-toggle="modal"
                data-bs-target="#modal-alumunium" />

            <x-service-item
                title="Kubah Galvalum"
                tag="BAJA GALVALUM"
                badge="Ekonomis & Kokoh"
                image="galvalum.png"
                description="Baja lapis aluminium-zinc berkualitas. Tahan panas dan hujan ekstrem, selfwashing, harga paling terjangkau."
                wow-delay="0.3s"
                data-bs-toggle="modal"
                data-bs-target="#modal-galvalum" />

            <x-service-item
                title="Stainless Gold"
                tag="STAINLESS STEEL 304"
                badge="Mewah & Eksklusif"
                image="stainless-gold.png"
                description="Finishing titanium coating warna emas abadi. Memancarkan kemegahan dari jauh, bebas pengecatan ulang selamanya."
                wow-delay="0.4s"
                data-bs-toggle="modal"
                data-bs-target="#modal-stainless-gold" />
        </div>
    </div>
</section>
