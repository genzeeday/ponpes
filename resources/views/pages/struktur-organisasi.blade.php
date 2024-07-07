@extends('layouts.index')

@section('content')
    <section id="content">
        <x-banner>Struktur Organisasi</x-banner>
        <div class="px-10 lg:px-28 h-fit min-h-screen py-16 space-y-10">
            <div>
                <p class="poppins-bold text-[28px]">Struktur Organisasi</p>
            </div>

            <div class="space-y-8 w-full md:w-2/3">
                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Pembina:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ol class="list-decimal list-inside">
                            <li>H Badarul Islam</li>
                            <li>H Saiful Islam</li>
                            <li>Hasanudin</li>
                        </ol>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Pengawas:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ol class="list-decimal list-inside">
                            <li>Dr. Sirajun Nasihin. MA</li>
                            <li>Nusram, S.Pd</li>
                            <li>H. Moh. Tahir Thoyib</li>
                        </ol>
                    </div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Pengurus:
                        </p>
                    </div>
                    <div>
                        <ul class="list-inside font-semibold">
                            <li>Ketua:</li>
                            <li>Wakil Ketua:</li>
                            <li>Sekretaris:</li>
                            <li>Wakil Sekretaris:</li>
                            <li>Bendahara:</li>
                            <li>Wakil Bendahara:</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-inside">
                            <li>Multazam Marjak, S.IP</li>
                            <li>Putrawan Habibi, MP</li>
                            <li>Tajali Yahya, S.IP</li>
                            <li>Tanjung Galih Yahya</li>
                            <li>Ahmad Turmizi, S.Pd</li>
                            <li>H. Fathullah, Sh</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Bidang Pendidikan:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ul>
                            <li>Mujitabe, S.Pd</li>
                            <li>Ahmad Suhamkan, SP</li>
                            <li>Lalu Kabul Efendi, S.Pd</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Bidang Keasramaan:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ul>
                            <li>Edi Suharman, ST</li>
                            <li>Suandi Yusuf, S.Pd</li>
                            <li>Fathul Jannah, S.Pd</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Bidang Panti Asuhan:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ul>
                            <li>Makmun, S.Pd</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Bidang Pengembangan Ekonomi:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ul>
                            <li>Hendra Karma, S.Pd</li>
                            <li>Lalu Mardatia, S.H</li>
                            <li>Ali Imran, SE</li>
                            <li>Paesal</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Bidang Inventaris Aset:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ul>
                            <li>Jumarah, M.Pd</li>
                            <li>Ahmad Turmuzi</li>
                            <li>Sanusi Pandi</li>
                            <li>Dimas Jayan Tara</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-1 md:gap-5 poppins-regular">
                    <div class="col-span-3 md:col-span-1">
                        <p class="align-top font-bold">
                            Bidang Humas dan Komunikasi:
                        </p>
                    </div>
                    <div class="col-span-3 md:col-span-1">
                        <ul>
                            <li>Agus Sugandi, S.Pd</li>
                            <li>Assazali Sibawaihi, M.H.I</li>
                            <li>Abdurrahman</li>
                            <li>Mamiq EL</li>
                        </ul>
                    </div>
                </div>

                {{-- <table class="w-2/3 border border-black poppins-regular">
                    <tr>
                        <td class="border border-black align-top font-semibold">
                            Pembina:
                        </td>
                        <td class="border border-black">
                            <ol class="list-decimal list-inside">
                                <li>H Badarul Islam</li>
                                <li>H Saiful Islam</li>
                                <li>Hasanudin</li>
                            </ol>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="border border-black align-top font-semibold">
                            Pengawas:
                        </td>
                        <td class="border border-black">
                            <ol class="list-decimal list-inside">
                                <li>Dr. Sirajun Nasihin. MA</li>
                                <li>Nusram, S.Pd</li>
                                <li>H. Moh. Tahir Thoyib</li>
                            </ol>
                        </td>
                        <td></td>
                    </tr>
                </table> --}}
            </div>
        </div>
    </section>
@endsection
