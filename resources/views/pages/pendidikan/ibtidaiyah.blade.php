@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Jenjang Pendidikan</x-banner>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Madrasah Ibtidaiyah Darul Aitam</p>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/card/2.webp") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">Madrasah Ibtidaiyah
                <br/>Darul Aitam</x-banner-list>
        </div>
    </section>
@endsection