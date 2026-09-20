<x-guest-layout>
    <div class="mb-6 text-center">
        <h1 class="text-2xl font-black tracking-wider text-white font-['Barlow_Condensed'] uppercase">Masuk Panel Admin</h1>
        <p class="mt-1 text-xs text-[#8DA8CA] uppercase tracking-wider font-['Barlow_Condensed']">Autentikasi Pengelola Konten PT. Duta Madinna Kubah</p>
    </div>

    @if ($errors->any() && !$errors->has('email') && !$errors->has('password'))
        <div class="mb-5 flex items-start gap-2 rounded-xl border border-red-700 bg-red-950/50 p-3.5 text-xs text-red-200">
            <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-red-400" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
            </svg>
            <span>{{ $errors->first() }}</span>
        </div>
    @endif

    <form method="POST" action="{{ route('login.post') }}" class="flex flex-col gap-4">
        @csrf

        <div>
            <x-input-label for="email" value="Alamat Email" />
            <div class="relative mt-1 group">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-[#8DA8CA] group-focus-within:text-[#D9B35A]">
                    <svg class="h-4 w-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </span>
                <input id="email" type="email" name="email" placeholder="admin@dutamadinna.com" value="{{ old('email') }}"
                    autofocus autocomplete="username"
                    class="bg-[#050B14] block w-full rounded-xl border py-2.5 pl-10 pr-4 text-sm text-white placeholder:text-gray-600 transition-colors
                        {{ $errors->has('email')
                            ? 'border-red-500 focus:border-red-400 focus:ring-1 focus:ring-red-400'
                            : 'border-[#1E3A64] focus:border-[#C09A3E] focus:ring-1 focus:ring-[#C09A3E]' }}
                        focus:outline-none" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div x-data="{ show: false }">
            <x-input-label for="password" value="Kata Sandi" />
            <div class="relative mt-1 group">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-[#8DA8CA] group-focus-within:text-[#D9B35A]">
                    <svg class="h-4 w-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </span>
                <input id="password" :type="show ? 'text' : 'password'" name="password" placeholder="••••••••"
                    autocomplete="current-password"
                    class="bg-[#050B14] block w-full rounded-xl border py-2.5 pl-10 pr-10 text-sm text-white placeholder:text-gray-600 transition-colors
                        {{ $errors->has('password')
                            ? 'border-red-500 focus:border-red-400 focus:ring-1 focus:ring-red-400'
                            : 'border-[#1E3A64] focus:border-[#C09A3E] focus:ring-1 focus:ring-[#C09A3E]' }}
                        focus:outline-none" />
                <button type="button" x-on:click="show = !show"
                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-[#8DA8CA] hover:text-[#D9B35A]">
                    <svg x-show="!show" class="h-4 w-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <svg x-show="show" x-cloak class="h-4 w-4" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.774 3.162 10.066 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="flex items-center justify-between text-xs font-['Barlow_Condensed'] uppercase tracking-wider">
            <label class="flex cursor-pointer items-center gap-2 text-[#8DA8CA] select-none">
                <input type="checkbox" name="remember" class="h-3.5 w-3.5 rounded bg-[#050B14] border-[#1E3A64] text-[#C09A3E] focus:ring-[#C09A3E] focus:ring-offset-0">
                Ingat Sesi Saya
            </label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="font-bold text-[#D9B35A] hover:underline">
                    Lupa Password?
                </a>
            @endif
        </div>

        <x-primary-button class="w-full justify-center py-3 mt-2 text-sm">
            <i class="fa-solid fa-lock-open me-2"></i> Masuk ke Dashboard
        </x-primary-button>
    </form>
</x-guest-layout>