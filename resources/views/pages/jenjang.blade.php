@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Jenjang Pendidikan</x-banner>
        <div id="badan-usaha" class="lg:px-28 sm:px-10  h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Jenjang Pendidikan</p>
            </div>
            {{-- list --}}
            <x-banner-list src='images/card/1.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Raudatul Athfal
                <br/>Darull Aitam</x-banner-list>
            <x-banner-list src='images/card/2.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]"> Madrasah Ibtidaiyah
                <br/>Darul Aitam</x-banner-list>
            <x-banner-list src='images/card/3.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Madrasah Tsanawiyah
                <br/>Darul Aitam</x-banner-list>
            <x-banner-list src='images/card/4.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]"> Madrasah Aliyah
                <br/>Darul Aitam</x-banner-list>
            <x-banner-list src='images/card/5.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Program
                <br/>Tahfiz</x-banner-list>
            <x-banner-list src='images/card/6.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Madrasah Diniyah <br/> Islamiyah</x-banner-list>
            <x-banner-list src='images/card/7.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Program Pengajaran
                <br/>Dasar Al-Qur’an</x-banner-list>
            <x-banner-list src='images/card/8.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Panti
                <br/>Asuhan</x-banner-list>
            <x-banner-list src='images/card/9.png' class="sm:h-[290px] lg:h-[390px] lg:mb-10  sm:mb-5 lg:text-[42px] sm:text-[22px]">Sekolah Tinggi Ilmu Tarbiyah<br/> Sibawaihi Mutawali</x-banner-list>
        </div>
    </section>
@endsection