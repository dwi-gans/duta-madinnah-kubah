@props([
    'title',
    'description',
    'image' => null,
    'badge' => null,
    'tag' => 'MATERIAL',
    'wowDelay' => '0.1s'
])

<div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="{{ $wowDelay }}">
    <div class="dmk-mat-card" role="button" tabindex="0" {{ $attributes }}>
        {{-- Dark image showcase panel --}}
        <div class="dmk-mat-visual">
            <div class="dmk-mat-tag">{{ $tag }}</div>
            @if($image)
                <img src="{{ Vite::image($image) }}" alt="{{ $title }}" class="dmk-mat-img" loading="lazy">
            @else
                <div class="dmk-mat-icon-ph"><i class="fa-solid fa-mosque"></i></div>
            @endif
            {{-- Brass top accent line on hover --}}
            <div class="dmk-mat-hover-line"></div>
        </div>

        {{-- Light body panel --}}
        <div class="dmk-mat-body">
            @if($badge)
                <span class="dmk-mat-badge">{{ $badge }}</span>
            @endif
            <h4 class="dmk-mat-title">{{ $title }}</h4>
            <p class="dmk-mat-desc">{{ $description }}</p>
            <div class="dmk-mat-action">
                <span>Lihat Spesifikasi</span>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
