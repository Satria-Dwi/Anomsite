<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- mengambil sebuah title dari route, sesuai halaman yang aktif / tampil --}}
    <title>Anom | {{ $title }} Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/mainmenu.css">
    <link rel="stylesheet" href="/css/portofolio.css">
    <link rel="stylesheet" href="/css/marketplace.css">
    <link rel="stylesheet" href="/css/signin.css">
    @vite('resources/css/app.css')
    {{-- <style>
        /* Custom Scrollbar (opsional) */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: #4f46e5;
            border-radius: 4px;
        }
    </style> --}}
</head>

{{-- <body class="bg-white text-gray-800 font-sans"> --}}
<body class="bg-white text-gray-800 font-sans">
    {{-- mengambil navbar, untuk di pakai pada tanmpilan utama / umum --}}
    @include('partials.mainmenu.header')

    {{-- mengambil sebual isi child view dengan nama container --}}
    <div>
        @yield('container')
    </div>

    @include('partials.mainmenu.footer')
</body>

</html>
