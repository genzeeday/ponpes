@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-bisnis>Bisnis</x-banner-bisnis>
        <div id="badan-usaha" class="lg:px-28 px-5 h-fit min-h-screen py-16">
            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Dayama Sea Resources (DSR) Budidaya</p>
                <ul class="poppins-regular text-[20px] list-disc list-inside ml-2">
                    <li>Usaha berbasis budidaya perikanan dikembangkan untuk memaksimalkan lahan milik yayasan</li>
                    <li>Berbagai usaha berbasis budidaya ikan sedang dikembangkan seperti budidaya ikan bandeng, ikan nila, ikan kerapu merah, dll</li>
                </ul>
            </div>

            {{-- list --}}
            <x-banner-list src='{{ asset("images/bisnis/ikan.png") }}' style="height: 500px;" class="h-92 lg:mb-10 sm:mb-5 text-4xl">Budidaya Ikan Bandeng</x-banner-list>
        </div>
    </section>
@endsection