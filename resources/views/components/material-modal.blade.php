@props([
    'title',
    'image',
    'description',
    'benefits' => [],
    'specs'    => [],
    'badge'    => 'Layanan Material',
])

<div {{ $attributes->merge(['class' => 'modal fade dmk-service-modal']) }}
     tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered dmk-service-dialog">
        <div class="modal-content dmk-mat-modal-card">

            {{-- Tombol close di atas gambar --}}
            <button type="button"
                    class="dmk-media-close-btn-top"
                    data-bs-dismiss="modal"
                    aria-label="Tutup">
                <i class="fa fa-times"></i>
            </button>

            {{-- Zona gambar bahan kubah --}}
            <div class="dmk-service-img-zone">
                <img src="{{ Vite::image($image) }}"
                     alt="{{ $title }}"
                     class="dmk-service-thumb">
                <div class="dmk-media-img-gradient"></div>
                <div class="dmk-media-img-badge">
                    <i class="fa fa-layer-group"></i>
                    {{ $badge }}
                </div>
            </div>

            {{-- Konten detail --}}
            <div class="dmk-service-body">
                <h4 class="dmk-media-title mb-2">{{ $title }}</h4>
                <p class="dmk-media-desc mb-3">{{ $description }}</p>

                {{-- Spesifikasi Teknis --}}
                @if(!empty($specs) && count($specs) > 0)
                <div class="dmk-service-group">
                    <h6 class="dmk-service-subtitle">
                        <i class="fa fa-sliders-h text-primary"></i> Spesifikasi Teknis
                    </h6>
                    <div class="dmk-service-specs-grid">
                        @foreach($specs as $key => $val)
                        <div class="dmk-service-spec-pill">
                            <span class="dmk-spec-lbl">{{ $key }}</span>
                            <span class="dmk-spec-txt">{{ $val }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                {{-- Keunggulan Utama --}}
                @if(!empty($benefits) && count($benefits) > 0)
                <div class="dmk-service-group">
                    <h6 class="dmk-service-subtitle">
                        <i class="fa fa-star text-gold"></i> Keunggulan Utama
                    </h6>
                    <ul class="dmk-service-benefits-list">
                        @foreach($benefits as $benefit)
                        <li>
                            <i class="fa fa-check-circle dmk-check-icon"></i>
                            <span>{{ $benefit }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- Footer bersih hanya tombol Tutup --}}
                <div class="dmk-service-footer">
                    <button type="button"
                            data-bs-dismiss="modal"
                            class="dmk-service-close-btn">
                        Tutup
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>