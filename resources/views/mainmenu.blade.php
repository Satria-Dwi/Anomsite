@extends('layouts.mainmenu.main')

@section('container')
    <!-- Hero Section -->
    <section class="text-center py-28 bg-gray-100" style="background-image: url('/images/banner.png'); background-size: cover;">
        <div class="max-w-2xl mx-auto px-4 animate-fade-in-up">
            <img src="images/company.png" alt="" class="mx-auto profile-company shadow" style="width: 150px; border-radius:50%">
            <h2 class="text-4xl md:text-5xl font-extrabold mb-4 text-white">Welcome to <span
                    class="text-indigo-600">AnomSite</span></h2>
            <p class="text-lg text-white mb-6">We provide digital solutions that scale and grow your business.</p>
            <a href="/portofolio"
                class="bg-indigo-600 text-white px-6 py-3 rounded shadow hover:bg-indigo-700 transition">Portofolio</a>
        </div>
    </section>


    <!-- About Us -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">About Us</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                <strong>AnomSite</strong> is a creative digital agency helping businesses unlock their potential with modern
                technology.
                From concept to launch, we partner with you to craft websites, mobile apps, and cloud solutions that drive
                results.<br><br>
                Our team is passionate about delivering high-quality, user-focused experiences with a strong emphasis on
                performance,
                scalability, and design excellence. Whether you're a startup or a large enterprise, AnomSite is here to help
                you grow
                and innovate in the digital world.
            </p>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="text-indigo-600 text-4xl mb-4">🌐</div>
                    <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                    <p class="text-gray-600">Custom websites and web apps built with modern technologies to boost your
                        online presence.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="text-indigo-600 text-4xl mb-4">📱</div>
                    <h3 class="text-xl font-semibold mb-2">Mobile Apps</h3>
                    <p class="text-gray-600">Beautiful iOS & Android apps designed for performance, usability, and growth.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                    <div class="text-indigo-600 text-4xl mb-4">☁️</div>
                    <h3 class="text-xl font-semibold mb-2">Cloud Solutions</h3>
                    <p class="text-gray-600">Deploy, scale, and secure your applications with our cloud expertise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-10">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <p class="text-gray-700 italic mb-4">"AnomSite transformed our online presence. The website they built
                        exceeded our expectations!"</p>
                    <h4 class="text-gray-900 font-semibold">— Jane Doe, CEO StartupX</h4>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <p class="text-gray-700 italic mb-4">"Professional, reliable, and creative. Highly recommended for any
                        business looking to scale digitally."</p>
                    <h4 class="text-gray-900 font-semibold">— John Smith, Founder of InnovateHub</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
