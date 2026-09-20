@props(['title', 'description', 'icon', 'number' => null])

<div class="dmk-feat-item wow fadeInUp" data-wow-delay="0.1s">
    <div class="dmk-feat-card">
        <div class="dmk-feat-top d-flex align-items-center justify-content-between mb-3">
            <div class="dmk-feat-icon">
                <i class="fa-solid {{ $icon }}"></i>
            </div>
            @if($number)
                <span class="dmk-feat-num">{{ $number }}</span>
            @endif
        </div>
        <h5 class="dmk-feat-title">{{ $title }}</h5>
        <p class="dmk-feat-desc">{{ $description }}</p>
        <div class="dmk-feat-line"></div>
    </div>
</div>
