@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Badan Usaha</x-banner>
        <div id="badan-usaha" class="px-28 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Badan Usaha</p>
                <p class="poppins-regular text-[20px]">Ponpes Darulyatama Wal Masakin memiliki 4 bidang usaha yaitu diantaranya bidang energi, bidang perdagangan, bidang Pertanian, bidang perkebunan, dan kehutanan. Diantara bidang tersebut terdapat 7 unit usaha</p>
            </div>
            {{-- list --}}
            <x-banner-list src='images/card/pertamina.png' class="mb-10">PT. Migas Hidayatullah Jerowaru <br/>(BBM, BBG, OLI)</x-banner-list>
            <x-banner-list src='images/card/udang.png' class="mb-10">Budidaya Udang Vaname</x-banner-list>
            <x-banner-list src='images/card/perternakan.png' class="mb-10">Peternakan Sapi</x-banner-list>
            <x-banner-list src='images/card/ikan.png' class="mb-10">Budidaya Ikan Bandeng</x-banner-list>
            <x-banner-list src='images/card/garam.png' class="mb-10">Tambak Garam</x-banner-list>
            <x-banner-list src='images/card/kebun.png' class="mb-10">Lahan Pertanian & Perkebunan</x-banner-list>
            <x-banner-list src='images/card/toko.png' class="mb-10">UD. Jumhurian (Toko Grosir)</x-banner-list>
        </div>
    </section>
@endsection