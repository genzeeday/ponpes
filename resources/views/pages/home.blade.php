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
                    <img class="object-cover w-full" style="height: 646px" src="images/bg1.jpg" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full" style="height: 646px" src="images/bg1.jpg" alt="image" />
                </div>
                <div class="swiper-slide">
                    <img class="object-cover w-full" style="height: 646px" src="images/bg1.jpg" alt="image" />
                </div>
            </div>
            <div class="swiper-button-next lg:mx-14 rounded-full bg-black bg-opacity-50 p-8" style="color: white !important;"></div>
            <div class="swiper-button-prev lg:mx-14 rounded-full bg-black bg-opacity-50 p-8" style="width:10px !important;color: white !important;"></div>
            <div class="swiper-pagination"></div>
        </div>

        {{-- visi misi --}}
        <div class="grid grid-cols-3">
            <div class="col-span-1 sm:hidden lg:block">
                <img src="images/sabit.png"/>
            </div>
            <div class="lg:col-span-2 px-20 sm:py-12 sm:col-span-3 content-center">
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
    </section>
@endsection