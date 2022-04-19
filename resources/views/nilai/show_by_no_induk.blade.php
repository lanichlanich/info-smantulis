{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('nilai.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No Induk</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Softfile</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($nilais as $nilai)
                                    <tr>
                                        <td>{{ $nilai->no_induk }}</td>
                                        <td>{{ $nilai->nama_lengkap }}</td>
                                        <td>{{ $nilai->kelas }}</td>
                                        <td>{{ $nilai->nilai }}</td>
                                        <td>{{ $nilai->url_file }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('nilai.destroy', $nilai->id) }}" method="nilai">
                                                <a href="{{ route('nilai.edit', $nilai->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Nilai belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $nilais->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>

</body>

</html> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('nilai.create') }}"
                        class="bg-green-500 px-4 py-2 rounded-full mx-3 text-white hover:bg-green-600 hover:shadow-lg">TAMBAH
                        DATA</a>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-8">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr
                                class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                                <th scope="col" class="px-6 py-3">No Induk</th>
                                <th scope="col" class="px-6 py-3">Nama Lengkap</th>
                                <th scope="col" class="px-6 py-3">Kelas</th>
                                <th scope="col" class="px-6 py-3">Nilai</th>
                                <th scope="col" class="px-6 py-3">Softfile</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
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
                                    <td class="px-6 py-4">{{ $nilai->url_file }}</td>
                                    <td class="px-6 py-4">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('nilai.destroy', $nilai->id) }}" method="nilai">
                                            <a href="{{ route('nilai.edit', $nilai->id) }}"
                                                class="bg-orange-500 px-2
                                                py-1 rounded text-white hover:bg-orange-600
                                                hover:shadow-lg">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 px-2 py-1 rounded text-white hover:bg-red-600 hover:shadow-lg">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Nilai belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $nilais->links() }}
                </div>
            </div>
        </div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</x-app-layout>
