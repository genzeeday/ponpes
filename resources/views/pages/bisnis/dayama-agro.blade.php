@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Dayama Agro</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Usaha berjalan dengan sistem kemitraan sewa dan bagi hasil dan sudah dijalankan sejak awal mula ponpes berdiri (1974)</li>
                    <li>Usaha dikembangkan untuk membantu jama'ah dan masyarakat sekitar ponpes mendapat penghasilan dari budidaya</li>
                    <li>Budidaya yang dikembangkan diantaranya budidaya padi, semangka, tembakau, palawija, dsb</li>
                    <li>Luas lahan yang dikelola saat ini seluas 41,95 Hektar, dengan pendapatan dari bagi hasil mencapai 132 jt per tahun, serta dengan nilai aset ditaksir mencapai lebih dari 120 milyar</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/kebun.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">Lahan Pertanian & Perkebunan</x-banner-list>
        </div>
    </section>
@endsection