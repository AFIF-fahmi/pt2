@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-banner-header text-primary-text py-32">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3" alt="Office" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative container mx-auto px-4 text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Layanan Kami</h1>
        <p class="text-xl max-w-2xl">Solusi lengkap untuk kebutuhan kantor dan legalitas bisnis Anda dengan layanan profesional dan lokasi strategis</p>
    </div>
</section>

<!-- Quick Navigation -->
<nav class="bg-nav-layanan sticky top-16 shadow-md z-80">
    <div class="container mx-auto px-4">
        <ul class="flex overflow-x-auto space-x-6 py-4 text-sm md:text-base" x-data="{ activeSection: window.location.hash }">
            <li>
                <a href="#virtual-office"
                    class="whitespace-nowrap text-primary-text hover:text-secondary-text transition"
                    :class="{ 'text-dropdown font-semibold': activeSection === '#virtual-office' }">
                    Virtual Office
                </a>
            </li>
            <li>
                <a href="#private-office"
                    class="whitespace-nowrap text-primary-text hover:text-secondary-text transition"
                    :class="{ 'text-red  font-semibold': activeSection === '#private-office' }">
                    Private Office
                </a>
            </li>
            <li>
                <a href="#shared-office"
                    class="whitespace-nowrap text-primary-text hover:text-secondary-text transition"
                    :class="{ 'text-red font-semibold': activeSection === '#shared-office' }">
                    Shared Office
                </a>
            </li>
            <li>
                <a href="#pembuatan-pt-cv"
                    class="whitespace-nowrap text-primary-text hover:text-secondary-text transition"
                    :class="{ 'text-red font-semibold': activeSection === '#pembuatan-pt-cv' }">
                    Pembuatan PT & CV
                </a>
            </li>
            <li>
                <a href="#paket-hemat"
                    class="whitespace-nowrap text-primary-text hover:text-secondary-text transition"
                    :class="{ 'text-red lay font-semibold': activeSection === '#paket-hemat' }">
                    Paket Hemat
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Virtual Office Section -->
<section id="virtual-office" class="py-20 bg-primary-bckg">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div class="flex items-center mb-6">
                        <span class="inline-block bg-secondary-text text-white rounded-full px-5 py-1 text-lg font-bold mr-3">1</span>
                        <h2 class="text-3xl font-bold text-secondary-text flex items-center m-0">Virtual Office</h2>
                    </div>
                    <p class="text-primary-text mb-6">Solusi kantor profesional dengan biaya hemat. Dapatkan alamat bisnis prestisius di pusat kota untuk meningkatkan citra perusahaan Anda.</p>

                    <div class="bg-primary-card rounded-lg p-6 shadow-lg mb-6">
                        <h3 class="text-xl font-semibold text-secondary-text mb-4">Mulai Dari IDR 400rb/bln</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-semibold text-secondary-text mb-2">Layanan Unggulan:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Alamat Bisnis Prestisius di Pusat Kota</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Penanganan Surat & Paket dengan Notifikasi Real-time</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Resepsionis Profesional untuk Menerima Tamu</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-secondary-text mb-2">Fasilitas Tambahan:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Akses Meeting Room 2 Jam/Bulan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Free WiFi & Fasilitas Pantry</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Gratis Konsultasi Bisnis</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">

                        <a href="{{ url('/kontak') }}" class="group inline-block bg-blue text-primary-text px-8 py-3 rounded-lg hover:bg-steel-blue transition">
                            Hubungi Kami
                            <span><i class="fa-solid fa-phone translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                        <a href="#" class="group inline-block bg-ivory text-secondary-text px-8 py-3 rounded-lg hover:bg-[#e7ecf0] transition border-2 border-blue"> 
                            Lihat Price List
                            <span><i class="fa-solid fa-coins translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="order-1 md:order-2 translate-y-7">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3" alt="Virtual Office" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Private Office Section -->
