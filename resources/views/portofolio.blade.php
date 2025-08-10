@extends('layouts.mainmenu.main')

@section('container')
    <div class="contents flex-col lg:flex-row gap-6 px-4">
        <div class="profile w-full lg:w-1/2 space-y-6">
            <section id="intro" class="intro bg-gray-100 p-6 rounded-lg">
                <div class="intro-profile flex-col items-center text-center space-y-4">
                    <img src="images/myprofile.png" alt="" class="mx-auto profile-company shadow"
                        style="width: 150px; border-radius:50%">
                    <div class="intro-name">
                        <h2 class="text-4xl md:text-4xl font-extrabold mb-4 text-gray-900">Hello, <span
                                class="text-indigo-600">Saya Satria</span></h2>
                        <p class="text-lg text-gray-700">Junior Programmer & IT Support</p>
                        {{-- <a href="#project" class="btn">See My Work</a> --}}
                    </div>
                </div>
            </section>
            <section id="info" class="info bg-white p-6 rounded-lg shadow">
                <h2 class="text-3xl font-semibold mb-2">PROFIL</h2>
                <p class="text-gray-700">Saya adalah junior IT yang berpengalaman selama 5 tahun di bidang Sistem
                    Informasi. Saya memiliki latar belakang pengalaman dalam pemeliharaan
                    jaringan komputer, software, hardware, dan pemrograman dasar. Saya pribadi
                    yang jujur, aktif, komunikatif, dinamis, disiplin, bertanggung jawab, dan mampu
                    bekerja sama dalam tim maupun secara individu.
                </p>
            </section>
            <section id="info" class="text-center bg-white p-6 rounded-lg shadow mb-4">
                <h2 class="text-3xl font-semibold mb-5">KEAHLIAN</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    {{-- <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                            <div class="text-indigo-600 text-4xl mb-4">🌐</div>
                            <h3 class="text-xl font-semibold mb-2">HTML</h3>
                        </div> --}}
                    <div class="card relative w-30 h-20 text-white bg-cover"
                        style="background-image: url('/images/html.jpg'); background-size: cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">HTML
                        </h5>
                    </div>
                    <div class="card relative w-30 h-20 text-white bg-cover"
                        style="background-image: url('/images/css.png'); background-size: cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">CSS
                        </h5>
                    </div>
                    <div class="card relative w-30 h-20 text-white bg-cover"
                        style="background-image: url('/images/php.png'); background-size: cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">PHP
                        </h5>
                    </div>
                    <div class="card relative w-30 h-20 text-white bg-cover"
                        style="background-image: url('/images/mysql.png'); background-size: cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">MYSQL
                        </h5>
                    </div>
                    <div class="card relative w-30 h-20 text-white bg-cover"
                        style="background-image: url('/images/javascript.png'); background-size: cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">
                            JAVASCRIPT</h5>
                    </div>
                    <div class="card relative w-30 h-20 text-white bg-cover"
                        style="background-image: url('/images/laravel.jpg'); background-size: cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">
                            LARAVEL</h5>
                    </div>
                    {{-- <div class="card relative w-25 h-48 text-white" style="background-image: url('/images/css.png'); background-size:cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">CSS</h5>
                    </div>
                    <div class="card relative w-25 h-25 text-white" style="background-image: url('/images/html.jpg'); background-size:cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">PHP</h5>
                    </div>
                    <div class="card relative w-25 h-25 text-white" style="background-image: url('/images/html.jpg'); background-size:cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">MYSQL</h5>
                    </div>
                    <div class="card relative w-25 h-25 text-white" style="background-image: url('/images/html.jpg'); background-size:cover;">
                        <h5 class="absolute text-sm top-0 left-0 py-1 px-2" style="background-color: rgba(0,0,0,0.6)">LARAVEL</h5>
                    </div> --}}
                    {{-- <div class="card">CSS</div>
                        <div class="card">PHP</div>
                        <div class="card">LARAVEL</div>
                        <div class="card">MYSQL</div> --}}
                </div>
            </section>
        </div>
        <div class="project w-full lg:w-1/2">
            <section id="project" class="bg-gray-100 p-6 rounded-lg shadow">
                <h2 class="text-3xl font-semibold mb-4">My Projects</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($marketplaces as $marketplace)
                        <div class="bg-white rounded-lg shadow p-4">
                            <img src="{{ $marketplace->image }}" alt="" class="w-full h-48 object-cover rounded">
                            <h3 class="text-lg font-bold mt-3">{{ $marketplace->product }}</h3>
                            <div class="flex gap-4">
                                <p class="text-gray-500 text-sm">$ {{ number_format($marketplace->price, 0, ',', '.') }}</p>
                                <p class="text-yellow-500 text-sm">⭐ {{ $marketplace->rate }}</p>
                            </div>
                            <p class="text-gray-600 mt-2">{{ Str::limit($marketplace->excerpt, 80) }}</p>
                            <a href="#"
                                class="inline-block mt-3 px-4 py-2 bg-purple-600 text-white text-sm rounded hover:bg-purple-700">
                                Lihat Detail
                            </a>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection
