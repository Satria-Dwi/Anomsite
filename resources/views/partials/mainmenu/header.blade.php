<!-- Navbar -->
<header class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex gap-2 items-center">
        <a href="/" class="text-xl font-bold"><img src="/images/icon.png" class="header-icon"
                alt="">AnomSite</a>
        <h1>|</h1>
        <div>
            <ul class="menu">
                <li>
                    <a href="/" class="{{ $active === 'profile' ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="/portofolio" class="{{ $active === 'portofolio' ? 'active' : '' }}">Portofolio</a>
                </li>
                <li>
                    <a href="/marketplace" class="{{ $active === 'marketplaces' ? 'active' : '' }}">Marketplaces</a>
                </li>
            </ul>
        </div>
        <div class="right-item">
            <ul>
                <li>
                    <a href="/signin" class="flex items-center {{ $active === 'signin' ? 'active' : '' }}">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M9 12h12m0 0l-3 3m3-3l-3-3" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