<section id="private-office" class="py-20 bg-secondary-bckg">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="translate-y-7">
                    <img src="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-4.0.3" alt="Private Office" class="rounded-lg shadow-lg w-full">
                </div>
                <div>
                    <div class="flex items-center mb-6 justify-between">
                        <h2 class="text-secondary-text-alt text-3xl font-bold flex items-center m-0">Private Office</h2>
                        <span class="inline-block bg-secondary-text-alt text-white rounded-full px-5 py-1 text-lg font-bold ml-3">2</span>
                    </div>
                    <p class="text-primary-text mb-6">Ruangan kantor private dengan lingkungan kerja yang nyaman dan profesional. Ideal untuk tim yang membutuhkan privasi dan fokus maksimal.</p>

                    <div class="bg-primary-card rounded-lg p-6 shadow-lg mb-6">
                        <h3 class="text-xl font-semibold text-secondary-text-alt mb-4">Mulai dari IDR 4jt/bln</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-semibold text-secondary-text-alt mb-2">Fasilitas Utama:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Ruangan Private yang Nyaman</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Akses 24/7 dengan Keamanan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Furnitur Lengkap (Meja, Kursi Ergonomis)</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-primary-text-800 mb-2">Termasuk Fasilitas:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Internet Fiber Optic</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Meeting Room 8 Jam/Bulan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Utility & Cleaning Service</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ url('/kontak') }}" class="group inline-block bg-teal-600 text-white px-8 py-3 rounded-lg hover:bg-teal-700 transition">
                            Hubungi Kami
                            <span><i class="fa-solid fa-phone translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                        <a href="#" class="group inline-block bg-white text-teal-600 px-8 py-3 rounded-lg hover:bg-primary-card transition border-2 border-teal-600">
                            Lihat Price List
                            <span><i class="fa-solid fa-coins translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shared Office Section -->
<section id="shared-office" class="py-20 bg-primary-bckg">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div class="flex items-center mb-6">
                        <span class="inline-block bg-secondary-text text-white rounded-full px-5 py-1 text-lg font-bold mr-3">3</span>
                        <h2 class="text-3xl font-bold text-secondary-text flex items-center m-0">Shared Office</h2>
                    </div>
                    <p class="text-primary-text mb-6">Solusi ekonomis untuk startup dan freelancer dengan full akses ke fasilitas kantor dan komunitas bisnis yang dinamis.</p>

                    <div class="bg-primary-card rounded-lg p-6 shadow-lg mb-6">
                        <h3 class="text-xl font-semibold text-secondary-text mb-4">Mulai dari IDR 1jt/bln</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-semibold text-secondary-text mb-2">Yang Anda Dapatkan:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Workspace Fleksibel dengan Hot Desk</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Akses ke Meeting Room 4 Jam/Bulan</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">High Speed Internet & Printing</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-secondary-text mb-2">Benefit Tambahan:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Akses ke Networking Events</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Pantry & Lounge Area</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Business Locker (Opsional)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ url('/kontak') }}" class="group inline-block bg-blue text-primary-text px-8 py-3 rounded-lg hover:bg-steel-blue transition">
                            Hubungi Kami
                            <span><i class="fa-solid fa-phone translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                        <a href="#" class="group inline-block bg-ivory text-secondary-text px-8 py-3 rounded-lg hover:bg-[#e7ecf0] transition border-2 border-blue">
                            Lihat Price List
                            <span><i class="fa-solid fa-coins translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="order-1 md:order-2 translate-y-7">
                    <img src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-4.0.3" alt="Shared Office" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pembuatan PT & CV Section -->
