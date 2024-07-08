@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Dayama Farm</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Usaha berjalan dengan sistem kemitraan dengan jam'ah (Dsn. Tabuan, Dsn. Paek, Dsn Semoto)</li>
                    <li>Kapasitas ternak sapi di tiga lokasi kandang tersebut lebih dari 150 Ekor</li>
                    <li>Usaha sudah berjalan sejak 2009, dan nilai omset melebihi 200jt per tahun</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/sapi.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">Peternakan Sapi</x-banner-list>
        </div>
    </section>
@endsection