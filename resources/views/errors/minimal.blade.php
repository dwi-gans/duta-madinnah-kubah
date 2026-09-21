@php
    $statusMessages = [
        '403' => ['title' => 'Akses Ditolak', 'desc' => 'Anda tidak memiliki izin untuk mengakses halaman ini.', 'icon' => 'fa-lock'],
        '404' => ['title' => 'Halaman Tidak Ditemukan', 'desc' => 'Halaman yang Anda cari tidak ada atau telah dipindahkan.', 'icon' => 'fa-map-signs'],
        '419' => ['title' => 'Sesi Berakhir', 'desc' => 'Sesi Anda telah kedaluwarsa. Silakan login kembali.', 'icon' => 'fa-clock'],
        '429' => ['title' => 'Terlalu Banyak Permintaan', 'desc' => 'Anda telah melakukan terlalu banyak permintaan. Silakan tunggu beberapa saat.', 'icon' => 'fa-hand'],
        '500' => ['title' => 'Kesalahan Server', 'desc' => 'Terjadi kesalahan internal. Tim kami sedang menanganinya.', 'icon' => 'fa-server'],
        '503' => ['title' => 'Sedang Pemeliharaan', 'desc' => 'Website sedang dalam pemeliharaan. Silakan coba lagi nanti.', 'icon' => 'fa-wrench'],
    ];

    $code = $exception->getStatusCode();
    $info = $statusMessages[$code] ?? ['title' => 'Terjadi Kesalahan', 'desc' => 'Maaf, terjadi masalah yang tidak terduga.', 'icon' => 'fa-triangle-exclamation'];
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $code }} — {{ $info['title'] }} | Duta Madinna Kubah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #050B14;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #F4F7FB;
            overflow: hidden;
            position: relative;
        }
        /* decorative glow */
        body::before {
            content: '';
            position: absolute;
            top: -120px; left: -120px;
            width: 320px; height: 320px;
            background: rgba(30, 58, 100, 0.3);
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
        }
        body::after {
            content: '';
            position: absolute;
            bottom: -120px; right: -120px;
            width: 380px; height: 380px;
            background: rgba(192, 154, 62, 0.12);
            border-radius: 50%;
            filter: blur(80px);
            pointer-events: none;
        }
        .error-container {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 2rem 1.5rem;
            max-width: 460px;
        }
        .error-icon {
            width: 80px; height: 80px;
            background: rgba(16, 74, 60, 0.4);
            border: 1px solid #26826B;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: #D9B35A;
            margin-bottom: 1.5rem;
        }
        .error-code {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 5rem;
            font-weight: 900;
            letter-spacing: 0.08em;
            color: #1E3A64;
            line-height: 1;
            margin-bottom: 0.5rem;
        }
        .error-title {
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 1.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: #fff;
            margin-bottom: 0.75rem;
        }
        .error-desc {
            font-size: 0.9rem;
            color: #8DA8CA;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .error-actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .btn-home {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 24px;
            background: #C09A3E;
            border: 1px solid #D9B35A;
            color: #050B14;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 0.85rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-home:hover { background: #D9B35A; transform: translateY(-2px); }
        .btn-login {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 24px;
            background: #0F2038;
            border: 1px solid #1E3A64;
            color: #8DA8CA;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: 0.85rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-login:hover { border-color: #C09A3E; color: #D9B35A; transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <i class="fa-solid {{ $info['icon'] }}"></i>
        </div>
        <div class="error-code">{{ $code }}</div>
        <h1 class="error-title">{{ $info['title'] }}</h1>
        <p class="error-desc">{{ $info['desc'] }}</p>
        <div class="error-actions">
            <a href="/" class="btn-home">
                <i class="fa-solid fa-home"></i> Beranda
            </a>
            @if($code == 419 || $code == 403)
                <a href="/auth/login" class="btn-login">
                    <i class="fa-solid fa-right-to-bracket"></i> Login
                </a>
            @endif
        </div>
    </div>
</body>
</html>
