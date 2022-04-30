<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengumuman Kelulusan') }}
        </h2>
    </x-slot>

    <div class="w-full max-w-lg mx-auto mb-8">
        @forelse ($nilais as $nilai)
            <div class="rounded-lg shadow-lg p-6 text-xs mt-8 mx-4 sm:mx-0 bg-white">
                <div>
                    <div class="flex flex-col">
                        <h1 class="text-gray-800 text-xl font-semibold mb-2 bg-orange-300 block p-1">
                            {{ $nilai->nama_lengkap }}</h1>
                        <p class="text-gray-600 text-sm">No Induk: {{ $nilai->no_induk }}</p>
                        <p class="text-gray-600 text-sm">Kelas: {{ $nilai->kelas }}</p>
                        <p class="text-gray-600 text-sm">Jurusan: {{ $nilai->jurusan }}</p>
                    </div>
                    <hr class="my-4">
                    <div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Pendidikan Agama & BP</span><span
                                class="text-base font-medium">{{ $nilai->nilai_pabp }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Pendidikan Kewarganegaraan</span><span
                                class="text-base font-medium">{{ $nilai->nilai_ppkn }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Bahasa Indonesia</span><span
                                class="text-base font-medium">{{ $nilai->nilai_bind }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Matematika</span><span
                                class="text-base font-medium">{{ $nilai->nilai_mtk }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Sejarah Indonesia</span><span
                                class="text-base font-medium">{{ $nilai->nilai_sej_ind }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Bahasa Inggris</span><span
                                class="text-base font-medium">{{ $nilai->nilai_bing }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Seni Budaya</span><span
                                class="text-base font-medium">{{ $nilai->nilai_seni }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">PJOK</span><span
                                class="text-base font-medium">{{ $nilai->nilai_pjok }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Prakarya & Kewirausahaan</span><span
                                class="text-base font-medium">{{ $nilai->nilai_pkwu }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-sm">Bahasa Sunda</span><span
                                class="text-base font-medium">{{ $nilai->nilai_sunda }}</span>
                        </div>
                        <hr class="my-4">
                        @if ($nilai->jurusan == 'MIPA')
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Matematika Peminatan</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_mtk_geo }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Biologi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_bio_sej }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Fisika</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_fis_sos }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Kimia</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_kim_eko }}</span>
                            </div>
                            <hr class="my-4">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Sosiologi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_sos_jpn }}</span>
                            </div>
                        @else
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Geografi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_mtk_geo }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Sejarah</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_bio_sej }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Sosiologi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_fis_sos }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Ekonomi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_kim_eko }}</span>
                            </div>
                            <hr class="my-4">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-sm">Bahasa Jepang</span><span
                                    class="text-base font-medium">{{ $nilai->nilai_sos_jpn }}</span>
                            </div>
                        @endif

                        <hr class="my-4">
                        <div class="flex flex-col">
                            <h1 class="text-gray-800 text-base font-medium mb-4">Status Kelulusan:
                                @if ($nilai->status == 'LULUS')
                                    <span class="text-green-500 bg-green-300 px-2 font-semibold">LULUS</span>
                                @else
                                    <span class="text-red-500 bg-red-200 px-2 font-semibold">DITANGGUHKAN</span>
                                @endif
                            </h1>
                        </div>
                        <div class="flex justify-between items-center bg-orange-200">
                            <span class="text-base font-medium px-2">Download SKL</span><span
                                class="text-md font-medium"><a href="{{ $nilai->url_file }}" target="_blank"
                                    class="bg-orange-500 px-4
                                py-2 rounded text-white hover:bg-orange-600
                                hover:shadow-lg">Download</a></span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="bg-red-400 px-4 py-8">
                Data Belum Tersedia.
            </div>
        @endforelse
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

    </style>

</x-app-layout>
