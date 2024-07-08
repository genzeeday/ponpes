@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">UD. Jumhuriah (Toko Grosir)</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Kepemilikan saham oleh yayasan</li>
                    <li>Salah satu toko grosir terbesar di wilayah Jerowaru</li>
                    <li>Toko yang berdiri di tanah seluas 0,25 Hektar ini menjadi salah satu sumber penghasilan ponpes khususnya untuk pendanaan program Panti Asuhan</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/grosir.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">UD. Jumhuriah (Toko Grosir)</x-banner-list>
        </div>
    </section>
@endsection