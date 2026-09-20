<!-- Cropper.js Modal Component for Duta Madinna Kubah Admin -->
<div id="dmk-cropper-modal" 
     class="fixed inset-0 z-[9999] hidden items-center justify-center bg-black/85 backdrop-blur-md p-3 sm:p-4 overflow-y-auto"
     tabindex="-1"
     aria-modal="true"
     role="dialog">
    <div class="relative w-full max-w-xl sm:max-w-2xl bg-[#0A1628] border border-[#1E3A64] rounded-2xl shadow-2xl overflow-hidden flex flex-col my-auto max-h-[92vh]">
        <!-- Header -->
        <div class="flex items-center justify-between px-4 py-3.5 sm:px-5 sm:py-4 bg-[#0F2038] border-b border-[#1E3A64]">
            <div class="flex items-center gap-2.5">
                <div class="w-8 h-8 rounded-lg bg-[#C09A3E]/15 border border-[#C09A3E]/40 flex items-center justify-center text-[#D9B35A]">
                    <i class="fa-solid fa-crop-simple text-sm"></i>
                </div>
                <div>
                    <h3 class="text-base sm:text-lg font-black text-white font-['Barlow_Condensed'] uppercase tracking-wider">
                        Sesuaikan / Potong Foto
                    </h3>
                    <p class="text-[11px] text-[#8DA8CA] font-medium leading-none">
                        Atur posisi agar pas dengan tampilan card & popup
                    </p>
                </div>
            </div>
            <button type="button" 
                    id="dmk-cropper-cancel-btn" 
                    class="w-8 h-8 rounded-lg flex items-center justify-center text-[#8DA8CA] hover:text-white hover:bg-[#1E3A64] transition">
                <i class="fa-solid fa-xmark text-sm"></i>
            </button>
        </div>

        <!-- Canvas Container -->
        <div class="relative w-full bg-[#050B14] flex items-center justify-center overflow-hidden p-2 sm:p-4" style="height: 360px; max-height: 50vh;">
            <img id="dmk-cropper-image" src="" alt="Potong Gambar" class="max-w-full max-h-full block">
        </div>

        <!-- Aspect Ratio & Control Toolbar -->
        <div class="px-4 py-3 bg-[#0A1628] border-t border-[#1E3A64]/70 flex flex-wrap items-center justify-between gap-2.5 text-xs">
            <!-- Ratio Buttons -->
            <div class="flex items-center gap-1.5 bg-[#050B14] p-1 rounded-xl border border-[#1E3A64]">
                <span class="text-[10px] font-bold text-[#8DA8CA] uppercase px-2 font-['Barlow_Condensed']">Rasio:</span>
                <button type="button" 
                        data-ratio="1.14" 
                        class="dmk-ratio-btn px-2.5 py-1 rounded-lg font-['Barlow_Condensed'] font-bold uppercase tracking-wider text-xs transition bg-[#C09A3E] text-[#050B14]">
                    <i class="fa-solid fa-table-cells me-1"></i> Pas Card
                </button>
                <button type="button" 
                        data-ratio="1.333" 
                        class="dmk-ratio-btn px-2.5 py-1 rounded-lg font-['Barlow_Condensed'] font-bold uppercase tracking-wider text-xs transition text-[#8DA8CA] hover:text-white">
                    4:3
                </button>
                <button type="button" 
                        data-ratio="1.777" 
                        class="dmk-ratio-btn px-2.5 py-1 rounded-lg font-['Barlow_Condensed'] font-bold uppercase tracking-wider text-xs transition text-[#8DA8CA] hover:text-white">
                    16:9
                </button>
                <button type="button" 
                        data-ratio="free" 
                        class="dmk-ratio-btn px-2.5 py-1 rounded-lg font-['Barlow_Condensed'] font-bold uppercase tracking-wider text-xs transition text-[#8DA8CA] hover:text-white">
                    Bebas
                </button>
            </div>

            <!-- Rotate & Zoom Tools -->
            <div class="flex items-center gap-1">
                <button type="button" id="dmk-cropper-rotate-left" title="Putar Kiri" class="w-8 h-8 rounded-lg bg-[#0F2038] border border-[#1E3A64] text-[#8DA8CA] hover:text-white flex items-center justify-center transition">
                    <i class="fa-solid fa-rotate-left text-xs"></i>
                </button>
                <button type="button" id="dmk-cropper-rotate-right" title="Putar Kanan" class="w-8 h-8 rounded-lg bg-[#0F2038] border border-[#1E3A64] text-[#8DA8CA] hover:text-white flex items-center justify-center transition">
                    <i class="fa-solid fa-rotate-right text-xs"></i>
                </button>
                <button type="button" id="dmk-cropper-reset" title="Reset Posisi" class="w-8 h-8 rounded-lg bg-[#0F2038] border border-[#1E3A64] text-[#8DA8CA] hover:text-white flex items-center justify-center transition">
                    <i class="fa-solid fa-arrows-rotate text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Footer Action -->
        <div class="px-4 py-3 sm:px-5 sm:py-3.5 bg-[#050B14] border-t border-[#1E3A64] flex items-center justify-between gap-3">
            <p class="text-[11px] text-[#8DA8CA] hidden sm:block">
                <i class="fa-solid fa-circle-info text-[#D9B35A] me-1"></i> Geser & cubit/scroll untuk memperbesar atau menyesuaikan foto.
            </p>
            <div class="flex items-center gap-2 w-full sm:w-auto justify-end">
                <button type="button" 
                        id="dmk-cropper-skip-btn" 
                        class="flex-1 sm:flex-none px-3.5 py-2 bg-[#0F2038] border border-[#1E3A64] rounded-xl text-xs font-bold uppercase tracking-wider font-['Barlow_Condensed'] text-[#8DA8CA] hover:text-white transition">
                    Gunakan Asli
                </button>
                <button type="button" 
                        id="dmk-cropper-apply-btn" 
                        class="flex-1 sm:flex-none inline-flex items-center justify-center gap-1.5 px-5 py-2 bg-[#C09A3E] border border-[#D9B35A] rounded-xl font-['Barlow_Condensed'] font-extrabold text-xs text-[#050B14] uppercase tracking-widest hover:bg-[#D9B35A] transition shadow-md">
                    <i class="fa-solid fa-check text-xs"></i> Pasang Foto
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Cropper.js Styles & Script Loader -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.css" />
<style>
    /* Styling khusus cropper box agar selaras dark luxury DMK */
    .cropper-view-box {
        outline: 2px solid #C09A3E !important;
        outline-color: #D9B35A !important;
    }
    .cropper-line {
        background-color: #C09A3E !important;
    }
    .cropper-point {
        background-color: #D9B35A !important;
        width: 8px !important;
        height: 8px !important;
    }
    .cropper-modal {
        background-color: rgba(5, 11, 20, 0.8) !important;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.js"></script>

<script>
    (function () {
        let cropper = null;
        let activeInput = null;
        let originalFile = null;
        let defaultRatio = 1.14; // Rasio card DMK (width ~400 / height 350)
        let activeRatio = defaultRatio;

        const modal = document.getElementById('dmk-cropper-modal');
        const cropperImg = document.getElementById('dmk-cropper-image');
        const cancelBtn = document.getElementById('dmk-cropper-cancel-btn');
        const skipBtn = document.getElementById('dmk-cropper-skip-btn');
        const applyBtn = document.getElementById('dmk-cropper-apply-btn');
        const resetBtn = document.getElementById('dmk-cropper-reset');
        const rotLeftBtn = document.getElementById('dmk-cropper-rotate-left');
        const rotRightBtn = document.getElementById('dmk-cropper-rotate-right');
        const ratioBtns = document.querySelectorAll('.dmk-ratio-btn');

        function openModal(file, inputEl) {
            activeInput = inputEl;
            originalFile = file;
            const reader = new FileReader();
            reader.onload = function (e) {
                cropperImg.src = e.target.result;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');

                if (cropper) {
                    cropper.destroy();
                }

                cropper = new Cropper(cropperImg, {
                    aspectRatio: activeRatio,
                    viewMode: 1,
                    autoCropArea: 0.95,
                    responsive: true,
                    background: false,
                    movable: true,
                    rotatable: true,
                    scalable: true,
                    zoomable: true,
                    ready: function () {
                        // Cropper siap
                    }
                });
            };
            reader.readAsDataURL(file);
        }

        function closeModal() {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            cropperImg.src = '';
        }

        // Handle File Input Change secara global untuk semua input file berlabel 'image'
        document.addEventListener('change', function (e) {
            if (e.target && e.target.type === 'file' && e.target.name === 'image') {
                const files = e.target.files;
                if (files && files.length > 0) {
                    const file = files[0];
                    if (file.type.startsWith('image/')) {
                        // Cek jika file ini bukan hasil crop kita sendiri
                        if (!e.target._croppedFile) {
                            openModal(file, e.target);
                        }
                    }
                }
            }
        });

        // Tombol Cancel (Batalkan pemilihan gambar)
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function () {
                if (activeInput && !activeInput._croppedFile) {
                    activeInput.value = '';
                }
                closeModal();
            });
        }

        // Tombol Skip (Gunakan foto asli tanpa crop)
        if (skipBtn) {
            skipBtn.addEventListener('click', function () {
                closeModal();
            });
        }

        // Tombol Reset
        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                if (cropper) cropper.reset();
            });
        }

        // Tombol Putar
        if (rotLeftBtn) {
            rotLeftBtn.addEventListener('click', function () {
                if (cropper) cropper.rotate(-90);
            });
        }
        if (rotRightBtn) {
            rotRightBtn.addEventListener('click', function () {
                if (cropper) cropper.rotate(90);
            });
        }

        // Tombol Ganti Rasio
        ratioBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                ratioBtns.forEach(b => {
                    b.classList.remove('bg-[#C09A3E]', 'text-[#050B14]');
                    b.classList.add('text-[#8DA8CA]');
                });
                this.classList.add('bg-[#C09A3E]', 'text-[#050B14]');
                this.classList.remove('text-[#8DA8CA]');

                const val = this.getAttribute('data-ratio');
                if (val === 'free') {
                    activeRatio = NaN;
                } else {
                    activeRatio = parseFloat(val);
                }

                if (cropper) {
                    cropper.setAspectRatio(activeRatio);
                }
            });
        });

        // Tombol Terapkan (Potong Foto & Masukkan ke Input File)
        if (applyBtn) {
            applyBtn.addEventListener('click', function () {
                if (!cropper || !activeInput || !originalFile) return;

                // Dapatkan canvas hasil potongan
                const canvas = cropper.getCroppedCanvas({
                    maxWidth: 1600,
                    maxHeight: 1600,
                    imageSmoothingEnabled: true,
                    imageSmoothingQuality: 'high'
                });

                if (!canvas) {
                    closeModal();
                    return;
                }

                // Ubah canvas menjadi Blob File
                canvas.toBlob(function (blob) {
                    const ext = originalFile.name.split('.').pop() || 'jpg';
                    const newFile = new File([blob], originalFile.name, {
                        type: originalFile.type || 'image/jpeg',
                        lastModified: Date.now()
                    });

                    // Gunakan DataTransfer API untuk inject file baru ke input HTML
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(newFile);
                    activeInput._croppedFile = true;
                    activeInput.files = dataTransfer.files;

                    // Update preview kecil jika ada di form
                    const form = activeInput.closest('form');
                    if (form) {
                        let previewImg = form.querySelector('img[data-crop-preview]');
                        if (!previewImg) {
                            previewImg = form.querySelector('img.rounded-lg');
                        }
                        if (previewImg) {
                            previewImg.src = canvas.toDataURL();
                        } else {
                            // Buat preview thumbnail baru jika belum ada
                            const thumb = document.createElement('img');
                            thumb.src = canvas.toDataURL();
                            thumb.className = 'my-2 rounded-lg border border-[#C09A3E]/60 shadow-lg';
                            thumb.style.maxWidth = '180px';
                            thumb.style.maxHeight = '140px';
                            thumb.style.objectFit = 'cover';
                            thumb.setAttribute('data-crop-preview', 'true');
                            activeInput.parentNode.insertBefore(thumb, activeInput);
                        }
                    }

                    // Tampilkan notifikasi kecil
                    const badge = document.createElement('span');
                    badge.className = 'inline-block mt-1 text-[11px] text-[#8CE0C0] font-bold';
                    badge.innerHTML = '<i class="fa-solid fa-check-circle me-1"></i> Foto siap di-upload!';
                    activeInput.parentNode.appendChild(badge);
                    setTimeout(() => badge.remove(), 4000);

                    // Reset flag setelah event loop selesai
                    setTimeout(() => {
                        if (activeInput) activeInput._croppedFile = false;
                    }, 500);

                    closeModal();
                }, originalFile.type || 'image/jpeg', 0.92);
            });
        }
    })();
</script>
