@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner-static-image>Kontak</x-banner-static-image>
        <div id="badan-usaha" class="lg:px-28 sm:px-10  h-fit min-h-screen py-16">
            {{-- list --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 px-5">
                <a href="https://wa.me/62817382651" target="_blank" class="rounded-xl py-10 px-7 bg-white shadow-lg col-span-1">
                    <div class="">
                        <img src="images/wa.webp"/>
                    </div>
                    <div class="poppins-semibold text-[18px] mt-3">0817382651</div>
                    <div class="poppins-medium text-[18px] mt-3 text-[#656565]">Whatsapp</div>
                </a>
            
                <div class="rounded-xl py-10 px-7 bg-white shadow-lg col-span-1">
                    <div class="">
                        <img src="images/mail.webp"/>
                    </div>
                    <div class="poppins-semibold text-[18px] mt-3">yayasandarulyatamawalmasakin<br>@gmail.com</div>
                    <div class="poppins-medium text-[18px] mt-3 text-[#656565]">Email</div>
                </div>
            </div>

            <div class="px-5">
                <div class="mt-6 rounded-xl py-10 bg-white shadow-lg col-span-1 px-5">
                    <div class="flex">
                        <div>
                            <img src="images/gps.webp" class="w-12"/>
                        </div>
                        <div class="ms-2 poppins-semibold text-[18px]" >
                            Jl. TGH. Muh. Mutawalli, Dusun Jerowaru Timur, Desa Jerowaru, Kecamatan Jerowaru, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat.
                            <div class="poppins-medium text-[18px] mt-3 text-[#656565]">Alamat</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-10 px-5" id="information">
                <p class="poppins-bold text-[28px]">Lokasi Yayasan</p>
            </div>
            <div class="pb-10" id="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1971.4929214222686!2d116.4807714!3d-8.7873994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc536591ee1e35%3A0xb05e9c7bfa491267!2sYayasan%20Darul%20Aitam%20%2F%20Darul%20Yatama%20Wal%20Masakin!5e0!3m2!1sid!2sid!4v1720351984263!5m2!1sid!2sid" class="w-full" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection