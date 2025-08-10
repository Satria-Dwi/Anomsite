<header class="w-full px-8 py-4 flex justify-between items-center bg-white/80 shadow-md fixed top-0 left-0 z-50">
    <div class="flex items-center gap-4">
        <a href="/"
            class=" px-5 py-2 rounded-lg font-semibold shadow flex items-center gap-2 transition
                {{ request()->is('/') ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white animate-bounce' : 'bg-gradient-to-r from-purple-500 to-pink-500 text-white hover:bg-blue-500' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings"
                viewBox="0 0 16 16">
                <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022M6 8.694 1 10.36V15h5zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5z" />
                <path d="M2 11h1v1H2zm2 0h1v1H4zm-2 2h1v1H2zm2 0h1v1H4zm4-4h1v1H8zm2 0h1v1h-1zm-2 2h1v1H8zm2 0h1v1h-1zm2-2h1v1h-1zm0 2h1v1h-1zM8 7h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zM8 5h1v1H8zm2 0h1v1h-1zm2 0h1v1h-1zm0-2h1v1h-1z" />
            </svg>
            Company Profile
        </a>
        <a href="/marketplace"
            class="px-5 py-2 rounded-lg font-semibold shadow flex items-center gap-2 transition
                {{ request()->is('marketplace') ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white animate-bounce' : 'bg-gradient-to-r from-purple-500 to-pink-500 text-white hover:bg-blue-500' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-google-play" viewBox="0 0 16 16">
                <path
                    d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055zM1 13.396V2.603L6.846 8zM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27" />
            </svg>
            Marketplace
        </a>
        <a href="/portofolio"
            class="px-5 py-2 rounded-lg font-semibold shadow flex items-center gap-2 transition
                {{ request()->is('portofolio') ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white animate-bounce shadow-2xl scale-105 border-b-4 border-white' : 'bg-gradient-to-r from-purple-500 to-pink-500 text-white hover:bg-blue-500' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                <path d="M16 3v4M8 3v4M2 13h20"></path>
            </svg>
            Portofolio
        </a>
    </div>
    <a href="/login"
        class="text-blue-700 font-bold text-lg hover:underline flex items-center gap-2
            {{ request()->is('login') ? 'bg-blue-600 text-white px-6 py-3 rounded-full shadow-xl' : '' }}">
        Login
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M5 12h14"></path>
            <path d="M13 6l6 6-6 6"></path>
        </svg>
    </a>
</header>