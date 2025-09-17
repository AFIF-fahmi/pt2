@extends('layouts.app')

@section('content')

<!-- Section Banner Carousel -->
<section class="relative h-screen flex items-center">
    <div class="absolute inset-0">
        <div id="banner-carousel" class="h-full w-full relative">
            <img src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-18-scaled-1.jpg" alt="Modern Office Building" class="banner-slide h-full w-full object-cover absolute inset-0 opacity-0 transition-opacity duration-1000" style="z-index:1;" />
            <img src="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-4.0.3" alt="Private Office" class="banner-slide h-full w-full object-cover absolute inset-0 opacity-0 transition-opacity duration-1000" style="z-index:1;" />
            <img src="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-4.0.3" alt="Shared Office" class="banner-slide h-full w-full object-cover absolute inset-0 opacity-0 transition-opacity duration-1000" style="z-index:1;" />
            <div class="absolute inset-0 bg-blue-950/60" style="z-index:3;"></div>
        </div>
    </div>

    <div class="relative z-10 mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl">
            <h1 class="text-4xl font-bold text-white sm:text-5xl">
                GRAHA
                <span class="text-white">OFFICE</span>
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 max-w-[1400px] mx-auto">
            <x-card-office
                title="Virtual Office"
                price="Mulai Dari IDR 400rb/bln"
                desc="Alamat bisnis prestisius di pusat kota dengan layanan surat menyurat, resepsionis profesional, dan notifikasi dokumen via email/WA"
                img="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3"
                url="{{ url('/layanan/virtual-office') }}" />
            <x-card-office
                title="Private Office"
                price="Mulai dari IDR 4jt/bln"
                desc="Ruang kantor private dengan view kota, fasilitas lengkap termasuk meja-kursi, internet cepat, ruang meeting, dan pantry"
                img="https://images.unsplash.com/photo-1497215842964-222b430dc094?ixlib=rb-4.0.3"
                url="{{ url('/layanan/private-office') }}" />
            <x-card-office
                title="Shared Office"
                price="Mulai dari IDR 1jt/bln"
                desc="Solusi hemat dengan workstation bersama, akses internet cepat, ruang meeting, dan networking dengan komunitas bisnis"
                img="https://images.unsplash.com/photo-1527192491265-7e15c55b1ed2?ixlib=rb-4.0.3"
                url="{{ url('/layanan/shared-office') }}" />
            <x-card-office
                title="Pembuatan PT & CV"
                price="Mulai dari IDR 3,5jt"
                desc="Jasa pendirian perusahaan lengkap dengan pendampingan, termasuk pembuatan akta, NPWP, NIB, hingga rekening perusahaan"
                img="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3"
                url="{{ url('/layanan/pembuatan-pt-cv') }}" />
            <x-card-office
                title="Paket Lengkap"
                price="Mulai dari IDR 7,5jt"
                desc="Paket komplit pembuatan PT/CV dan Virtual Office 1 tahun, hemat biaya dengan fasilitas lengkap untuk memulai bisnis"
                img="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3"
                url="{{ url('/layanan/paket-hemat') }}" />
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <x-whychoose-card
                icon='<svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>'
                title="Lokasi Strategis"
                desc="Berada di pusat kota dengan akses mudah ke berbagai fasilitas penting dan transportasi publik" />
            <x-whychoose-card
                icon='<svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
                title="Pelayanan Profesional"
                desc="Tim kami siap membantu dengan pelayanan yang ramah, cepat, dan profesional" />
            <x-whychoose-card
                icon='<svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'
                title="Proses Cepat"
                desc="Proses administrasi yang cepat dan efisien untuk menghemat waktu Anda" />
            <x-whychoose-card
                icon='<svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'
                title="Harga Bersaing"
                desc="Penawaran harga yang kompetitif dengan fasilitas dan layanan terbaik" />
            <x-whychoose-card
                icon='<svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>'
                title="Fasilitas Lengkap"
                desc="Dilengkapi berbagai fasilitas modern untuk menunjang aktivitas bisnis Anda" />
            <x-whychoose-card
                icon='<svg class="w-8 h-8 text-primary-text" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>'
                title="Keamanan Terjamin"
                desc="Sistem keamanan 24 jam dan perlindungan data untuk ketenangan Anda" />
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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <!-- News Card 1 -->
            <article class="bg-primary-news rounded-xl overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c" alt="Office" class="w-full h-48 object-cover transition-all duration-300 group-hover:scale-110 opacity-75" />
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- News Card 2 -->
            <article class="bg-primary-news rounded-xl overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" alt="Office" class="w-full h-48 object-cover transition-all duration-300 group-hover:scale-110 opacity-75" />
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>


            <!-- News Card 3 -->
            <article class="bg-primary-news rounded-xl overflow-hidden shadow-md group transition-all duration-300 hover:-translate-y-3 hover:shadow-xl">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786" alt="Office" class="w-full h-48 object-cover transition-all duration-300 group-hover:scale-110 opacity-75" />
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- View All News Button -->
        <div class="text-center mt-12">

            <x-button-icon
                text="Lihat Semua Berita"
                url="/blog"
                icon="fa-regular fa-newspaper"
                color="text-white"
                bg="bg-footer-icon" />

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/beranda.js') }}"></script>
@endpush