<section id="header">
    <div class="header py-8 lg:px-32 sm:px-4 grid grid-cols-2 border-b-2" style="font-size: 20px;">
        <div class="title-header flex col-span-1 poppins-semibold">
            <div class="logo-header">
                <img src="images/logo.png" width="60" />
            </div>
            <div class="font-bold content-center px-3">
                <p class="text-black">PONDOK PESANTREN</p>
                <p class="text-hijau1">DARULYATAMA WAL MASAKIN</p>
            </div>
        </div>
        <div class="contact-header col-span-1 flex poppins-regular justify-end sm:text-base">
            {{-- telepone --}}
            <div class="flex lg:px-5 sm:px-2">
                <div class=" me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                        fill="none" stroke="#34A853" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-phone">
                        <path
                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class=" text-slate-300">Telepon</p>
                    <p>08xxxxxxxx</p>
                </div>
            </div>
            {{-- email --}}
            <div class="flex lg:px-5 sm:px-2">
                <div class=" me-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                        fill="none" stroke="#34A853" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </div>
                <div>
                    <p class=" text-slate-300">Email</p>
                    <p>contohemail@gmail.com</p>
                </div>
            </div>
        </div>
    </div>

    {{-- navbar --}}
    <nav class=" flex justify-center lg:px-32 sm:px-4">
        <ul class=" w-full poppins-regular lg:px-7 flex" style="font-size: 20px;">
            <li class="px-7 py-6">
                <a href="{{ route('home') }}">
                    <span
                        class=" {{ Request::is('/') ? 'font-bold border-b-2 pb-1 border-green-600' : 'text-gray-400' }}">Beranda</span>
                </a>
            </li>

            <!-- Dropdown menu -->
            <li class="px-7 py-6">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center gap-1">
                    <span class="text-gray-400 whitespace-nowrap">Profil Yayasan</span>
                    <img src="{{ asset('/icons/chevron.svg') }}" alt="">
                </button>
            </li>
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-400 rounded-lg border shadow-lg w-full md:w-52">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 poppins-regular"
                    aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{ route('visi-misi') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Visi
                            Misi</a>
                    </li>
                    <li>
                        <a href="{{ route('sejarah') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Sejarah</a>
                    </li>
                    <li>
                        <a href="{{ route('struktur-organisasi') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Struktur
                            Organisasi</a>
                    </li>
                </ul>
            </div>

            <li class="px-7 py-6">
                <a href="{{ route('usaha') }}">
                    <span
                        class=" {{ Request::is('usaha') ? 'font-bold border-b-2 pb-1 border-green-600' : 'text-gray-400' }}">Badan
                        Usaha</span>
                </a>
            </li>
            <li class="px-7 py-6">
                <a href="{{ route('jenjang') }}">
                    <span
                        class=" {{ Request::is('jenjang') ? 'font-bold border-b-2 pb-1 border-green-600' : 'text-gray-400' }}">Jenjang</span>
                </a>
            </li>
            <li class="px-7 py-6">
                <a href="{{ route('galeri') }}">
                    <span
                        class="{{ Request::is('galeri') ? 'font-bold border-b-2 pb-1 border-green-600' : 'text-gray-400' }}">Galeri</span>
                </a>
            </li>
            <li class="px-7 py-6">
                <a href="{{ route('kontak') }}">
                    <span
                        class="{{ Request::is('kontak') ? 'font-bold border-b-2 pb-1 border-green-600' : 'text-gray-400' }}">Kontak
                        Kami</span>
                </a>
            </li>
        </ul>
    </nav>

</section>
