@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">PT. Migas Hidayatullah Jerowaru</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Legalitas PT</li>
                    <li>Berdiri sejak tahun 2005</li>
                    <li>Nilai omset usaha melebih 2 milyar se tahun, dengan nilai aset ditaksir lebih dari 7 milyar rupiah</li>
                    <li>Pekerja merupakan jama'ah, alumni, dan masyarakat sekitar</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/migas.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">PT. Migas Hidayatullah Jerowaru (BBM, BBG, OLI)</x-banner-list>
        </div>
    </section>
@endsection