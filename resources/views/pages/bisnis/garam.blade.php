@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Dayama Sea Resources (DSR) Garam</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Usaha tambak garam meruapakan salah satu bidang usaha pertama Ponpes yang bermitra dengan masyarakat yang mayoritas berada di wilayah pesisir</li>
                    <li>Berjalam sejak 1975</li>
                    <li>Saat ini terdapat lebih dari 60 petak tambak garang yang menghasilkan lebih 35 ton garam per tahun</li>
                    <li>Nilai aset pada usaha ini mencapai lebih dari 2,6 Milyar</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/garam.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">Tambak Garam</x-banner-list>
        </div>
    </section>
@endsection