<!-- Top Banner -->
<div class="bg-banner-top transition-all duration-300 z-[999]" id="topBanner">
  <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 ">
    <div class="flex items-center justify-between gap-4 py-2 text-sm">
      <!-- Location - Left -->
      <div>
        <a href="https://maps.app.goo.gl/7yy9CGeusdYc9hNG7" target="_blank" class="flex items-center gap-1.5 text-beige hover:text-ivory transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          <span>Graha Pena lantai 15 Jl. Ahmad Yani 88 Surabaya</span>
        </a>
      </div>

      <!-- Contact Info - Right -->
      <div class="flex items-center gap-4">
        <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center gap-1.5 text-beige hover:text-ivory transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
          </svg>
          <span>+62 811 521 000</span>
        </a>

        <a href="mailto:info@grahaoffice.com" class="flex items-center gap-1.5 text-beige hover:text-ivory transition">
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
        <a class="block text-2xl font-bold text-teal-600" href="{{ url('/beranda') }}">
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
                class="flex items-center text-primary-text transition hover:text-secondary-text text-base {{ request()->is('layanan*') ? 'text-blue font-semibold' : '' }}">
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
                <div class="py-1 bg-dropdown">
                  <a href="{{ url('/layanan/virtual-office') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-beige hover:text-blue {{ request()->is('layanan/virtual-office') ? 'text-blue font-semibold bg-beige' : '' }}">
                    Virtual Office
                  </a>
                  <a href="{{ url('/layanan/private-office') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-beige hover:text-blue {{ request()->is('layanan/private-office') ? 'text-blue font-semibold bg-beige' : '' }}">
                    Private Office
                  </a>
                  <a href="{{ url('/layanan/shared-office') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-beige hover:text-blue {{ request()->is('layanan/shared-office') ? 'text-blue font-semibold bg-beige' : '' }}">
                    Shared Office
                  </a>
                  <a href="{{ url('/layanan/pembuatan-pt-cv') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-beige hover:text-blue {{ request()->is('layanan/pembuatan-pt-cv') ? 'text-blue font-semibold bg-beige' : '' }}">
                    Pembuatan PT & CV
                  </a>
                  <a href="{{ url('/layanan/paket-hemat') }}" class="block px-4 py-2 text-base text-primary-text hover:bg-beige hover:text-blue {{ request()->is('layanan/paket-hemat') ? 'text-blue font-semibold bg-beige' : '' }}">
                    Paket Hemat
                  </a>
                </div>
              </div>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('galeri') ? 'text-blue font-semibold' : '' }}" href="{{ url('/galeri') }}">
                Galeri
              </a>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('kontak') ? 'text-blue font-semibold' : '' }}" href="{{ url('/kontak') }}">
                Kontak
              </a>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('job') ? 'text-blue font-semibold' : '' }}" href="{{ url('/job') }}">
                Job
              </a>
            </li>
            <li>
              <a class="text-primary-text transition hover:text-secondary-text {{ request()->is('blog') ? 'text-blue font-semibold' : '' }}" href="{{ url('/blog') }}">
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
          class="p-2 text-navy-light transition hover:text-blue focus:outline-none focus:ring-2 focus:ring-blue rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-text transition hover:text-secondary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>

        <button id="theme-toggle" type="button" class="text-navy-light dark:text-beige hover:text-blue transition" aria-label="Toggle dark mode">
          <!-- Sun icon -->
          <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" />
          </svg>
          <!-- Moon icon -->
          <svg id="theme-toggle-dark-icon" class="w-5 h-5 mb-[0.8] text-black hover:text-blue transition duration-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                class="text-primary-heading w-full rounded-lg border-gray-light pr-10 pl-4 py-2 text-sm focus:border-blue focus:ring-2 focus:ring-blue"
                @click.away="searchOpen = false" />
              <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 text-blue-light hover:text-blue">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-text transition hover:text-secondary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="block md:hidden" x-data="{ mobileMenuOpen: false }">
        <button
          class="rounded-lg bg-beige p-2 text-navy-light transition hover:text-blue"
          @click="mobileMenuOpen = !mobileMenuOpen">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <!-- Mobile menu with updated colors -->
        <div
          x-show="mobileMenuOpen"
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95"
          class="md:hidden fixed inset-0 z-[1100] bg-ivory"
          x-cloak>
          <div class="p-4">
            <div class="flex items-center justify-between">
              <a href="{{ url('/beranda') }}" class="text-blue">
                <span class="sr-only">Home</span>
                <svg class="h-8" viewBox="0 0 28 24" fill="currentColor">
                  <path
                    d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z" />
                </svg>
              </a>

              <button
                @click="mobileMenuOpen = false"
                class="rounded-lg p-2 text-navy-light hover:text-blue focus:ring-2 focus:ring-blue">
                <span class="sr-only">Close menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <nav class="mt-8">
              <ul class="space-y-4">
                <li>
                  <a
                    href="{{ url('/beranda') }}"
                    class="block text-base font-medium {{ request()->is('beranda') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Beranda
                  </a>
                </li>
                <li>
                  <div class="space-y-2">
                    <span class="block text-base font-medium text-gray-600">Layanan</span>
                    <ul class="ml-4 space-y-2">
                      <li>
                        <a
                          href="{{ url('/layanan#virtual-office') }}"
                          class="block text-sm {{ request()->is('layanan/virtual-office') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Virtual Office
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#private-office') }}"
                          class="block text-sm {{ request()->is('layanan/private-office') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Private Office
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#shared-office') }}"
                          class="block text-sm {{ request()->is('layanan/shared-office') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Shared Office
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#pembuatan-pt-cv') }}"
                          class="block text-sm {{ request()->is('layanan/pembuatan-pt-cv') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Pembuatan PT & CV
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#paket-hemat') }}"
                          class="block text-sm {{ request()->is('layanan/paket-hemat') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Paket Hemat
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a
                    href="{{ url('/galeri') }}"
                    class="block text-base font-medium {{ request()->is('galeri') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Galeri
                  </a>
                </li>
                <li>
                  <a
                    href="{{ url('/kontak') }}"
                    class="block text-base font-medium {{ request()->is('kontak') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Kontak
                  </a>
                </li>
                <li>
                  <a
                    href="{{ url('/job') }}"
                    class="block text-base font-medium {{ request()->is('job') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Job
                  </a>
                </li>
                <li>
                  <a
                    href="{{ url('/blog') }}"
                    class="block text-base font-medium {{ request()->is('blog') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Blog
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <!-- Mobile menu -->
      <div class="md:hidden" x-show="open" x-transition x-cloak>
        <nav class="fixed inset-0 z-[1100] bg-sage">
          <div class="p-4">
            <div class="flex items-center justify-between">
              <a href="{{ url('/beranda') }}" class="text-blue">
                <span class="sr-only">Home</span>
                <svg class="h-8" viewBox="0 0 28 24" fill="currentColor">
                  <path
                    d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z" />
                </svg>
              </a>

              <button
                @click="mobileMenuOpen = false"
                class="rounded-lg p-2 text-navy-light hover:text-blue focus:ring-2 focus:ring-blue">
                <span class="sr-only">Close menu</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <nav class="mt-8">
              <ul class="space-y-4">
                <li>
                  <a
                    href="{{ url('/beranda') }}"
                    class="block text-base font-medium {{ request()->is('beranda') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Beranda
                  </a>
                </li>
                <li>
                  <div class="space-y-2">
                    <span class="block text-base font-medium text-gray-600">Layanan</span>
                    <ul class="ml-4 space-y-2">
                      <li>
                        <a
                          href="{{ url('/layanan#virtual-office') }}"
                          class="block text-sm {{ request()->is('layanan/virtual-office') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Virtual Office
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#private-office') }}"
                          class="block text-sm {{ request()->is('layanan/private-office') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Private Office
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#shared-office') }}"
                          class="block text-sm {{ request()->is('layanan/shared-office') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Shared Office
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#pembuatan-pt-cv') }}"
                          class="block text-sm {{ request()->is('layanan/pembuatan-pt-cv') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Pembuatan PT & CV
                        </a>
                      </li>
                      <li>
                        <a
                          href="{{ url('/layanan#paket-hemat') }}"
                          class="block text-sm {{ request()->is('layanan/paket-hemat') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                          Paket Hemat
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a
                    href="{{ url('/galeri') }}"
                    class="block text-base font-medium {{ request()->is('galeri') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Galeri
                  </a>
                </li>
                <li>
                  <a
                    href="{{ url('/kontak') }}"
                    class="block text-base font-medium {{ request()->is('kontak') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Kontak
                  </a>
                </li>
                <li>
                  <a
                    href="{{ url('/job') }}"
                    class="block text-base font-medium {{ request()->is('job') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Job
                  </a>
                </li>
                <li>
                  <a
                    href="{{ url('/blog') }}"
                    class="block text-base font-medium {{ request()->is('blog') ? 'text-teal-600 font-bold' : 'text-gray-600 hover:text-gray-900' }}">
                    Blog
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </nav>
      </div>
    </div>
</header>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div class="h-16" id="navbarSpacer"></div>

<script src="{{ asset('js/navbar.js') }}"></script>