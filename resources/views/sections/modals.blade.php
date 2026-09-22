<!-- DMK Media Modal : Popup Promosi & Portofolio -->
    <div class="modal fade" id="dmk-media-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered dmk-media-dialog">
            <div class="modal-content dmk-media-content">

                {{-- Tombol close di atas gambar --}}
                <button type="button"
                        class="dmk-media-close-btn-top"
                        data-bs-dismiss="modal"
                        aria-label="Tutup">
                    <i class="fa fa-times"></i>
                </button>

                {{-- Zona gambar / icon --}}
                <div class="dmk-media-img-zone" id="dmk-modal-img-zone">
                    <img id="dmk-modal-img" src="" alt="" class="dmk-media-img">
                    <div class="dmk-media-img-gradient"></div>
                    <div class="dmk-media-img-badge">
                        <i class="fa fa-building"></i>
                        Duta Madinna Kubah
                    </div>
                </div>

                {{-- Header khusus jika modal tanpa gambar (seperti keunggulan) --}}
                <div id="dmk-modal-icon-header" class="dmk-media-icon-header" style="display: none;">
                    <div class="dmk-media-icon-box">
                        <i id="dmk-modal-icon" class="fa-solid fa-star"></i>
                    </div>
                    <div class="dmk-media-icon-badge">
                        <i class="fa-solid fa-award me-1"></i> Keunggulan DMK
                    </div>
                </div>

                {{-- Konten teks --}}
                <div class="dmk-media-body">
                    <h4 id="dmk-modal-title" class="dmk-media-title"></h4>
                    <p id="dmk-modal-desc" class="dmk-media-desc"></p>
                    <div class="dmk-media-footer">
                        <button type="button"
                                data-bs-dismiss="modal"
                                class="dmk-media-dismiss-btn">
                            Tutup
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ═══ End DMK Media Modal ═══ -->

    <x-material-modal id="modal-enamel" title="Kubah Masjid Enamel" image="enamel.png"
        badge="Paling Populer & Tahan Lama"
        description="Kubah berbahan dasar plat steel low carbon khusus standar enamel, dilapisi porselen enamel coating dengan pemanasan oven bersuhu tinggi (± 850°C). Menghasilkan permukaan porselen yang sangat keras, mengkilap mewah, tahan gores, dan warna tidak akan pudar selama puluhan tahun."
        :specs="[
            'Ketebalan Plat' => '1.0 - 1.2 mm (Steel Low Carbon)',
            'Finishing' => 'Enamel Coating',
            'Ketahanan Warna' => 'Garansi Resmi > 20 Tahun',
            'Suhu Pembakaran' => '± 850°C (Anti Retak & Lepas)'
        ]"
        :benefits="[
            'Tahan Suhu Panas & Perubahan Cuaca Ekstrem',
            'Anti Karat & Korosi Tingkat Tinggi',
            'Warna Mengkilap & Tahan Lama (>20 Tahun)',
            'Mudah Dibersihkan & Perawatan Rendah'
        ]" />

    <x-material-modal id="modal-alumunium" title="Kubah Masjid Alumunium" image="alumunium.png"
        badge="Bahan Ringan & Anti Karat"
        description="Kubah masjid berbobot ringan dengan sistem panel berbahan dasar plat aluminium murni pilihan setebal 0,8 mm. Menggunakan finishing cat powder coating khusus yang dioven secara merata, memberikan perlindungan ganda terhadap karat secara alami sekaligus meringankan beban konstruksi masjid."
        :specs="[
            'Ketebalan Plat' => '0.8 mm (Plat Alumunium Murni)',
            'Finishing' => 'Powder Coating Eksterior Oven',
            'Beban Konstruksi' => 'Sangat Ringan & Efisien',
            'Karakteristik' => 'Bebas Karat Alami Sepanjang Masa'
        ]"
        :benefits="[
            'Secara Alami Anti Karat Permanen',
            'Warna Halus, Rapi, & Tidak Cepat Kusam',
            'Meringankan Beban Rangka & Pondasi Masjid',
            'Tahan Panas dan Sangat Mudah Dirawat'
        ]" />

    <x-material-modal id="modal-galvalum" title="Kubah Masjid Galvalum" image="galvalum.png"
        badge="Ekonomis & Tahan Cuaca"
        description="Plat baja galvalium tebal 0,45 mm dengan komposisi pelapisan aluminium dan zinc bermutu tinggi. Dilapisi cat powder coating eksterior yang tahan cuaca tropis serta memiliki keunggulan selfwashing, sehingga debu dan kotoran mudah terbilas alami saat terkena air hujan."
        :specs="[
            'Ketebalan Plat' => '0.45 mm (Baja Galvalium)',
            'Komposisi Lapisan' => '55% Alumunium, 43.5% Zinc, 1.5% Silicon',
            'Finishing' => 'Powder Coating Eksterior Tahan Cuaca',
            'Fitur Spesial' => 'Selfwashing (Bersih oleh Air Hujan)'
        ]"
        :benefits="[
            'Tahan Panas Matahari & Cuaca Tropis',
            'Perlindungan Anti Karat Berlapis Zinc-Alumunium',
            'Permukaan Mudah Bersih Alami (Selfwashing)',
            'Solusi Kubah Paling Ekonomis & Berkualitas'
        ]" />

    <x-material-modal id="modal-stainless-gold" title="Kubah Masjid Stainless Gold" image="stainless-gold.png"
        badge="Mewah & Eksklusif"
        description="Kubah berbahan dasar plat stainless steel bermutu tinggi dengan lapisan warna emas mengkilap (gold mirror titanium coating). Memberikan pancaran estetika arsitektur masjid yang megah, anggun, dan mewah dari kejauhan tanpa memerlukan proses pengecatan ulang selamanya."
        :specs="[
            'Material Utama' => 'Stainless Steel Grade Premium',
            'Finishing' => 'Gold Mirror Titanium Coating',
            'Ketahanan Cuaca' => 'Sangat Tahan Korosi & Hujan Asam',
            'Perawatan' => 'Bebas Pengecatan Ulang Selamanya'
        ]"
        :benefits="[
            'Kilauan Warna Emas Megah & Berkelas',
            'Bahan Lentur, Kuat, dan Tahan Benturan',
            'Tahan Korosi & Anti Karat Permanen',
            'Warna Emas Alami Tidak Memudar Selamanya'
        ]" />
