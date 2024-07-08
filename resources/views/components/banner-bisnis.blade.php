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
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection

<div class="swiper mySwiper relative">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/garam.png') }}" alt="image" />
        </div>
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/grosir.png') }}" alt="image" />
        </div>
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/ikan.png') }}" alt="image" />
        </div>
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/kebun.png') }}" alt="image" />
        </div>
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/migas.png') }}" alt="image" />
        </div>
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/sapi.png') }}" alt="image" />
        </div>
        <div class="swiper-slide">
            <img class="object-cover w-full" style="height: 400px" src="{{ asset('/images/bisnis/tambak.png') }}" alt="image" />
        </div>
    </div>
    <div class="swiper-pagination"></div>

    <div class="absolute top-0 z-50 w-full flex flex-col-reverse md:flex-row justify-center md:justify-between items-center px-20" style="height: 400px">
        <div class="title content-center text-white poppins-bold text-5xl">
            <p class="" style="text-shadow: 2px 2px #8b8b8b;">{{$slot}}</p>
        </div>
        <div class="logo flex justify-end">
            <div class="content-center">
                <img src="{{asset('images/logo_transparan.png')}}" width="132" class="rounded-xl" />
            </div>
        </div>
    </div>
</div>