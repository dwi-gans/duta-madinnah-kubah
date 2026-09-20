@props(['title' => 'Desain Kubah', 'description', 'image', 'wow-delay' => '0.3s'])

@php
    $imageUrl = Vite::image($image);
@endphp

<div class="data-card-item">
    <div class="dmk-promo-card">

        {{-- Gambar + tombol expand yang membuka popup --}}
        <div class="dmk-promo-img-wrap dmk-dome-img-wrap">
            <img src="{{ $imageUrl }}"
                 alt="{{ $title }}"
                 class="dmk-promo-img dmk-dome-img">

            {{-- Tombol expand → membuka dmk-media-modal --}}
            <button type="button"
                    class="dmk-promo-overlay dmk-media-trigger"
                    data-bs-toggle="modal"
                    data-bs-target="#dmk-media-modal"
                    data-title="{{ $title }}"
                    data-description="{{ $description }}"
                    data-image="{{ $imageUrl }}"
                    aria-label="Perbesar: {{ $title }}">
                <div class="dmk-promo-overlay-inner">
                    <i class="fa fa-expand-alt"></i>
                </div>
            </button>
        </div>

        {{-- Konten teks --}}
        <div class="dmk-promo-body">
            <h5 class="dmk-promo-title">{{ $title }}</h5>
            <p class="dmk-promo-desc">{{ $description ?: 'Model kubah presisi dengan standar arsitektur Islami modern.' }}</p>
        </div>

    </div>
</div>
