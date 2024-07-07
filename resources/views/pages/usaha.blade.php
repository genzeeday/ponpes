@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Badan Usaha</x-banner>
        <div id="badan-usaha" class="lg:px-28 sm:px-10  h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Badan Usaha</p>
                <p class="poppins-regular text-[20px]">Ponpes Darulyatama Wal Masakin memiliki 4 bidang usaha yaitu diantaranya bidang energi, bidang perdagangan, bidang Pertanian, bidang perkebunan, dan kehutanan. Diantara bidang tersebut terdapat 7 unit usaha</p>
            </div>
            {{-- list --}}
            <x-banner-list src='images/card/pertamina.webp' class="xs:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">PT. Migas Hidayatullah Jerowaru <br/>(BBM, BBG, OLI)</x-banner-list>
            <x-banner-list src='images/card/udang.webp' class="sm:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">Budidaya Udang Vaname</x-banner-list>
            <x-banner-list src='images/card/perternakan.webp' class="sm:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">Peternakan Sapi</x-banner-list>
            <x-banner-list src='images/card/ikan.webp' class="sm:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">Budidaya Ikan Bandeng</x-banner-list>
            <x-banner-list src='images/card/garam.webp' class="sm:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">Tambak Garam</x-banner-list>
            <x-banner-list src='images/card/kebun.webp' class="sm:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">Lahan Pertanian & Perkebunan</x-banner-list>
            <x-banner-list src='images/card/toko.webp' class="sm:h-[206px] lg:h-[306px] lg:mb-10  sm:mb-5 lg:text-[50px] sm:text-[30px]">UD. Jumhurian (Toko Grosir)</x-banner-list>
        </div>
    </section>
@endsection