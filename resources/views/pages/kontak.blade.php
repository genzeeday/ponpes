@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Kontak</x-banner>
        <div id="badan-usaha" class="lg:px-28 sm:px-10  h-fit min-h-screen py-16">
            {{-- list --}}
            <div class="grid lg:grid-cols-3 sm:grid-cols-3 gap-7">
                    <div class="rounded-xl py-10 px-7 bg-white shadow-lg w-fit col-span-1 w-full">
                        <div class="">
                            <img src="images/wa.png"/>
                        </div>
                        <div class="poppins-semibold text-[18px] mt-3" >08XXXXXXXXXX</div>
                        <div class="poppins-medium text-[18px] mt-3 text-[#656565]">Whatsapp</div>
                    </div>
                
                    <div class="rounded-xl py-10 px-7 bg-white shadow-lg w-fit col-span-1 w-full">
                        <div class="">
                            <img src="images/mail.png"/>
                        </div>
                        <div class="poppins-semibold text-[18px] mt-3" >contohemail@gmail.com</div>
                        <div class="poppins-medium text-[18px] mt-3 text-[#656565]">Email</div>
                    </div>
                
            
                    <div class="rounded-xl py-10 px-7 bg-white shadow-lg w-fit col-span-1 w-full">
                        <div class="flex">
                            <div>
                                <img src="images/gps.png" class="w-16"/>
                            </div>
                            <div class="ms-2 poppins-semibold text-[18px]" >
                                Jl. TGH. Muh. Mutawalli, Dusun Jerowaru Timur, Desa Jerowaru, Kecamatan Jerowaru, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat.
                                <div class="poppins-medium text-[18px] mt-3 text-[#656565]">Email</div>
                            </div>
                        </div>
                    </div>

            </div>

            <div class="py-10" id="information">
                <p class="poppins-bold text-[28px]">Jenjang Pendidikan</p>
            </div>
            <div class="pb-10" id="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.3148045206522!2d116.61437285183153!3d-8.571055499642368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc478dff8854b3%3A0xba70c3fc99285d2!2sDarul%20Aitam%20dan%20Rumah%20Tahfidz!5e0!3m2!1sid!2sid!4v1720293943351!5m2!1sid!2sid" class="w-full" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection