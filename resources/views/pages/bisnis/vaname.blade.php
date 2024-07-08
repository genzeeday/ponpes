@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Dayama Sea Resources (DSR) Vaname</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Usaha vaname salah satu bidang inovasi usaha berbasis kelautan dan perikanan yang dikembangkan oleh pengurus Ponpes</li>
                    <li>Mendapat pendampingan dari Kantor Perwakilan Bank Indonesia Provinsi NTB</li>
                    <li>Menerapkan metode SOP Traditional Plus yang dikembangkan oleh pakar udang vaname dari Fakultas Perikanan dan Kelautan IPB</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/tambak.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">Budidaya Udang Vaname</x-banner-list>
        </div>
    </section>
@endsection