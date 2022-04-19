<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pengumuman Kelulusan') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-8">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr
                                class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <th scope="col" class="px-6 py-3">No Induk</th>
                                <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                                <th scope="col" class="px-6 py-3">Kelas</th>
                                <th scope="col" class="px-6 py-3">Nilai</th>
                                <th scope="col" class="px-6 py-3">SKL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($nilais as $nilai)
                                <tr
                                    class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                    <td class="px-6 py-4">{{ $nilai->no_induk }}</td>
                                    <td class="px-6 py-4">{{ $nilai->nama_lengkap }}
                                    </td>
                                    <td class="px-6 py-4">{{ $nilai->kelas }}</td>
                                    <td class="px-6 py-4">{{ $nilai->nilai }}</td>
                                    <td class="px-6 py-4"><a href="{{ $nilai->url_file }}" target="_blank"
                                            class="bg-orange-500 px-2
                                        py-1 rounded text-white hover:bg-orange-600
                                        hover:shadow-lg">Download</a>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Nilai belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="w-full max-w-lg mx-auto mb-8">
        @forelse ($nilais as $nilai)
            <div class="rounded-lg shadow-lg p-12 text-xs mt-8 mx-4 sm:mx-0 bg-white">
                <div>
                    <div class="flex flex-col">
                        <h1 class="text-gray-800 text-xl font-medium mb-2">{{ $nilai->nama_lengkap }}</h1>
                        <p class="text-gray-600 text-sm">No Induk: {{ $nilai->no_induk }}</p>
                        <p class="text-gray-600 text-sm">Kelas: {{ $nilai->kelas }}</p>
                        <p class="text-gray-600 text-sm">Jurusan: {{ $nilai->jurusan }}</p>
                    </div>
                    <hr class="my-4">
                    <div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-base">Nilai 1</span><span
                                class="text-base font-medium">{{ $nilai->nilai }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-base">Nilai 1</span><span
                                class="text-base font-medium">{{ $nilai->nilai }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-base">Nilai 1</span><span
                                class="text-base font-medium">{{ $nilai->nilai }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-base">Nilai 1</span><span
                                class="text-base font-medium">{{ $nilai->nilai }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-base">Nilai 1</span><span
                                class="text-base font-medium">{{ $nilai->nilai }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="font-medium text-base">Nilai 1</span><span
                                class="text-base font-medium">{{ $nilai->nilai }}</span>
                        </div>
                        <hr class="my-4">
                        @if( $nilai->jurusan  == 'MIPA')
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Kimia</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Fisika</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Biologi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Matematika Peminatan</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <hr class="my-4">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Sosiologi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>

                        @else
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Ekonomi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Geografi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Sosiologi</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Sejarah Peminatan</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>
                            <hr class="my-4">
                            <div class="flex justify-between items-center">
                                <span class="font-medium text-base">Bahasa Jepang</span><span
                                    class="text-base font-medium">{{ $nilai->nilai }}</span>
                            </div>

                        @endif
                       
                        <hr class="my-4">
                        <div class="flex flex-col">
                            <h1 class="text-gray-800 text-md font-medium mb-4">Status Kelulusan: <span class="bg-blue-200 py-1 px-4">LULUS</span></h1>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-md font-medium">Surat Keterangan Lulus</span><span
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
                Data Nilai belum Tersedia.
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
