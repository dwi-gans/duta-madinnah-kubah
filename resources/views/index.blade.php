<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Duta Madinna Kubah</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Kubah Masjid Modern, Kubah Enamel, Kubah Galvalum, Kubah Alumunium, Kubah Stainless Gold" name="keywords">
    <meta content="Duta Madinna Kubah - Spesialis Pembuatan & Pemasangan Kubah Masjid Profesional di Seluruh Indonesia" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ Vite::image('logo.png') }}" type="image/x-icon">

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
    <link href="css/style.css" rel="stylesheet">

    <!-- DMK Modern & Luxury Navy Stylesheet -->
    <link href="{{ asset('css/landing-custom.css') }}" rel="stylesheet">
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
