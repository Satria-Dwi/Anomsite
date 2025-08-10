<!-- filepath: c:\Users\user\Documents\Programming\anomsite\resources\views\mainmenu.blade.php -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@include('components.layouts.main.header')

<!-- Header End -->
<div class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="bg-white/90 rounded-2xl shadow-2xl flex flex-col md:flex-row items-center max-w-4xl w-full p-8 gap-8">
        <img src="/images/company.png" alt="Company"
            class="w-64 h-64 object-cover rounded-xl shadow-lg border-4 border-blue-300">
        <div class="flex-1">
            <h1 class="text-5xl font-extrabold text-blue-700 mb-4 drop-shadow-lg">Portofolio AnomSite</h1>
            <p class="text-lg text-gray-700 mb-6">
                Berikut adalah beberapa karya terbaik kami dalam pengembangan website, aplikasi, dan solusi digital
                untuk berbagai klien dari berbagai industri.
            </p>
        </div>
    </div>
</div>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators"> <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0"
            class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button"
            data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button"
            data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
    <div class="carousel-inner">
        <div class="carousel-item active"> <svg aria-hidden="true" class="bd-placeholder-img " height="100%"
                preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.
                    </p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item"> <svg aria-hidden="true" class="bd-placeholder-img " height="100%"
                preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item"> <svg aria-hidden="true" class="bd-placeholder-img " height="100%"
                preserveAspectRatio="xMidYMid slice" width="100%" xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div> <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
            class="visually-hidden">Previous</span> </button> <button class="carousel-control-next" type="button"
        data-bs-target="#myCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon"
            aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
</div>

@include('components.layouts.main.footer')
