@extends('layouts.app')

@section('content')

<!-- Section Banner -->
<section class="relative h-screen flex items-center">
    <div class="absolute inset-0">
        <img
            src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-18-scaled-1.jpg"
            alt="Modern Office Building"
            class="h-full w-full object-cover"
        />
        <!-- Dark overlay for better text visibility -->
        <div class="absolute inset-0 bg-blue-950/60"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl">
            <h1 class="text-4xl font-bold text-white sm:text-5xl">
                GRAHA
                <span class="text-beranda-title">OFFICE</span>
            </h1>

            <p class="mt-4 text-lg text-pretty text-white sm:text-xl">
                Alamat bisnis prestisius, bergengsi dan sangat strategis di tengah kota. 
                Dapat digunakan untuk domisili resmi perusahaan sehingga lebih Profesional.
            </p>

            <div class="mt-8 flex gap-4 sm:mt-8">
                <a href="{{ url('/kontak') }}" 
                class="inline-block btn-1">
                    Hubungi Kami
                </a>
                
                <a href="#layanan-beranda" class="inline-block btn-1">
                    Layanan Kami
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Section Service Cards -->
<section id="layanan-beranda" class="py-12 bg-primary-bckg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center text-primary-text sm:text-4xl mb-16">
            Layanan Kami
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 max-w-[1400px] mx-auto">
            <!-- Virtual Office Card -->
            <div class="group bg-primary-card relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="aspect-w-16 aspect-h-12 relative overflow-hidden">
                    <div class="h-56 bg-gradient-to-r from-blue to-blue-light">
                        <img
                            src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3"
                            alt="Virtual Office"
                            class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110 opacity-75"
                        />
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-card-title mb-2">Virtual Office</h3>
                    <p class="text-secondary-text font-semibold mb-3">
                        Mulai Dari IDR 400rb/bln
                    </p>
                    <p class="text-sm text-primary-text line-clamp-3">
                        Alamat bisnis prestisius di pusat kota dengan layanan surat menyurat, resepsionis profesional, dan notifikasi dokumen via email/WA
                    </p>
                </div>
                <a href="{{ url('/layanan/virtual-office') }}" class="absolute inset-0 aria-hidden"></a>
            </div>

            <!-- Private Office Card -->
            <div class="group bg-primary-card relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="aspect-w-16 aspect-h-12 relative overflow-hidden">
                    <div class="h-56 bg-gradient-to-r from-steel-blue to-blue">
                        <img
                            src="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-4.0.3"
                            alt="Private Office"
                            class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110 opacity-75"
                        />
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-card-title mb-2">Private Office</h3>
                    <p class="text-secondary-text font-semibold mb-3">
                        Mulai dari IDR 4jt/bln
                    </p>
                    <p class="text-sm text-primary-text line-clamp-3">
                        Ruang kantor private dengan view kota, fasilitas lengkap termasuk meja-kursi, internet cepat, ruang meeting, dan pantry
                    </p>
                </div>
                <a href="{{ url('/layanan/private-office') }}" class="absolute inset-0 aria-hidden"></a>
            </div>

            <!-- Shared Office Card -->
            <div class="group bg-primary-card relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="aspect-w-16 aspect-h-12 relative overflow-hidden">
                    <div class="h-56 bg-gradient-to-r from-blue-light to-blue-soft">
                        <img
                            src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-4.0.3"
                            alt="Shared Office"
                            class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110 opacity-75"
                        />
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-card-title mb-2">Shared Office</h3>
                    <p class="text-secondary-text font-semibold mb-3">
                        Mulai dari IDR 1jt/bln
                    </p>
                    <p class="text-sm text-primary-text line-clamp-3">
                        Solusi hemat dengan workstation bersama, akses internet cepat, ruang meeting, dan networking dengan komunitas bisnis
                    </p>
                </div>
                <a href="{{ url('/layanan/shared-office') }}" class="absolute inset-0 aria-hidden"></a>
            </div>

            <!-- Jasa Pembuatan PT CV Card -->
            <div class="group bg-primary-card relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="aspect-w-16 aspect-h-12 relative overflow-hidden">
                    <div class="h-56 bg-gradient-to-r from-steel-blue to-blue">
                        <img
                            src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3"
                            alt="Jasa Pembuatan PT CV"
                            class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110 opacity-75"
                        />
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-card-title mb-2">Pembuatan PT & CV</h3>
                    <p class="text-secondary-text font-semibold mb-3">
                        Mulai dari IDR 3,5jt
                    </p>
                    <p class="text-sm text-primary-text line-clamp-3">
                        Jasa pendirian perusahaan lengkap dengan pendampingan, termasuk pembuatan akta, NPWP, NIB, hingga rekening perusahaan
                    </p>
                </div>
                <a href="{{ url('/layanan/pembuatan-pt-cv') }}" class="absolute inset-0 aria-hidden"></a>
            </div>

            <!-- Paket Hemat Card -->
            <div class="group bg-primary-card relative overflow-hidden rounded-xl shadow-lg transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="aspect-w-16 aspect-h-12 relative overflow-hidden">
                    <div class="h-56 bg-gradient-to-r from-blue to-blue-light">
                        <img
                            src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3"
                            alt="Paket Hemat"
                            class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110 opacity-75"
                        />
                    </div>
                </div>
                <div class="p-8">
                    <h3 class="text-xl font-bold text-card-title mb-2">Paket Lengkap</h3>
                    <p class="text-secondary-text font-semibold mb-3">
                        Mulai dari IDR 7,5jt
                    </p>
                    <p class="text-sm text-primary-text line-clamp-3">
                        Paket komplit pembuatan PT/CV dan Virtual Office 1 tahun, hemat biaya dengan fasilitas lengkap untuk memulai bisnis
                    </p>
                </div>
                <a href="{{ url('/layanan/paket-hemat') }}" class="absolute inset-0 aria-hidden"></a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-8 bg-primary-bckg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-primary-text sm:text-4xl mb-4">
                Mengapa Memilih Kami?
            </h2>
            <p class="text-lg text-secondary-text">
                Solusi lengkap untuk kebutuhan kantor dan legalitas bisnis Anda dengan layanan profesional dan lokasi strategis
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- Feature 1 -->
            <div class="bg-primary-wcu rounded-xl p-8 hover:shadow-lg hover:scale-105 transition duration-300 group">
                <div class="bg-icon-wcu w-14 h-14 rounded-lg flex items-center justify-center mb-6 group-hover:scale-115 transition duration-300">
                    <svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary-text mb-3">Lokasi Strategis</h3>
                <p class="text-primary-text">Berada di pusat kota dengan akses mudah ke berbagai fasilitas penting dan transportasi publik</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-primary-wcu rounded-xl p-8 hover:shadow-lg hover:scale-105 transition duration-300 group">
                <div class="w-14 bg-icon-wcu h-14 rounded-lg flex items-center justify-center mb-6 group-hover:scale-115 transition duration-300">
                    <svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary-text mb-3">Pelayanan Professional</h3>
                <p class="text-primary-text">Tim kami siap membantu dengan pelayanan yang ramah, cepat, dan profesional</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-primary-wcu rounded-xl p-8 hover:shadow-lg hover:scale-105 transition duration-300 group">
                <div class="w-14 bg-icon-wcu h-14 rounded-lg flex items-center justify-center mb-6 group-hover:scale-115 transition duration-300">
                    <svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary-text mb-3">Proses Cepat</h3>
                <p class="text-primary-text">Proses administrasi yang cepat dan efisien untuk menghemat waktu Anda</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-primary-wcu rounded-xl p-8 hover:shadow-lg hover:scale-105 transition duration-300 group">
                <div class="w-14 bg-icon-wcu h-14 rounded-lg flex items-center justify-center mb-6 group-hover:scale-115 transition duration-300">
                    <svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary-text mb-3">Harga Bersaing</h3>
                <p class="text-primary-text">Penawaran harga yang kompetitif dengan fasilitas dan layanan terbaik</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-primary-wcu rounded-xl p-8 hover:shadow-lg hover:scale-105 transition duration-300 group">
                <div class="w-14 bg-icon-wcu h-14 rounded-lg flex items-center justify-center mb-6 group-hover:scale-115 transition duration-300">
                    <svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary-text mb-3">Fasilitas Lengkap</h3>
                <p class="text-primary-text">Dilengkapi berbagai fasilitas modern untuk menunjang aktivitas bisnis Anda</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-primary-wcu rounded-xl p-8 hover:shadow-lg hover:scale-105 transition duration-300 group">
                <div class="w-14 bg-icon-wcu h-14 rounded-lg flex items-center justify-center mb-6 group-hover:scale-115 transition duration-300">
                    <svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-secondary-text mb-3">Keamanan Terjamin</h3>
                <p class="text-primary-text">Sistem keamanan 24 jam dan perlindungan data untuk ketenangan Anda</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="py-8 bg-primary-bckg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl font-bold text-primary-text sm:text-4xl mb-4">
                Berita Terbaru
            </h2>
            <p class="text-lg text-secondary-text">
                Tetap update dengan informasi terbaru seputar bisnis dan layanan kami
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            <!-- News Card 1 -->
            <article class="bg-primary-news rounded-xl overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c" alt="Office" class="w-full h-48 object-cover transition-all duration-300 group-hover:scale-110 opacity-75"/>
                    <div class="absolute top-4 left-4 bg-blue text-primary-text text-sm font-semibold px-3 py-1 rounded-full">
                        Bisnis
                    </div>
                </div>
                <div class="p-6">
                    <time datetime="2025-07-03" class="block text-sm text-primary-text mb-2">3 Juli 2025</time>
                    <h3 class="text-xl font-bold text-news-title mb-3">
                        <a href="#" class="hover:text-primary-text transition">Tips Memilih Virtual Office yang Tepat untuk Startup</a>
                    </h3>
                    <p class="text-primary-text mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                    </p>
                    <a href="#" class="inline-flex items-center text-secondary-text hover:text-steel-blue font-semibold">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>

            <!-- News Card 2 -->
            <article class="bg-primary-news rounded-xl overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" alt="Office" class="w-full h-48 object-cover transition-all duration-300 group-hover:scale-110 opacity-75"/>
                    <div class="absolute top-4 left-4 bg-blue text-primary-text text-sm font-semibold px-3 py-1 rounded-full">
                        Panduan
                    </div>
                </div>
                <div class="p-6">
                    <time datetime="2025-07-02" class="block text-sm text-primary-text mb-2">2 Juli 2025</time>
                    <h3 class="text-xl font-bold text-news-title mb-3">
                        <a href="#" class="hover:text-primary-text transition">Langkah-langkah Mendirikan PT untuk Pemula</a>
                    </h3>
                    <p class="text-primary-text mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pretium pretium tempor. Ut eget imperdiet neque...
                    </p>
                    <a href="#" class="inline-flex items-center text-secondary-text hover:text-steel-blue font-semibold">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
            

            <!-- News Card 3 -->
            <article class="bg-primary-news rounded-xl overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786" alt="Office" class="w-full h-48 object-cover transition-all duration-300 group-hover:scale-110 opacity-75"/>
                    <div class="absolute top-4 left-4 bg-blue text-primary-text text-sm font-semibold px-3 py-1 rounded-full">
                        Tips
                    </div>
                </div>
                <div class="p-6">
                    <time datetime="2025-07-01" class="block text-sm text-primary-text mb-2">1 Juli 2025</time>
                    <h3 class="text-xl font-bold text-news-title mb-3">
                        <a href="#" class="hover:text-primary-text transition">5 Keuntungan Menggunakan Shared Office Space</a>
                    </h3>
                    <p class="text-primary-text mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempus placerat fringilla. Duis a elit et dolor...
                    </p>
                    <a href="#" class="inline-flex items-center text-secondary-text hover:text-steel-blue font-semibold">
                        Baca Selengkapnya
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- View All News Button -->
        <div class="group text-center mt-12 transition hover:scale-105">
            <a href="{{ url('/blog') }}" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                Lihat Semua Berita
                <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

@endsection