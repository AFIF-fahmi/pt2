<!-- Top Banner -->
<div class="bg-banner-top transition-all duration-300 z-[999]" id="topBanner">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 ">
    <div class="flex items-center justify-between gap-4 py-2 text-sm">
      <!-- Location - Left -->
      <div>
        <a href="https://maps.app.goo.gl/7yy9CGeusdYc9hNG7" target="_blank" class="flex items-center gap-1.5 text-white hover:text-banner-text-alt transition duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="CurrentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span">Graha Pena lantai 15 Jl. Ahmad Yani 88 Surabaya</span>
        </a>
      </div>

      <!-- Contact Info - Right -->
      <div class="flex items-center gap-4">
        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center gap-1.5 text-white hover:text-banner-text-alt transition duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
          <span>+62 811 521 000</span>
        </a>

        <a href="mailto:info@grahaoffice.com" class="flex items-center gap-1.5 text-white hover:text-banner-text-alt transition duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          <span>info@grahaoffice.com</span>
        </a>
      </div>
    </div>
  </div>
</div>

<header class="bg-primary-heading w-full transition-all duration-300 shadow-lg z-[1000]" id="navbar">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="md:flex md:items-center md:gap-12">
        <a class="block text-2xl font-bold text-title-navbar" href="{{ url('/beranda') }}">
          <span class="sr-only">Home</span>
          <!-- Logo -->
          GRAHA OFFICE
        </a>
      </div>

      <div class="hidden md:flex md:items-center md:gap-12 flex-1 justify-center">
        <nav aria-label="Global">
          <ul class="flex items-center gap-6 text-base">
            <li>
              <a class="text-primary-text transition hover:secondary-text {{ request()->is('beranda') ? 'text-secondary-text font-semibold' : '' }}" href="{{ url('/beranda') }}">
                Beranda
              </a>
            </li>
            <li class="relative" x-data="{ open: false }">
              <button
                @click="open = !open"
                @click.away="open = false"
                class="flex items-center text-primary-text transition hover:text-secondary-text text-base {{ request()->is('layanan*') ? 'text-secondary-text-600 font-semibold' : '' }}">
                <span>Layanan</span>
                <svg class="ml-1 h-4 w-4 text-primary-text hover:text-secondary-text"  fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>

              <div
                x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-1"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-1"
                class="absolute left-0 mt-2 w-72 rounded-lg bg-ivory shadow-xl outline-none z-[1001]"
                x-cloak>
                <div class="py-1 bg-primary-heading">
                  <a href="{{ url('/layanan/virtual-office') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-dropdown hover:text-secondary-text-600 {{ request()->is('layanan/virtual-office') ? 'text-secondary-text-600 font-semibold' : '' }}">
                    Virtual Office
                  </a>
                  <a href="{{ url('/layanan/private-office') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-dropdown hover:text-secondary-text-600 {{ request()->is('layanan/private-office') ? 'text-secondary-text-600 font-semibold' : '' }}">
                    Private Office
                  </a>
                  <a href="{{ url('/layanan/shared-office') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-dropdown hover:text-secondary-text-600 {{ request()->is('layanan/shared-office') ? 'text-secondary-text-600 font-semibold' : '' }}">
                    Shared Office
                  </a>
                  <a href="{{ url('/layanan/pembuatan-pt-cv') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-dropdown hover:text-secondary-text-600 {{ request()->is('layanan/pembuatan-pt-cv') ? 'text-secondary-text-600 font-semibold' : '' }}">
                    Pembuatan PT & CV
                  </a>
                  <a href="{{ url('/layanan/paket-hemat') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-dropdown hover:text-secondary-text-600 {{ request()->is('layanan/paket-hemat') ? 'text-secondary-text-600 font-semibold' : '' }}">
                    Paket Hemat
                  </a>
                </div>
              </div>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('galeri') ? 'text-secondary-text-600 font-semibold' : '' }}" href="{{ url('/galeri') }}">
                Galeri
              </a>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('kontak') ? 'text-secondary-text-600 font-semibold' : '' }}" href="{{ url('/kontak') }}">
                Kontak
              </a>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('job') ? 'text-secondary-text-600 font-semibold' : '' }}" href="{{ url('/job') }}">
                Job
              </a>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('blog') ? 'text-secondary-text-600 font-semibold' : '' }}" href="{{ url('/blog') }}">
                Blog
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Search Section -->
      <div class="relative" x-data="{ searchOpen: false }">
        <button
          @click="searchOpen = !searchOpen"
          class="p-2 text-navy-light transition hover:text-secondary-text-600 focus:outline-none focus:ring-2 focus:ring-blue-600 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-text transition hover:text-secondary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>

        <button id="theme-toggle" type="button" class="text-navy-light dark:text-beige hover:text-secondary-text-600 transition" aria-label="Toggle dark mode">
          <!-- Sun icon -->
          <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
          </svg>
          <!-- Moon icon -->
          <svg id="theme-toggle-dark-icon" class="w-5 h-5 mb-[0.8] text-black hover:text-secondary-text-600 transition duration-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
          </svg>
        </button>

        <!-- Search Form -->
        <div
          x-show="searchOpen"
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95"
          class="absolute right-0 mt-2 w-72 origin-top-right bg-ivory shadow-xl rounded-lg outline-none">
          <form action="{{ url('/search') }}" method="GET" class="bg-banner-top rounded-lg p-4">
            <div class="relative">
              <input
                type="text"
                name="q"
                placeholder="Cari sesuatu..."
                class="text-primary-heading w-full rounded-lg border-gray-light pr-10 pl-4 py-2 text-sm focus:border-blue-600 focus:ring-2 focus:ring-blue-600"
                @click.away="searchOpen = false" />
              <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 text-secondary-text-600-light hover:text-secondary-text-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-text transition hover:text-secondary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Mobile Menu Button -->
       @include('components.mobile-menu')

    </div>
  </div>
</header>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div class="h-16" id="navbarSpacer"></div>

<script src="{{ asset('js/navbar.js') }}"></script>