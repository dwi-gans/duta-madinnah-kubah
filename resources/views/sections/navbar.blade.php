<!-- Spinner -->
<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="dmk-spinner-wrap">
        <div class="dmk-spinner-ring"></div>
        <img src="{{ Vite::image('logo.png') }}" alt="Loading..." class="dmk-spinner-logo">
    </div>
</div>

<!-- Industrial Navbar -->
<header class="dmk-header" id="dmk-header">
    <nav class="navbar navbar-expand-xl navbar-dark dmk-navbar">
        <div class="container-fluid px-3 px-xl-5">
            <!-- Brand -->
            <a href="#home" class="navbar-brand d-flex align-items-center gap-3">
                <div class="dmk-logo-frame">
                    <img src="{{ Vite::image('logo.png') }}" alt="Logo PT. Duta Madinna Kubah" class="dmk-nav-logo">
                </div>
                <div class="d-flex flex-column">
                    <span class="dmk-brand-name">DUTA MADINNA KUBAH</span>
                    <span class="dmk-brand-tagline">Kontraktor Spesialis Kubah Masjid</span>
                </div>
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler dmk-toggler border-0 ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Menu">
                <span class="dmk-toggler-lines">
                    <span></span><span></span><span></span>
                </span>
            </button>

            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto align-items-xl-center py-3 py-xl-0 gap-0 gap-xl-1">
                    <a href="#home"           class="nav-link dmk-nav-link active">Beranda</a>
                    <a href="#promotion"      class="nav-link dmk-nav-link">Promosi</a>
                    <a href="#about"          class="nav-link dmk-nav-link">Tentang</a>
                    <a href="#feature"        class="nav-link dmk-nav-link">Keunggulan</a>
                    <a href="#service"        class="nav-link dmk-nav-link">Material</a>
                    <a href="#dome-design"    class="nav-link dmk-nav-link">Model Kubah</a>
                    <a href="#ceiling-design" class="nav-link dmk-nav-link">Plafon</a>
                    <a href="#portfolio"      class="nav-link dmk-nav-link">Portofolio</a>
                </div>

                <div class="d-flex align-items-center gap-2 ms-xl-4 mt-3 mt-xl-0">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn dmk-btn-ghost btn-sm">
                            <i class="fa fa-tachometer-alt me-1"></i>Dashboard
                        </a>
                    @endauth
                    <a href="https://wa.me/6281331181861" target="_blank" class="btn dmk-btn-cta btn-sm">
                        <i class="fab fa-whatsapp me-2"></i>Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Bottom structural line -->
    <div class="dmk-header-line"></div>
</header>
