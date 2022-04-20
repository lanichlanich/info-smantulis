<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased">
    <div class="h-screen w-screen items-center justify-center flex">

        @if (Route::has('login'))
            <div class="flex h-screen w-screen items-center justify-center">
                @auth
                    <div class="block"></div>
                    <a href="{{ url('/nilai') }}"
                        class="px-8 block bg-blue-300 p-5 text-center rounded-full font-bold hover:bg-blue-400 shadow-lg">Kembali
                        ke Dashboard</a>
                @else
                    <div class="block mr-4">
                        <h1 class="m-5 items-center font-bold">Silahkan Login Untuk Mengakses Surat Kelulusan</h1>
                        <a href="{{ route('login') }}"
                            class="bg-blue-300 p-5 items-center block text-center rounded-full font-bold hover:bg-blue-400 shadow-lg mr-4">Log
                            in</a>
                    
                    @if (Route::has('register'))
                            <div class="m-12 p-12"></div>
                            <h1 class="m-5 items-center font-bold">Silahkan Buat Akun jika belum buat</h1>
                            <a href="{{ route('register') }}"
                                class="bg-blue-300 p-5 items-center block text-center rounded-full font-bold hover:bg-blue-400 shadow-lg">Buat
                                Akun</a>
                            </div>
                    @endif
                </div>
            @endauth
    </div>
    @endif
    </div>
</body>

</html>
