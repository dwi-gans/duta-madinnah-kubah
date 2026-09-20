<!-- Cropper.js Modal Component for Duta Madinna Kubah Admin -->
<div id="dmk-cropper-modal" 
     style="display: none; position: fixed; inset: 0; z-index: 999999; background: rgba(5, 11, 20, 0.92); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 1rem; overflow-y: auto;"
     tabindex="-1"
     aria-modal="true"
     role="dialog">
    <div style="position: relative; width: 100%; max-width: 680px; background: #0A1628; border: 1px solid #1E3A64; border-radius: 1.25rem; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7); overflow: hidden; display: flex; flex-direction: column; margin: auto; max-height: 92vh;">
        <!-- Header -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: #0F2038; border-bottom: 1px solid #1E3A64;">
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div style="width: 2.25rem; height: 2.25rem; border-radius: 0.5rem; background: rgba(192, 154, 62, 0.15); border: 1px solid rgba(192, 154, 62, 0.4); display: flex; align-items: center; justify-content: center; color: #D9B35A;">
                    <i class="fa-solid fa-crop-simple text-sm"></i>
                </div>
                <div>
                    <h3 style="margin: 0; font-size: 1.15rem; font-weight: 900; color: #FFFFFF; font-family: 'Barlow Condensed', sans-serif; text-transform: uppercase; letter-spacing: 0.05em; line-height: 1.2;">
                        Sesuaikan / Potong Foto
                    </h3>
                    <p style="margin: 0; font-size: 0.75rem; color: #8DA8CA; font-weight: 500;">
                        Atur posisi agar pas dengan tampilan card di website & mobile
                    </p>
                </div>
            </div>
            <button type="button" 
                    id="dmk-cropper-cancel-btn" 
                    style="width: 2rem; height: 2rem; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; color: #8DA8CA; background: transparent; border: none; cursor: pointer; transition: all 0.15s ease;">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>
        </div>

        <!-- Canvas Container -->
        <div style="position: relative; width: 100%; height: 380px; max-height: 52vh; background: #050B14; display: flex; align-items: center; justify-content: center; overflow: hidden; padding: 0.5rem;">
            <img id="dmk-cropper-image" src="" alt="Potong Gambar" style="max-width: 100%; max-height: 100%; display: block;">
        </div>

        <!-- Aspect Ratio & Control Toolbar -->
        <div style="padding: 0.75rem 1rem; background: #0A1628; border-top: 1px solid rgba(30, 58, 100, 0.7); display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 0.6rem;">
            <!-- Ratio Buttons -->
            <div style="display: flex; align-items: center; gap: 0.35rem; background: #050B14; padding: 0.25rem 0.35rem; border-radius: 0.75rem; border: 1px solid #1E3A64;">
                <span style="font-size: 0.65rem; font-weight: 700; color: #8DA8CA; text-transform: uppercase; padding: 0 0.4rem; font-family: 'Barlow Condensed', sans-serif;">Rasio:</span>
                <button type="button" 
                        data-ratio="1.14" 
                        class="dmk-ratio-btn active"
                        style="padding: 0.25rem 0.65rem; border-radius: 0.5rem; font-family: 'Barlow Condensed', sans-serif; font-weight: 700; text-transform: uppercase; font-size: 0.75rem; cursor: pointer; border: none; background: #C09A3E; color: #050B14; transition: all 0.15s ease;">
                    <i class="fa-solid fa-table-cells me-1"></i> Pas Card
                </button>
                <button type="button" 
                        data-ratio="1.333" 
                        class="dmk-ratio-btn"
                        style="padding: 0.25rem 0.65rem; border-radius: 0.5rem; font-family: 'Barlow Condensed', sans-serif; font-weight: 700; text-transform: uppercase; font-size: 0.75rem; cursor: pointer; border: none; background: transparent; color: #8DA8CA; transition: all 0.15s ease;">
                    4:3
                </button>
                <button type="button" 
                        data-ratio="1.777" 
                        class="dmk-ratio-btn"
                        style="padding: 0.25rem 0.65rem; border-radius: 0.5rem; font-family: 'Barlow Condensed', sans-serif; font-weight: 700; text-transform: uppercase; font-size: 0.75rem; cursor: pointer; border: none; background: transparent; color: #8DA8CA; transition: all 0.15s ease;">
                    16:9
                </button>
                <button type="button" 
                        data-ratio="free" 
                        class="dmk-ratio-btn"
                        style="padding: 0.25rem 0.65rem; border-radius: 0.5rem; font-family: 'Barlow Condensed', sans-serif; font-weight: 700; text-transform: uppercase; font-size: 0.75rem; cursor: pointer; border: none; background: transparent; color: #8DA8CA; transition: all 0.15s ease;">
                    Bebas
                </button>
            </div>

            <!-- Rotate & Reset Tools -->
            <div style="display: flex; align-items: center; gap: 0.35rem;">
                <button type="button" id="dmk-cropper-rotate-left" title="Putar Kiri 90°" style="width: 2rem; height: 2rem; border-radius: 0.5rem; background: #0F2038; border: 1px solid #1E3A64; color: #8DA8CA; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="fa-solid fa-rotate-left text-xs"></i>
                </button>
                <button type="button" id="dmk-cropper-rotate-right" title="Putar Kanan 90°" style="width: 2rem; height: 2rem; border-radius: 0.5rem; background: #0F2038; border: 1px solid #1E3A64; color: #8DA8CA; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="fa-solid fa-rotate-right text-xs"></i>
                </button>
                <button type="button" id="dmk-cropper-reset" title="Reset Posisi" style="width: 2rem; height: 2rem; border-radius: 0.5rem; background: #0F2038; border: 1px solid #1E3A64; color: #8DA8CA; display: flex; align-items: center; justify-content: center; cursor: pointer;">
                    <i class="fa-solid fa-arrows-rotate text-xs"></i>
                </button>
            </div>
        </div>

        <!-- Footer Action -->
        <div style="padding: 0.85rem 1.25rem; background: #050B14; border-top: 1px solid #1E3A64; display: flex; align-items: center; justify-content: space-between; gap: 0.75rem;">
            <p style="margin: 0; font-size: 0.75rem; color: #8DA8CA;">
                <i class="fa-solid fa-circle-info" style="color: #D9B35A; margin-right: 0.35rem;"></i> Geser atau scroll foto untuk menyesuaikan.
            </p>
            <div style="display: flex; align-items: center; gap: 0.5rem;">
                <button type="button" 
                        id="dmk-cropper-skip-btn" 
                        style="padding: 0.5rem 1rem; background: #0F2038; border: 1px solid #1E3A64; border-radius: 0.75rem; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; font-family: 'Barlow Condensed', sans-serif; color: #8DA8CA; cursor: pointer;">
                    Gunakan Asli
                </button>
                <button type="button" 
                        id="dmk-cropper-apply-btn" 
                        style="display: inline-flex; align-items: center; gap: 0.4rem; padding: 0.5rem 1.25rem; background: #C09A3E; border: 1px solid #D9B35A; border-radius: 0.75rem; font-family: 'Barlow Condensed', sans-serif; font-weight: 800; font-size: 0.75rem; color: #050B14; text-transform: uppercase; letter-spacing: 0.05em; cursor: pointer; box-shadow: 0 4px 12px rgba(192, 154, 62, 0.3);">
                    <i class="fa-solid fa-check text-xs"></i> Pasang Foto
                </button>
            </div>
        </div>
    </div>
