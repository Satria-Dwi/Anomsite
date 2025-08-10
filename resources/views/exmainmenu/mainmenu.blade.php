<!-- filepath: c:\Users\user\Documents\Programming\anomsite\resources\views\mainmenu.blade.php -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@include('components.layouts.main.header')


<!-- Header End -->
<div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="bg-white/90 rounded-2xl shadow-2xl flex flex-col md:flex-row items-center max-w-4xl w-full p-8 gap-8">
        <img src="/images/company.png" alt="Company"
            class="w-64 h-64 object-cover rounded-xl shadow-lg border-4 border-blue-300">
        <div class="flex-1">
            <h1 class="text-5xl font-extrabold text-blue-700 mb-4 drop-shadow-lg">AnomSite</h1>
            <p class="text-lg text-gray-700 mb-6">
                AnomSite adalah perusahaan teknologi yang berfokus pada solusi inovatif untuk bisnis digital. Kami
                menyediakan layanan pengembangan website, aplikasi mobile, dan konsultasi IT dengan tim profesional
                berpengalaman.
            </p>
            <ul class="mb-6 space-y-2">
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7"></path>
                    </svg>
                    Website & App Development
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M9 17v-2a4 4 0 1 1 8 0v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    IT Consulting
                </li>
                <li class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M12 20h9"></path>
                        <path d="M12 4v16"></path>
                        <path d="M4 4v16"></path>
                    </svg>
                    Digital Solutions
                </li>
            </ul>
            <a href="/contact"
                class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-bold shadow hover:bg-blue-800 transition">Protofolio</a>
        </div>
    </div>
</div>
@include('components.layouts.main.footer')
