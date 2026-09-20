<x-app-layout>
    <!-- Navbar -->
    <x-navbar :isFixed="true">
        <x-slot name="navlinks">
            <li>
                <x-navbar.nav-link href="#home" class="text-blue-600">
                    Beranda
                </x-navbar.nav-link>
            </li>
            <li>
                <x-navbar.nav-link href="#information">
                    Informasi
                </x-navbar.nav-link>
            </li>
            <li>
                <x-navbar.nav-link href="#about">
                    Tentang
                </x-navbar.nav-link>
            </li>
            <li>
                <x-navbar.nav-link href="#services">
                    Layanan
                </x-navbar.nav-link>
            </li>
            <li>
                <x-navbar.nav-link href="#contact">
                    Kontak
                </x-navbar.nav-link>
            </li>
            @if (auth()->check())
                <li>
                    <x-navbar.nav-link href="{{ route('dashboard') }}" class="w-full">
                        <x-primary-button class="w-full flex justify-center">Dashboard</x-primary-button>
                    </x-navbar.nav-link>
                </li>
            @else
                <li>
                    <x-navbar.nav-link href="{{ route('login') }}" class="w-full">
                        <x-primary-button class="w-full flex justify-center">Login</x-primary-button>
                    </x-navbar.nav-link>
                </li>
            @endif
        </x-slot>
    </x-navbar>

    <!-- Hero -->
    <section id="home" class="text-white relative h-screen w-full">
        <img src="{{ Vite::image('hero.jpg') }}" alt="Hero Image"
            class="absolute h-screen object-cover w-full brightness-50">
        <div class="container mx-auto text-center px-6 absolute left-0 right-0 top-1/2 -translate-y-1/2">
            <h2 class="text-4xl font-bold mb-4">Menginspirasi Ibadah dengan Keelokan Kubah.</h2>
            <p class="text-xl mb-6">
                Sebuah Perusahaan yang mengkhususkan diri di bidang pembuatan kubah masjid modern ornamental.
            </p>
            <a href="#contact"
                class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                Hubungi Kami
            </a>
        </div>
    </section>

    {{-- Latest Information --}}
    <section id="information" class="py-20">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Informasi Terbaru</h3>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($information as $key => $info)
                    <div class="bg-white p-6 rounded-lg shadow text-center flex flex-col max-h-96">
                        <h4 class="text-xl font-bold">{{ $info->title }}</h4>
                        <x-modal :name="$info->id">
                            <img src="{{ asset("storage/$info->image_path") }}" class="w-full block">
                        </x-modal>
                        <img src="{{ asset("storage/$info->image_path") }}" class="max-h-3/4 object-cover my-auto"
                            x-data x-on:click="$dispatch('open-modal', '{{ $info->id }}')">
                    </div>
                @endforeach
            </div>
    </section>

    <!-- About -->
    <section id="about" class="py-20 bg-blue-100 transition">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Tentang Kami</h3>
            <p class="max-w-3xl mx-auto text-center text-gray-600">
                Kami adalah kontraktor kubah masjid dengan sistem panel yaitu atap penutup kubah dengan menggunakan
                material logam yang terdiri dari panel-panel segi empat didominasi bentuk belah ketupat. Material
                yang
                kami gunakan adalah galvalium, aluminium, plat baja rendah karbon, dan stainless gold.
            </p>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10">Layanan Kami</h3>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Pembuatan Kubah Masjid</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolores
                        cum
                        placeat, ipsa neque consectetur architecto temporibus voluptatum sed fuga in voluptates
                        dolore
                        distinctio atque blanditiis culpa itaque quibusdam debitis.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Pembuatan Plafon Masjid</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi
                        ratione
                        numquam doloremque aperiam assumenda eaque rem ut ad et quaerat pariatur, molestias deserunt
                        qui
                        tempore dolore fugiat cupiditate sint natus?</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <h4 class="text-xl font-bold mb-2">Konsultasi Gratis</h4>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic corporis
                        quam
                        ipsa at? Ullam nemo necessitatibus excepturi. Iusto fugiat dolores ducimus sapiente id
                        perspiciatis reprehenderit voluptate cumque eveniet. Aliquid, iste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-4 bg-blue-100 transition">
        <div class="container mx-auto px-6 max-w-3xl flex flex-col gap-5 items-center">
            <h3 class="text-2xl font-bold text-center uppercase">
                Penawaran Terbaik Dengan Konsultasi Gratis, Silakan Hubungi :
            </h3>
            <a href="https://wa.me/6285316979307" class="block">
                <x-primary-button class="px-12 py-4 text-xl">
                    Duta Madinna Kubah
                </x-primary-button>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white text-center py-6 border-t mt-10">
        <p>&copy; 2025 Duta Madinna Kubah. Hak cipta dilindungi undang-undang.</p>
    </footer>

    <!-- Scroll to Top -->
    <div id="scrollToTop"
        class="fixed p-3 bg-blue-400 z-50 bottom-4 right-4 rounded-full shadow-lg cursor-pointer border-2 border-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-4 sm:size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5"></path>
        </svg>
    </div>
</x-app-layout>