</div>

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

<script>
    (function () {
        let cropper = null;
        let activeInput = null;
        let originalFile = null;
        let activeRatio = 1.14; // Default Rasio Card DMK (lebar ~400px / tinggi 350px)

        const modal = document.getElementById('dmk-cropper-modal');
        const cropperImg = document.getElementById('dmk-cropper-image');
        const cancelBtn = document.getElementById('dmk-cropper-cancel-btn');
        const skipBtn = document.getElementById('dmk-cropper-skip-btn');
        const applyBtn = document.getElementById('dmk-cropper-apply-btn');
        const resetBtn = document.getElementById('dmk-cropper-reset');
        const rotLeftBtn = document.getElementById('dmk-cropper-rotate-left');
        const rotRightBtn = document.getElementById('dmk-cropper-rotate-right');
        const ratioBtns = document.querySelectorAll('.dmk-ratio-btn');

        function initCropperInstance() {
            if (typeof Cropper === 'undefined') {
                setTimeout(initCropperInstance, 100);
                return;
            }

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
                zoomable: true
            });
        }

        function openModal(file, inputEl) {
            activeInput = inputEl;
            originalFile = file;

            // Buat Object URL instan (0 milidetik, tanpa tunggu FileReader baca seluruh file)
            const objectUrl = URL.createObjectURL(file);
            cropperImg.src = objectUrl;

            // Buka modal langsung di tengah layar dengan z-index tertinggi
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';

            // Inisialisasi cropper begitu gambar siap
            if (cropperImg.complete) {
                initCropperInstance();
            } else {
                cropperImg.onload = function() {
                    initCropperInstance();
                };
            }
        }

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = '';
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            if (cropperImg.src && cropperImg.src.startsWith('blob:')) {
                URL.revokeObjectURL(cropperImg.src);
            }
            cropperImg.src = '';
        }

        // Listener change file input secara global
        document.addEventListener('change', function (e) {
            if (e.target && e.target.type === 'file' && e.target.name === 'image') {
                const files = e.target.files;
                if (files && files.length > 0) {
                    const file = files[0];
                    if (file.type.startsWith('image/')) {
                        // Jangan buka jika file ini adalah hasil crop kita sendiri
                        if (!e.target._croppedFile) {
                            openModal(file, e.target);
                        }
                    }
                }
            }
        });

        // Tombol Cancel (X)
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function () {
                if (activeInput && !activeInput._croppedFile) {
                    activeInput.value = '';
                }
                closeModal();
            });
        }

        // Tombol Skip (Gunakan Asli tanpa potong)
        if (skipBtn) {
            skipBtn.addEventListener('click', function () {
                closeModal();
            });
        }

        // Reset
        if (resetBtn) {
            resetBtn.addEventListener('click', function () {
                if (cropper) cropper.reset();
            });
        }

        // Putar Kiri / Kanan
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

        // Tombol Pilih Rasio
        ratioBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                ratioBtns.forEach(b => {
                    b.style.background = 'transparent';
                    b.style.color = '#8DA8CA';
                });
                this.style.background = '#C09A3E';
                this.style.color = '#050B14';

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

        // Tombol Pasang Foto (Terapkan Crop ke Form)
        if (applyBtn) {
            applyBtn.addEventListener('click', function () {
                if (!cropper || !activeInput || !originalFile) return;

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

                canvas.toBlob(function (blob) {
                    const newFile = new File([blob], originalFile.name, {
                        type: originalFile.type || 'image/jpeg',
                        lastModified: Date.now()
                    });

                    // Masukkan file hasil crop ke dalam input file form via DataTransfer
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(newFile);
                    activeInput._croppedFile = true;
                    activeInput.files = dataTransfer.files;

                    // Update / Tampilkan preview thumbnail di form
                    const form = activeInput.closest('form');
                    if (form) {
                        let previewImg = form.querySelector('img[data-crop-preview]');
                        if (!previewImg) {
                            previewImg = form.querySelector('img.rounded-lg');
                        }
                        if (previewImg) {
                            previewImg.src = canvas.toDataURL();
                        } else {
                            const thumb = document.createElement('img');
                            thumb.src = canvas.toDataURL();
                            thumb.style.cssText = 'display: block; margin: 0.5rem 0; border-radius: 0.5rem; border: 1px solid rgba(192, 154, 62, 0.6); max-width: 180px; max-height: 130px; object-fit: cover; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.5);';
                            thumb.setAttribute('data-crop-preview', 'true');
                            activeInput.parentNode.insertBefore(thumb, activeInput);
                        }
                    }

                    // Tampilkan badge info sukses potong
                    let badge = activeInput.parentNode.querySelector('.dmk-crop-badge');
                    if (!badge) {
                        badge = document.createElement('span');
                        badge.className = 'dmk-crop-badge';
                        badge.style.cssText = 'display: inline-block; margin-top: 0.35rem; font-size: 0.72rem; font-weight: 700; color: #8CE0C0;';
                        activeInput.parentNode.appendChild(badge);
                    }
                    badge.innerHTML = '<i class="fa-solid fa-check-circle" style="margin-right: 0.3rem;"></i> Foto berhasil dipotong & siap disimpan!';
                    setTimeout(() => badge.remove(), 4000);

                    // Reset flag setelah form terisi
                    setTimeout(() => {
                        if (activeInput) activeInput._croppedFile = false;
                    }, 500);

                    closeModal();
                }, originalFile.type || 'image/jpeg', 0.92);
            });
        }
    })();
</script>
