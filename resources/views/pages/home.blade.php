@extends('layouts.index')

@section('custom-head')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .custom-icon-list {
            list-style: none; /* Menghapus bullet default */
            padding: 0;
        }

        .custom-icon-list li {
            padding-left: 20px; /* Jarak antara ikon dan teks */
            background: url('icons/centang.svg') no-repeat left center;
            background-size: 16px 16px; /* Sesuaikan ukuran ikon */
            margin-bottom: 10px; /* Jarak antar item */
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
    });
</script>
@endsection

@section('content')
    <section id="content">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="object-cover w-full" style="height: 846px" src="images/bg1.jpg" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full" style="height: 846px" src="images/bg1.jpg" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full" style="height: 846px" src="images/bg1.jpg" alt="image" />
                </div>
            </div>
            <div class="swiper-button-next lg:mx-14 rounded-full bg-black bg-opacity-50 p-8" style="color: white !important;"></div>
            <div class="swiper-button-prev lg:mx-14 rounded-full bg-black bg-opacity-50 p-8" style="width:10px !important;color: white !important;"></div>
            <div class="swiper-pagination"></div>
        </div>

        {{-- visi misi --}}
        <div class="grid grid-cols-3 h-screen">
            <div class="col-span-1 sm:hidden lg:block">
                <img src="images/sabit.png" class=" h-screen"/>
            </div>
            <div class="lg:col-span-2 px-16 sm:py-12 sm:col-span-3 content-center">
                <h1 class="text-hijau1 poppins-semibold" style="font-size: 46px;">Visi <span class=" text-black">dan</span> Misi</h1>
                <p class=" sm:mt-2" style="font-size: 20px;">
                    <b>Visi  Pondok Pesantren Darulyatama wal masakin </b>
                    <br/>
                    “Terwujudnya manusia yang cerdas dan sejahtera dalam bingkai nilai-nilai ke-Islaman dan ke-Indonesiaan agar dapat menjadi rahmat bagi semesta alam (rahmatan lil alamin)”.
                </p>

                <p class=" lg:mt-28 sm:mt-12" style="font-size: 20px;">
                    <b>Misi Pondok Pesantren Darulyatama wal masakin yaitu:</b>
                    <ul class="custom-icon-list mt-5">
                        <li>Membina, mengembangkan dan memberdayakan potensi-potensi sosial dan keagamaan melalui pendidikan.</li>
                        <li>Membina dan memberi suri toladan kepada masyarakat melalui program-program pemberdayaan sosial, ekonomi, dan lingkungan.</li>
                        <li>Mendorong terciptanya keharmonisan sosial dan alamnya dengan bersandar pada nilai-nilai ke-Islaman dan ke-Indonesiaan.</li>
                    </ul>                    
                </p>
            </div>
        </div>

        <div class="w-full min-h-screen h-fit" style="background-image:url('images/bg.jpg');background-position: center; background-size: cover; background-repeat:no-repeat;">
            <div class="w-full min-h-screen h-fit lg:p-24 sm:p-8 bg-[#20222B] bg-opacity-95 poppins-semibold">
                <div class="">
                    <h3 class="text-hijau1" style="font-size: 20px;">PONPES DARULYATAMA WAL MASAKIN</h3>
                    <h1 class="text-white" style="font-size: 45px;">Jenjang Pendidikan</h1>
                </div>
                <div class="grid lg:gap-4 h-fit lg:grid-cols-4 sm:gap-2 sm:grid-cols-2 text-white " id="list-jenjang">
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Raudatul Athfal Darull Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p> Madrasah Ibtidaiyah Darul Aitam </p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Madrasah Tsanawiyah Darul Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p> Madrasah Aliyah Darul Aitam</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Program Tahfiz</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Madrasah Diniyah Islamiyah</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Program Pengajaran Dasar Al-Qur’an</p>
                        </div>
                    </div>
                    <div class="bg-black col-span-1 rounded-lg pb-5 mt-16" style="font-size: 18px;">
                        <div class=" h-64">
                            <img src="#"/>
                        </div>
                        <div class=" text-center" id="caption">
                            <p>Panti Asuhan</p>
                        </div>
                    </div>
                    <div class="bg-black lg:col-span-4 sm:col-span-2 rounded-lg py-20 text-center mt-16" style="font-size: 30px;">
                        <h1>Sekolah Tinggi Ilmu Tarbiyah Sibawaihi Mutawali</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- keuntungan --}}
        <div class="w-full min-h-screen lg:p-24 sm:p-10 poppins-semibold flex">
            <div class="grid lg:grid-cols-2 sm:grid-cols-1 content-center">
                <div class="lg:col-span-1">
                    <div class="" id="title">
                        <h3 class="text-hijau1" style="font-size: 20px;">Kenapa Harus Memilih Kami?</h3>
                        <h1 class="text-black" style="font-size: 45px;">Keuntungan Menempuh Pendidikan di Ponpes Darulyatama Wal Masakin</h1>
                    </div>
                    {{-- list --}}
                    <div class=" text-justify">
                        <div class="flex justify-center py-5">
                            <img src="images/ngaji.png" class="lg:hidden sm:block ">
                        </div>
                        <p class="" style="font-size: 20px;">
                            <ul class="custom-icon-list mt-5 poppins-regular">
                                <li style="margin-bottom: 50px;">Pondok Pesantren yang berlandaskan Aqidah Ahlussunnah wal Jamaah. mengikut para ulama salaf dan bermadzhab, serta mengutamakan keilmuan dan sanad, cinta kepada Ulama</li>
                                <li style="margin-bottom: 50px;">Membangun intelektual, emosial, keterampilan dan yang paling utama budi pekerti serta kekutatan spiritual.</li>
                                <li style="margin-bottom: 50px;">Mengajarkan santri untuk mandiri, memiliki jiwa sosial dan jiwa kepemimpinan.</li>
                            </ul>                    
                        </p>
                    </div>
                </div>
                <div class="lg:col-span-1 flex justify-center">
                        <img src="images/ngaji.png" class="sm:hidden lg:block">
                </div>
            </div>
        </div>
        {{-- rate komen --}}
        <div class="w-full min-h-screen relative h-fit pb-10">
            <div class=" absolute h-96 bg-hijau1 w-full -z-10">
            </div>
            <div class="text-center text-white w-full pt-[7%]">
                <p class="poppins-regular text-[25px]">Kata mereka tentang</p>
                <p class="poppins-semibold" style="font-size: 40px;">PONPES DARULYATAMA WAL MASAKIN</p>
            </div>
            <div class="w-full grid lg:grid-cols-3 lg:gap-3 text-black p-10 px-24">
                <x-card class="col-span-1 h-fit my-5" title="haha" name="Yogi" rule="CO-Genzee" src="images/logo.png">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur vero delectus quasi, aliquam voluptate explicabo repellat laborum eius non assumenda, quam, necessitatibus recusandae laboriosam excepturi dolor nulla ipsam consequuntur.</x-card>
                <x-card class="col-span-1 h-fit my-5" title="haha" name="Yogi" rule="CO-Genzee" src="images/logo.png">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur vero delectus quasi, aliquam voluptate explicabo repellat laborum eius non assumenda, quam, necessitatibus recusandae laboriosam excepturi dolor nulla ipsam consequuntur.</x-card>
                <x-card class="col-span-1 h-fit my-5" title="haha" name="Yogi" rule="CO-Genzee" src="images/logo.png">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consectetur vero delectus quasi, aliquam voluptate explicabo repellat laborum eius non assumenda, quam, necessitatibus recusandae laboriosam excepturi dolor nulla ipsam consequuntur.</x-card>
                {{-- <x-card class="col-span-1"></x-card> --}}
            </div>
        </div>
    </section>
@endsection