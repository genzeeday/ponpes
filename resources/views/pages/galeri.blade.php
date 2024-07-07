@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Galeri</x-banner>
        <div id="badan-usaha" class="lg:px-28 sm:px-10  h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Galeri</p>
            </div>
            {{-- list --}}
            <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-7">
                <div class="col-span-1 ">
                    <img src="images/galeri/1.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/2.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/3.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/4.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/5.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/6.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/7.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
                <div class="col-span-1 ">
                    <img src="images/galeri/8.webp" class="lazyload parent-fit rounded-lg"/>
                </div>
            </div>
        </div>
    </section>
@endsection