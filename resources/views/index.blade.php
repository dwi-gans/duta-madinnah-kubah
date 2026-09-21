<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Duta Madinna Kubah | Spesialis Pembuatan & Pemasangan Kubah Masjid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="https://madinnakubah.com/">
    <meta content="madinna kubah, duta madinna kubah, kubah masjid modern, kontraktor kubah masjid, kubah enamel, kubah galvalum, kubah maspion, harga kubah masjid" name="keywords">
    <meta content="PT Duta Madinna Kubah - Spesialis produsen & kontraktor kubah masjid enamel dan galvalum bergaransi 20 tahun resmi Maspion. Melayani proyek di seluruh Indonesia." name="description">
    <meta name="google-site-verification" content="qr_a3BIEo8YC_dNUaHdW205u46rAkoJdofXFCSa7cxM">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://madinnakubah.com/">
    <meta property="og:site_name" content="Duta Madinna Kubah">
    <meta property="og:title" content="Duta Madinna Kubah | Spesialis Kubah Masjid Profesional">
    <meta property="og:description" content="Kontraktor kubah masjid enamel & galvalum bergaransi 20 tahun. Konsultasi & estimasi RAB gratis.">
    <meta property="og:image" content="https://madinnakubah.com/img/carousel-1.jpg">

    <!-- Favicon & Touch Icons for Google Search & Browsers -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon-48x48.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}?v={{ file_exists(public_path('css/style.css')) ? filemtime(public_path('css/style.css')) : time() }}" rel="stylesheet">

    <!-- DMK Modern & Luxury Navy Stylesheet -->
    <link href="{{ asset('css/landing-custom.css') }}?v={{ file_exists(public_path('css/landing-custom.css')) ? filemtime(public_path('css/landing-custom.css')) : time() }}" rel="stylesheet">
</head>

<body>
    {{-- Topbar, Navbar & Spinner --}}
    @include('sections.navbar')

    {{-- Hero Carousel Slider --}}
    @include('sections.hero')

    {{-- Promosi Slider --}}
    @include('sections.promotion')

    {{-- Tentang Kami --}}
    @include('sections.about')

    {{-- Kenapa Harus Memilih Kami --}}
    @include('sections.feature')

    {{-- Layanan Kubah Masjid --}}
    @include('sections.service')

    {{-- Desain Kubah Masjid --}}
    @include('sections.dome-design')

    {{-- Desain Plafon Interior Kubah --}}
    @include('sections.ceiling-design')

    {{-- Portofolio Hasil Karya --}}
    @include('sections.portfolio')

    {{-- Form Konsultasi & Kontak --}}
    @include('sections.contact')

    {{-- Footer & Back to Top --}}
    @include('sections.footer')

    {{-- Modals: Media Modal & Material Service Modals --}}
    @include('sections.modals')

    {{-- JavaScript Libraries & Inisialisasi --}}
    @include('sections.scripts')
</body>

</html>
