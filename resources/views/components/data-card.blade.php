@props(['model'])

@php
    $imageUrl = $model->image_url;
    $title    = $model->title;
    $desc     = $model?->description ?? '';
@endphp

<div class="data-card-item">
    <div class="dmk-promo-card">

        {{-- Gambar + tombol expand yang membuka popup --}}
        <div class="dmk-promo-img-wrap">
            <img src="{{ $imageUrl }}"
                 alt="{{ $title }}"
                 class="dmk-promo-img">

            {{-- Tombol expand → membuka dmk-media-modal --}}
            <button type="button"
                    class="dmk-promo-overlay dmk-media-trigger"
                    data-bs-toggle="modal"
                    data-bs-target="#dmk-media-modal"
                    data-title="{{ $title }}"
                    data-description="{{ $desc }}"
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
            <p class="dmk-promo-desc">{{ $desc ?: 'Karya arsitektur kubah berkualitas tinggi oleh PT. Duta Madinna Kubah.' }}</p>
        </div>

    </div>
</div>
