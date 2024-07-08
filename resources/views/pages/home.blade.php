@extends('layouts.index')

@section('custom-head')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .custom-icon-list {
            list-style: none;
            /* Menghapus bullet default */
            padding: 0;
        }

        .custom-icon-list li {
            padding-left: 20px;
            /* Jarak antara ikon dan teks */
            background: url('icons/centang.svg') no-repeat left center;
            background-size: 16px 16px;
            /* Sesuaikan ukuran ikon */
            margin-bottom: 10px;
            /* Jarak antar item */
            font-size: 20px;
            background-position-y: 20%;
        }
    </style>
@endsection

@section('custom-script')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection

@section('content')
    <section id="content">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="object-cover w-full h-96 md:h-[800px]" src="images/main/bg1.webp" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full h-96 md:h-[800px]" src="images/main/main_bg_1.png" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full h-96 md:h-[800px]" src="images/main/main_bg_2.png" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full h-96 md:h-[800px]" src="images/main/main_bg_3.png" alt="image" />
                </div>
            </div>
            <div class="swiper-button-next lg:mx-14 rounded-full bg-black bg-opacity-50 p-8"
                style="color: white !important;"></div>
            <div class="swiper-button-prev lg:mx-14 rounded-full bg-black bg-opacity-50 p-8"
                style="width:10px !important;color: white !important;"></div>
            <div class="swiper-pagination"></div>
        </div>

        {{-- visi misi --}}
        <div class="grid grid-cols-1 md:grid-cols-3 h-fit md:min-h-screen py-5 md:py-0">
            <div class="col-span-1 hidden lg:block">
                <img src="images/sabit.webp" class=" h-screen" />
            </div>
            <div class="lg:col-span-2 px-16 sm:py-12 sm:col-span-3 content-center ">
                <h1 class="text-hijau1 poppins-semibold text-4xl md:text-6xl">Visi <span class=" text-black">dan</span> Misi</h1>

                <p class="mt-5 text-xl md:text-2xl">
                    <b>Visi Pondok Pesantren Darul Yatama Wal Masakin</b>
                    <br />
                    “Terwujudnya manusia yang cerdas dan sejahtera dalam bingkai nilai-nilai ke-Islaman dan ke-Indonesiaan
                    agar dapat menjadi rahmat bagi semesta alam (rahmatan lil alamin)”.
                </p>

                <p class="mt-16 text-xl md:text-2xl">
                    <b>Misi Pondok Pesantren Darul Yatama Wal Masakin yaitu:</b>
                    </p>
                <ul class="custom-icon-list mt-5 text-xl md:text-2xl">
                    <li>Membina, mengembangkan dan memberdayakan potensi-potensi sosial dan keagamaan melalui pendidikan.
                    </li>
                    <li>Membina dan memberi suri tauladan kepada masyarakat melalui program-program pemberdayaan sosial,
                        ekonomi, dan lingkungan.</li>
                    <li>Mendorong terciptanya keharmonisan sosial dan alamnya dengan bersandar pada nilai-nilai ke-Islaman
                        dan ke-Indonesiaan.</li>
                </ul>
                
            </div>
        </div>

        <div class="w-full min-h-screen h-fit" style="background-image:url('images/bg.webp');background-position: center; background-size: cover; background-repeat:no-repeat;">
            <div class="w-full min-h-screen h-fit lg:p-24 p-8 bg-[#20222B] bg-opacity-95 poppins-semibold">
                <div class="pt-10 px-2">
                    <h3 class="text-hijau1" style="font-size: 20px;">PONPES DARUL YATAMA WAL MASAKIN</h3>
                    <h1 class="text-white" style="font-size: 45px;">Jenjang Pendidikan</h1>
                </div>

                <div class="mt-14 grid gap-2 lg:gap-6 mx-2 h-fit lg:grid-cols-4 sm:grid-cols-2 text-white" id="list-jenjang">
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class="h-28 flex justify-center">
                            <img width="70" height="70"
                                src="{{ asset('/icons/jenjang_pendidikan/ic_child.svg') }}" />
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Raudatul Athfal Darull Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="70" height="70"
                                src="{{ asset('/icons/jenjang_pendidikan/ic_alphabetic.svg') }}" />
                        </div>
                        <div class=" text-center" id="caption">
                            <p> Madrasah Ibtidaiyah Darul Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="70" height="70"
                                src="{{ asset('/icons/jenjang_pendidikan/ic_pencil.svg') }}" />
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Madrasah Tsanawiyah Darul Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="70" height="70" src="{{ asset('/icons/jenjang_pendidikan/ic_book.svg') }}" />
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Madrasah Aliyah Darul Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="50" height="70"
                                src="{{ asset('/icons/jenjang_pendidikan/ic_quran.svg') }}" />
                        </div>
                        <div class="text-center" id="caption">
                            <p>Program Tahfiz</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="70" height="70" src="{{ asset('/icons/jenjang_pendidikan/ic_moon.svg') }}" />
                        </div>
                        <div class="text-center" id="caption">
                            <p>Madrasah Diniyah Islamiyah</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="70" height="70"
                                src="{{ asset('/icons/jenjang_pendidikan/ic_quran_2.svg') }}" />
                        </div>
                        <div class="text-center" id="caption">
                            <p>Program Pengajaran Dasar Al-Qur’an</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg p-5" style="font-size: 18px;">
                        <div class=" h-28 flex justify-center">
                            <img width="70" height="70"
                                src="{{ asset('/icons/jenjang_pendidikan/ic_charity.svg') }}" />
                        </div>
                        <div class="text-center" id="caption">
                            <p>Panti Asuhan</p>
                        </div>
                    </div>

                    <div class="bg-black lg:col-span-4 sm:col-span-2 rounded-lg py-20 text-center"
                        style="font-size: 30px;">
                        <h1>Sekolah Tinggi Ilmu Tarbiyah Sibawaihi Mutawali</h1>
                    </div>
                </div>
            </div>
        </div>

        {{-- keuntungan --}}
        <div class="w-full min-h-screen lg:p-24 p-10 poppins-semibold flex">
            <div class="grid lg:grid-cols-2 sm:grid-cols-1 content-center">
                <div class="lg:col-span-1">
                    <div class="" id="title">
                        <h3 class="text-hijau1" style="font-size: 20px;">Kenapa Harus Memilih Kami?</h3>
                        <h1 class="text-black text-2xl md:text-4xl">Keuntungan Menempuh Pendidikan di Ponpes
                            Darul Yatama Wal Masakin</h1>
                    </div>
                    {{-- list --}}
                    <div class=" text-justify">
                        <div class="flex justify-center py-5">
                            <img src="images/sejarah/sejarah_1.webp" class="block lg:hidden">
                        </div>
                        <p class="" style="font-size: 20px;">
                        <ul class="custom-icon-list mt-5 poppins-regular">
                            <li style="margin-bottom: 50px;">Pondok Pesantren yang berlandaskan Aqidah Ahlussunnah wal
                                Jamaah. mengikut para ulama salaf dan bermadzhab, serta mengutamakan keilmuan dan sanad,
                                cinta kepada Ulama</li>
                            <li style="margin-bottom: 50px;">Membangun intelektual, emosial, keterampilan dan yang paling
                                utama budi pekerti serta kekutatan spiritual.</li>
                            <li style="margin-bottom: 50px;">Mengajarkan santri untuk mandiri, memiliki jiwa sosial dan
                                jiwa kepemimpinan.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="lg:col-span-1 flex justify-center ps-5">
                    <img src="images/sejarah/sejarah_1.webp" class="hidden lg:block">
                </div>
            </div>
        </div>

        {{-- rate komen --}}
        <div class="min-h-screen relative h-fit pb-10">
            <div class="absolute h-96 bg-hijau1 w-full -z-10"></div>
            
            <div class="text-center text-white w-full pt-[7%] px-5">
                <p class="poppins-regular text-[25px]">Kata mereka tentang</p>
                <p class="poppins-semibold" style="font-size: 40px;">PONPES DARUL YATAMA WAL MASAKIN</p>
            </div>

            <div class="lg:gap-3 text-black p-10 px-8 md:px-24 flex justify-center">
                <div class="flex" style="width: 800px">
                    <x-card class="col-span-1 h-fit my-5" title="Kebebasan memilih ustadz untuk pengajian kitab" name="Muhammad Ali Sabana" rule="Alumni & Dosen UIN Mataram"
                        src="/images/user-default.png">
                        Saya alumni dari Ponpes Darul Yatama Wal Masakin. Alhamdulillah, saya telah mengabdikan diri dalam dunia pendidikan di pondok ini selama enam tahun, mulai dari jenjang Madrasah Sanawiyah hingga melanjutkan ke Madrasah Aliyah. Selain menjadi santri, salah satu keunggulan yang saya rasakan di pondok ini adalah kebebasan memilih ustadz untuk pengajian kitab, sehingga kami bisa belajar dengan nyaman.
                        Setelah lulus dari Madrasah Aliyah, alhamdulillah, berkat kerja sama antara UIN Mataram dan Pondok Pesantren, saya terpilih sebagai salah satu dari empat santri terbaik dan mendapatkan beasiswa dari UIN Mataram. Beasiswa ini memungkinkan saya untuk kuliah tanpa biaya hingga wisuda, semua berkat doa dan dukungan para ustadz dan teman-teman.
                        Sekarang, alhamdulillah, saya menjabat sebagai salah satu pimpinan di Sekolah Tinggi Ilmu Tarbiyah dan menjadi dosen di UIN Mataram.
                    </x-card>
                </div>
            </div>
        </div>
    </section>
@endsection
