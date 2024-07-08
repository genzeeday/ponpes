<section id="header">
    <div class="header py-3 md:py-8 lg:px-32 px-4 flex justify-between items-center border-b-2" style="">
        <a href="/" class="title-header flex col-span-1 poppins-semibold">
            <div class="logo-header">
                <img src="{{asset('images/logo.webp')}}" class="w-10 md:w-14" />
            </div>
            <div class="font-bold content-center px-3 text-sm md:text-lg">
                <p class="text-black">PONDOK PESANTREN</p>
                <p class="text-hijau1">DARUL YATAMA WAL MASAKIN</p>
            </div>
        </a>
        
        <!-- Hamburger Menu -->
        <button id="dropdownDefaultButton-hamburger" data-dropdown-toggle="dropdown-hamburger" class="block lg:hidden">
            <img src="{{ asset('/icons/menu.svg') }}" alt="menu">
        </button>
        <div id="dropdown-hamburger"
            class="z-10 hidden bg-white divide-y divide-gray-400 rounded-lg border shadow-lg w-full">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 poppins-regular"
                aria-labelledby="dropdownDefaultButton">
                <li>
                    <a href="/"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Beranda</a>
                </li>

                <!-- Profil Yayasan -->
                <li>
                    <p class="block px-4 py-2 text-zinc-600 text-base">Profil Yayasan</p>
                </li>
                <li class="pl-5">
                    <a href="{{ route('visi-misi') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Visi Misi</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('sejarah') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Sejarah</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('struktur-organisasi') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Struktur Organisasi</a>
                </li>

                 <!-- Jenjang Pendidikan -->
                <li>
                    <p class="block px-4 py-2 text-zinc-600 text-base">Jenjang Pendidikan</p>
                </li>
                <li class="pl-5">
                    <a href="{{ route('pendidikan.raudatul') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Raudatul Athfal Darull Aitam</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('pendidikan.ibtidaiyah') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Madrasah Ibtidaiyah Darul Aitam</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('pendidikan.tsanawiyah') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Madrasah Tsanawiyah Darul Aitam</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('pendidikan.diniyah') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Madrasah Diniyah Islamiyah</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('pendidikan.quran') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Program Pengajaran Dasar Al-Qur’an</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('pendidikan.panti') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Panti Asuhan</a>
                </li>
                <li class="pl-5">
                    <a href="https://stitsibawaihimutawalli.ac.id" target="_blank"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Sekolah Tinggi Ilmu Tarbiyah Sibawaihi Mutawali</a>
                </li>

                 <!-- Bisnis -->
                 <li>
                    <p class="block px-4 py-2 text-zinc-600 text-base">Bisnis</p>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.dayama-agro') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Agro</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.dayama-farm') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Farm</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.migas') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">PT. Migas Hidayatullah Jerowaru</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.vaname') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Sea Resources (DSR) Vaname</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.garam') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Sea Resources (DSR) Garam</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.ikan') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Sea Resources (DSR) Budidaya</a>
                </li>
                <li class="pl-5">
                    <a href="{{ route('bisnis.grosir') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">UD. Jumhuriah (Toko Grosir)</a>
                </li>

                <!-- Other -->
                <li>
                    <a href="{{ route('galeri') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Galeri</a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}"
                        class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="sticky top-0 bg-white z-10" id="navbar">
{{-- navbar --}}
    <nav class="hidden lg:flex justify-center lg:px-32 sm:px-4">
        <ul class=" w-full poppins-regular lg:px-7 flex lg:text-[20px] sm:text-[10px]">
            <li class="px-7 py-6">
                <a href="{{ route('home') }}">
                    <span
                        class=" {{ Request::is('/') ? 'font-bold border-b-2 pb-1 border-green-600' : 'text-gray-400' }}">Beranda</span>
                </a>
            </li>

            <!-- Dropdown menu profil -->
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

            <!-- Dropdown menu jenjang pendidikan -->
            <li class="px-7 py-6">
                <button id="dropdownDefaultButton-pendidikan" data-dropdown-toggle="dropdown-pendidikan" class="flex items-center gap-1">
                    <span class="text-gray-400 whitespace-nowrap">Jenjang Pendidikan</span>
                    <img src="{{ asset('/icons/chevron.svg') }}" alt="">
                </button>
            </li>
            <div id="dropdown-pendidikan"
                class="z-10 hidden bg-white divide-y divide-gray-400 rounded-lg border shadow-lg w-full md:w-52">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 poppins-regular"
                    aria-labelledby="dropdownDefaultButton-pendidikan">
                    <li>
                        <a href="{{ route('pendidikan.raudatul') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Raudatul Athfal Darull Aitam</a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.ibtidaiyah') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Madrasah Ibtidaiyah Darul Aitam</a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.tsanawiyah') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Madrasah Tsanawiyah Darul Aitam</a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.diniyah') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Madrasah Diniyah Islamiyah</a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.tahfiz') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Program Tahfiz</a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.quran') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Program Pengajaran Dasar Al-Qur’an</a>
                    </li>
                    <li>
                        <a href="{{ route('pendidikan.panti') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Panti Asuhan</a>
                    </li>
                    <li>
                        <a href="https://stitsibawaihimutawalli.ac.id" target="_blank"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Sekolah Tinggi Ilmu Tarbiyah Sibawaihi Mutawali</a>
                    </li>
                </ul>
            </div>

            <!-- Dropdown menu usaha -->
            <li class="px-7 py-6">
                <button id="dropdownDefaultButton-usaha" data-dropdown-toggle="dropdown-usaha" class="flex items-center gap-1">
                    <span class="text-gray-400 whitespace-nowrap">Bisnis</span>
                    <img src="{{ asset('/icons/chevron.svg') }}" alt="">
                </button>
            </li>
            <div id="dropdown-usaha"
                class="z-10 hidden bg-white divide-y divide-gray-400 rounded-lg border shadow-lg w-full md:w-52">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 poppins-regular"
                    aria-labelledby="dropdownDefaultButton-usaha">
                    <li>
                        <a href="{{ route('bisnis.dayama-agro') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Agro</a>
                    </li>
                    <li>
                        <a href="{{ route('bisnis.dayama-farm') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Farm</a>
                    </li>
                    <li>
                        <a href="{{ route('bisnis.migas') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">PT. Migas Hidayatullah Jerowaru</a>
                    </li>
                    <li>
                        <a href="{{ route('bisnis.vaname') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Sea Resources (DSR) Vaname</a>
                    </li>
                    <li>
                        <a href="{{ route('bisnis.garam') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Sea Resources (DSR) Garam</a>
                    </li>
                    <li>
                        <a href="{{ route('bisnis.ikan') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">Dayama Sea Resources (DSR) Budidaya</a>
                    </li>
                    <li>
                        <a href="{{ route('bisnis.grosir') }}"
                            class="block px-4 py-2 hover:bg-gray-200 text-zinc-600 text-base">UD. Jumhuriah (Toko Grosir)</a>
                    </li>
                </ul>
            </div>

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
