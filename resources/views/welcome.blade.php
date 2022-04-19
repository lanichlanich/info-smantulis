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
                    <a href="{{ url('/nilai') }}" class="px-8 block bg-blue-300 p-5 text-center rounded-full font-bold hover:bg-blue-400 shadow-lg">Kembali ke Dashboard</a>
                @else
                    <div class="block">
                        <h1 class="m-5 items-center font-bold">Silahkan Login Untuk Mengakses Surat Kelulusan</h1>
                        <a href="{{ route('login') }}"
                            class="bg-blue-300 p-5 items-center block text-center rounded-full font-bold hover:bg-blue-400 shadow-lg">Log
                            in</a>
                    </div>
                    @if (Route::has('register'))
                        {{-- <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
