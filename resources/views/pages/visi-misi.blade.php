@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Visi dan Misi</x-banner>
        <div class="px-10 lg:px-28 h-fit min-h-screen py-16 md:w-2/3 space-y-10">
            <div>
                <p class="poppins-bold text-[28px]">Visi</p>
                <p class="mt-3 poppins-regular text-lg">Visi Pondok Pesantren Darul Yatama Wal Masakin
                    “Terwujudnya manusia yang cerdas dan sejahtera dalam bingkai nilai-nilai ke-Islaman dan
                    ke-Indonesiaan
                    agar dapat menjadi rahmat bagi semesta alam (rahmatan lil alamin)”.</p>
            </div>

            <div>
                <p class="poppins-bold text-[28px]">Misi</p>
                <ul class="mt-3 poppins-regular text-lg list-disc space-y-3 ml-5">
                    <li>Membina, mengembangkan dan memberdayakan potensi-potensi sosial dan keagamaan melalui pendidikan.
                    </li>
                    <li>Membina dan memberi suri tauladan kepada masyarakat melalui program-program pemberdayaan sosial,
                        ekonomi, dan lingkungan.</li>
                    <li>Mendorong terciptanya keharmonisan sosial dan alamnya dengan bersandar pada nilai-nilai ke-Islaman
                        dan ke-Indonesiaan.</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