<section id="pembuatan-pt-cv" class="py-20 bg-secondary-bckg">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="translate-y-7">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3" alt="Pembuatan PT CV" class="rounded-lg shadow-lg w-full">
                </div>
                <div>
                    <div class="flex items-center mb-6 justify-between">
                        <h2 class="text-3xl text-secondary-text-alt font-bold flex items-center m-0">Pembuatan PT & CV</h2>
                        <span class="inline-block bg-secondary-text-alt text-white rounded-full px-5 py-1 text-lg font-bold ml-3">4</span>
                    </div>
                    <p class="text-primary-text mb-6">Layanan pendirian perusahaan lengkap dengan pendampingan profesional. Proses cepat dan legal untuk memulai bisnis Anda.</p>

                    <div class="bg-primary-card rounded-lg p-6 shadow-lg mb-6">
                        <h3 class="text-xl font-semibold text-secondary-text-alt mb-4">Mulai dari IDR 3,5jt</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-semibold text-secondary-text-alt mb-2">Layanan Pendirian:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Pembuatan Akta Pendirian oleh Notaris</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Pengurusan NIB & Izin Usaha</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">NPWP Badan & SKT Pajak</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-secondary-text-alt mb-2">Keunggulan:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Konsultasi Gratis</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Proses Cepat (7-14 hari kerja)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Pendampingan Penuh</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ url('/kontak') }}" class="group inline-block bg-teal-600 text-white px-8 py-3 rounded-lg hover:bg-teal-700 transition">
                            Hubungi Kami
                            <span><i class="fa-solid fa-phone translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                        <a href="#" class="group inline-block bg-white text-teal-600 px-8 py-3 rounded-lg hover:bg-primary-card transition border-2 border-teal-600">
                            Lihat Price List
                            <span><i class="fa-solid fa-coins translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Paket Hemat Section -->
<section id="paket-hemat" class="py-20 bg-primary-bckg">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div class="flex items-center mb-6">
                        <span class="inline-block bg-secondary-text text-white rounded-full px-5 py-1 text-lg font-bold mr-3">5</span>
                        <h2 class="text-3xl font-bold text-secondary-text flex items-center m-0">Paket Hemat</h2>
                    </div>
                    <p class="text-primary-text mb-6">Kombinasi lengkap Virtual Office dan Pendirian PT/CV dengan harga spesial. Hemat hingga 30% dengan paket bundling.</p>

                    <div class="bg-primary-card rounded-lg p-6 shadow-lg mb-6">
                        <h3 class="text-xl font-semibold text-secondary-text mb-4">Mulai dari IDR 7,5jt</h3>
                        <div class="space-y-6">
                            <div>
                                <h4 class="font-semibold text-secondary-text mb-2">Paket Termasuk:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Pendirian PT/CV Lengkap</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Virtual Office 1 Tahun</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Meeting Room 4 Jam/Bulan</span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h4 class="font-semibold text-secondary-text mb-2">Bonus Spesial:</h4>
                                <ul class="space-y-3">
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Gratis Konsultasi Pajak</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Akses Business Lounge</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg class="w-5 h-5 text-teal-500 mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-primary-text">Hemat 30% dari Harga Normal</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <a href="{{ url('/kontak') }}" class="group inline-block bg-blue text-primary-text px-8 py-3 rounded-lg hover:bg-steel-blue transition">
                            Hubungi Kami
                            <span><i class="fa-solid fa-phone translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                        <a href="#" class="group inline-block bg-ivory text-secondary-text px-8 py-3 rounded-lg hover:bg-[#e7ecf0] transition border-2 border-blue">
                            Lihat Price List
                            <span><i class="fa-solid fa-coins translate-x-6 opacity-0 transition duration-300 group-hover:opacity-100 group-hover:translate-x-2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="order-1 md:order-2 translate-y-7">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3" alt="Paket Hemat" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section id="CTA" class="py-20 bg-blue">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-primary-text mb-8">Siap Memulai?</h2>
        <p class="text-xl text-[#e7ecf0] mb-8 max-w-2xl mx-auto">
            Hubungi kami untuk konsultasi gratis dan penawaran terbaik sesuai kebutuhan bisnis Anda
        </p>
        <a href="{{ url('/kontak') }}" class="inline-block bg-ivory text-secondary-text px-8 py-3 rounded-lg hover:bg-[#e7ecf0] transition">
            Hubungi Kami Sekarang
        </a>
    </div>
</section>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const section = @json($section);
        if (section) {
            const target = document.getElementById(section);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    });
</script>

@push('scripts')
<script src="{{ asset('js/layanan.js') }}"></script>
@endpush