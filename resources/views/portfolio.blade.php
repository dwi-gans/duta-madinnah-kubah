<x-auth-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <div>
                <h2 class="font-black text-2xl sm:text-3xl text-white font-['Barlow_Condensed'] uppercase tracking-wider">
                    Manajemen Portofolio Proyek
                </h2>
                <p class="text-xs font-semibold text-[#8DA8CA] tracking-wider uppercase mt-1">
                    Kelola dokumentasi proyek kubah masjid yang ditampilkan di halaman beranda.
                </p>
            </div>
            <x-primary-button class="w-full sm:w-auto justify-center shrink-0 mt-2 sm:mt-0" x-data x-on:click.prevent="$dispatch('open-modal', 'add-portfolio')">
                <i class="fa-solid fa-plus me-2"></i> Tambah Portofolio
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-5 sm:py-8 px-3 sm:px-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#0A1628] border border-[#1E3A64] rounded-xl sm:rounded-2xl p-3.5 sm:p-6 shadow-xl flex flex-col gap-4">

                <!-- Mobile Bento Grid (2-Kolom) -->
                <div class="grid grid-cols-2 gap-2.5 sm:gap-3 md:hidden">
                    @forelse ($portfolios as $portfolio)
                        <div class="bg-[#0F2038] border border-[#1E3A64] hover:border-[#C09A3E] rounded-xl p-2.5 flex flex-col justify-between transition-all duration-200 shadow-md">
                            <div>
                                <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden border border-[#1E3A64] mb-2 bg-[#050B14]">
                                    <img src='{{ $portfolio->image_url }}'
                                         class="w-full h-full object-cover" alt="{{ $portfolio->title }}">
                                </div>
                                <h4 class="font-bold text-white text-xs line-clamp-2 leading-snug mb-1 font-['Barlow_Condensed'] tracking-wide">
                                    {{ $portfolio->title }}
                                </h4>
                                <p class="text-[#8DA8CA] text-[11px] line-clamp-2 leading-relaxed mb-2.5">
                                    {{ $portfolio->description }}
                                </p>
                            </div>
                            <div class="pt-2 border-t border-[#1E3A64]/80 flex items-center justify-between gap-1.5">
                                <button class="flex-1 py-1.5 px-2 bg-[#0A1628] hover:bg-[#D9B35A]/10 border border-[#1E3A64] hover:border-[#D9B35A] rounded-lg text-[#D9B35A] font-bold text-[11px] uppercase tracking-wider font-['Barlow_Condensed'] flex items-center justify-center gap-1 transition"
                                        x-data x-on:click.prevent="$dispatch('open-modal', 'edit-portfolio-{{ $portfolio->id }}')">
                                    <i class="fa-solid fa-pen-to-square text-[10px]"></i> Sunting
                                </button>
                                <button class="py-1.5 px-2.5 bg-[#0A1628] hover:bg-red-950/40 border border-[#1E3A64] hover:border-red-500/50 rounded-lg text-red-400 font-bold text-[11px] uppercase tracking-wider font-['Barlow_Condensed'] flex items-center justify-center transition"
                                        x-data x-on:click.prevent="$dispatch('open-modal', 'delete-portfolio-{{ $portfolio->id }}')"
                                        title="Hapus">
                                    <i class="fa-solid fa-trash text-[10px]"></i>
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2 py-8 text-center text-sm text-[#8DA8CA]">
                            <i class="fa-solid fa-folder-open text-3xl mb-2 text-[#1E3A64] block"></i>
                            Belum ada data portofolio.
                        </div>
                    @endforelse
                </div>

                <!-- Desktop Table View -->
                <div class="hidden md:block relative overflow-x-auto border border-[#1E3A64] rounded-xl overflow-hidden">
                    <table class="w-full text-sm text-left text-gray-300">
                        <thead class="text-xs text-[#D9B35A] uppercase bg-[#0F2038] font-['Barlow_Condensed'] font-bold tracking-wider border-b border-[#1E3A64]">
                            <tr>
                                <th scope="col" class="px-6 py-3.5">Gambar</th>
                                <th scope="col" class="px-6 py-3.5">Judul Proyek</th>
                                <th scope="col" class="px-6 py-3.5">Deskripsi / Spesifikasi</th>
                                <th scope="col" class="px-6 py-3.5 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#1E3A64]/60">
                            @forelse ($portfolios as $portfolio)
                                <tr class="bg-[#0A1628] hover:bg-[#0F2038]/50 transition">
                                    <td class="p-4">
                                        <img src='{{ $portfolio->image_url }}'
                                            class="w-16 md:w-28 h-16 md:h-20 object-cover rounded-lg border border-[#1E3A64]" alt="Portfolio Image">
                                    </td>
                                    <td class="px-6 py-4 font-bold text-white">
                                        {{ $portfolio->title }}
                                    </td>
                                    <td class="px-6 py-4 text-[#8DA8CA] text-xs max-w-xs leading-relaxed">
                                        {{ \Illuminate\Support\Str::limit($portfolio->description, 80) }}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex flex-col gap-1 items-center">
                                            <button class="font-bold text-[#D9B35A] hover:underline cursor-pointer uppercase text-xs tracking-wider font-['Barlow_Condensed']" x-data
                                                x-on:click.prevent="$dispatch('open-modal', 'edit-portfolio-{{ $portfolio->id }}')">
                                                <i class="fa-solid fa-pen-to-square me-1"></i> Sunting
                                            </button>
                                            <button class="font-bold text-red-400 hover:underline cursor-pointer uppercase text-xs tracking-wider font-['Barlow_Condensed']" x-data
                                                x-on:click.prevent="$dispatch('open-modal', 'delete-portfolio-{{ $portfolio->id }}')">
                                                <i class="fa-solid fa-trash me-1"></i> Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-[#8DA8CA]">
                                        <i class="fa-solid fa-folder-open text-3xl mb-2 text-[#1E3A64] block"></i>
                                        Belum ada data portofolio. Klik "Tambah Portofolio" untuk menambahkan data baru.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Modals (Edit & Delete for each item) -->
                @foreach ($portfolios as $portfolio)
                    <!-- Modal Edit -->
                    <x-modal name="edit-portfolio-{{ $portfolio->id }}">
                        <form action="{{ route('portfolio.update', $portfolio) }}" method="POST"
                            enctype="multipart/form-data" class="block w-full">
                            @csrf
                            @method('PUT')

                            <div class="bg-[#0A1628] px-5 pt-6 pb-5 border-b border-[#1E3A64]">
                                <div class="flex flex-col gap-4">
                                    <h3 class="text-lg font-black text-white font-['Barlow_Condensed'] uppercase tracking-wider flex items-center gap-2">
                                        <i class="fa-solid fa-pen-to-square text-[#D9B35A]"></i> Sunting Portofolio
                                    </h3>

                                    <div>
                                        <x-input-label for="title-{{ $portfolio->id }}" value="Judul Proyek" />
                                        <x-text-input id="title-{{ $portfolio->id }}" name="title" placeholder="Contoh: Masjid Agung Al-Falah"
                                            class="w-full" :value="old('title', $portfolio->title)" />
                                        @error('title')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <x-input-label for="description-{{ $portfolio->id }}" value="Deskripsi / Lokasi" />
                                        <x-textarea-input id="description-{{ $portfolio->id }}" name="description"
                                            placeholder="Deskripsi detail proyek...">{{ old('description', $portfolio->description) }}</x-textarea-input>
                                        @error('description')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <x-input-label for="image-{{ $portfolio->id }}" value="File Gambar" />
                                        <img src="{{ $portfolio->image_url }}"
                                            class="mb-2 rounded-lg border border-[#1E3A64]" style="max-width: 180px; max-height: 120px; object-fit: cover;" alt="Current Image">
                                        <x-text-input id="image-{{ $portfolio->id }}" name="image" type="file"
                                            accept="image/jpeg,image/jpg,image/png,image/gif,image/webp"
                                            class="mt-1 w-full file:border-0 file:rounded-lg file:mr-2 file:bg-[#0F2038] file:border file:border-[#1E3A64] file:px-3.5 file:py-1.5 file:text-xs file:font-bold file:text-[#D9B35A]" />
                                        <p class="text-[11px] text-[#8DA8CA] mt-1">Format: JPEG, JPG, PNG, GIF, WEBP (Max: 2MB). Kosongkan jika tidak mengganti gambar.</p>
                                        @error('image')
                                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[#050B14] px-5 py-4 flex flex-col sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                                <x-primary-button class="justify-center">Simpan Perubahan</x-primary-button>
                                <x-light-button type="button" class="justify-center"
                                    x-on:click="$dispatch('close')">Batal</x-light-button>
                            </div>
                        </form>
                    </x-modal>

                    <!-- Modal Delete -->
                    <x-modal name="delete-portfolio-{{ $portfolio->id }}">
                        <form action="{{ route('portfolio.destroy', $portfolio) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="bg-[#0A1628] px-5 pt-6 pb-5 border-b border-[#1E3A64]">
                                <div class="flex flex-col gap-3">
                                    <h3 class="text-lg font-black text-white font-['Barlow_Condensed'] uppercase tracking-wider flex items-center gap-2">
                                        <i class="fa-solid fa-triangle-exclamation text-red-400"></i> Hapus Portofolio
                                    </h3>
                                    <p class="text-sm text-[#8DA8CA]">Yakin ingin menghapus data "<strong class="text-white">{{ $portfolio->title }}</strong>"? Tindakan ini tidak dapat dibatalkan.</p>
                                </div>
                            </div>

                            <div class="bg-[#050B14] px-5 py-4 sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                                <button type="submit" class="inline-flex items-center justify-center px-4 py-2.5 bg-red-600 border border-red-500 rounded-xl font-['Barlow_Condensed'] font-extrabold text-xs text-white uppercase tracking-widest hover:bg-red-700 transition cursor-pointer shadow-md">
                                    Ya, Hapus Data
                                </button>
                                <x-light-button type="button"
                                    x-on:click="$dispatch('close')">Batal</x-light-button>
                            </div>
                        </form>
                    </x-modal>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal Tambah -->
    <x-modal name="add-portfolio">
        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data"
            class="block w-full">
            @csrf
            @method('POST')

            <div class="bg-[#0A1628] px-5 pt-6 pb-5 border-b border-[#1E3A64]">
                <div class="flex flex-col gap-4">
                    <h3 class="text-lg font-black text-white font-['Barlow_Condensed'] uppercase tracking-wider flex items-center gap-2">
                        <i class="fa-solid fa-plus text-[#D9B35A]"></i> Tambah Portofolio Baru
                    </h3>

                    <div>
                        <x-input-label for="title" value="Judul Proyek" />
                        <x-text-input id="title" name="title" placeholder="Contoh: Kubah Masjid Jami' Surabaya" class="w-full" :value="old('title')" />
                        @error('title')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="description" value="Deskripsi / Lokasi" />
                        <x-textarea-input id="description" name="description"
                            placeholder="Deskripsi pengerjaan, spesifikasi material, atau lokasi...">{{ old('description') }}</x-textarea-input>
                        @error('description')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <x-input-label for="image" value="File Gambar" />
                        <x-text-input id="image" name="image" type="file"
                            accept="image/jpeg,image/jpg,image/png,image/gif,image/webp"
                            class="w-full file:border-0 file:rounded-lg file:mr-2 file:bg-[#0F2038] file:border file:border-[#1E3A64] file:px-3.5 file:py-1.5 file:text-xs file:font-bold file:text-[#D9B35A]" />
                        <p class="text-[11px] text-[#8DA8CA] mt-1">Format: JPEG, JPG, PNG, GIF, WEBP (Max: 2MB)</p>
                        @error('image')
                            <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="bg-[#050B14] px-5 py-4 flex flex-col sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                <x-primary-button class="justify-center">Simpan Data</x-primary-button>
                <x-light-button type="button" class="justify-center"
                    x-on:click="$dispatch('close')">Batal</x-light-button>
            </div>
        </form>
    </x-modal>
</x-auth-layout>
