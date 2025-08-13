@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-banner-header py-32">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3" alt="Office" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative container mx-auto px-8">
        <h1 class="text-4xl text-white md:text-5xl font-bold mb-6">Karir</h1>
        <p class="text-xl text-white max-w-2xl">Bergabunglah dengan tim kami dan kembangkan karir Anda bersama perusahaan yang terus berkembang</p>
    </div>
</section>

<!-- Job Section -->
<section class="py-20 bg-base">
    <div class="container mx-auto px-4">
        <div class="max-w-dvw mx-auto overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-10 px-10">
            <!-- CUSTOMER SERVICE & ADMIN -->
            <div class="p-8 bg-primary-card rounded-xl shadow-xl/20 flex flex-col h-full">
                <div class="mb-12 flex-1">
                    <h3 class="text-xl text-secondary-text text-center font-bold mb-4">CUSTOMER SERVICE & ADMIN</h3>
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Job Description:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Menangani pertanyaan dan keluhan pelanggan secara profesional</li>
                            <li>Menyelesaikan masalah pelanggan dengan cepat</li>
                            <li>Memberikan informasi produk dan layanan</li>
                            <li>Melakukan tugas administratif terkait layanan pelanggan</li>
                        </ul>
                    </div>
                    <!-- Requirements -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Requirements:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Pendidikan minimal SMA/sederajat</li>
                            <li>Komunikatif dan ramah</li>
                            <li>Mampu mengoperasikan komputer & aplikasi Office</li>
                            <li>Pengalaman di bidang terkait menjadi nilai tambah</li>
                        </ul>
                    </div>
                </div>
                <!-- Apply Button -->
                <div class="flex flex-col items-center space-y-8 border-t-2 border-blue pt-4">
                    <p class="text-secondary-text font-semibold text-center">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                    <a href="https://forms.gle/your-google-form-link" target="_blank" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                        Apply Sekarang
                        <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- STAFF GUDANG -->
            <div class="p-8 bg-primary-card rounded-xl shadow-xl/20 flex flex-col h-full">
                <div class="mb-12 flex-1">
                    <h3 class="text-xl text-secondary-text text-center font-bold mb-4">STAFF GUDANG</h3>
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Job Description:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Menerima, menyimpan, dan mengatur barang di gudang</li>
                            <li>Melakukan pengecekan stok secara berkala</li>
                            <li>Mengatur pengiriman barang sesuai permintaan</li>
                            <li>Membuat laporan keluar masuk barang</li>
                        </ul>
                    </div>
                    <!-- Requirements -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Requirements:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Pendidikan minimal SMA/sederajat</li>
                            <li>Teliti dan bertanggung jawab</li>
                            <li>Mampu bekerja secara tim maupun individu</li>
                            <li>Pengalaman di bidang pergudangan menjadi nilai tambah</li>
                        </ul>
                    </div>
                </div>
                <!-- Apply Button -->
                <div class="flex flex-col items-center space-y-8 border-t-2 border-blue pt-4">
                    <p class="text-secondary-text font-semibold text-center">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                    <a href="https://forms.gle/your-google-form-link" target="_blank" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                        Apply Sekarang
                        <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- MARKETING DIGITAL -->
            <div class="p-8 bg-primary-card rounded-xl shadow-xl/20 flex flex-col h-full">
                <div class="mb-12 flex-1">
                    <h3 class="text-xl text-secondary-text text-center font-bold mb-4">MARKETING DIGITAL</h3>
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Job Description:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Mengelola dan mengembangkan strategi pemasaran digital</li>
                            <li>Membuat konten untuk media sosial dan website</li>
                            <li>Menganalisis performa kampanye digital</li>
                            <li>Berkoordinasi dengan tim untuk meningkatkan brand awareness</li>
                        </ul>
                    </div>
                    <!-- Requirements -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Requirements:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Pendidikan minimal D3/S1 semua jurusan</li>
                            <li>Memahami digital marketing & media sosial</li>
                            <li>Kreatif dan inovatif</li>
                            <li>Pengalaman di bidang digital marketing menjadi nilai tambah</li>
                        </ul>
                    </div>
                </div>
                <!-- Apply Button -->
                <div class="flex flex-col items-center space-y-8 border-t-2 border-blue pt-4">
                    <p class="text-secondary-text font-semibold text-center">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                    <a href="https://forms.gle/your-google-form-link" target="_blank" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                        Apply Sekarang
                        <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- ACCOUNTING -->
            <div class="p-8 bg-primary-card rounded-xl shadow-xl/20 flex flex-col h-full">
                <div class="mb-12 flex-1">
                    <h3 class="text-xl text-secondary-text text-center font-bold mb-4">ACCOUNTING</h3>
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Job Description:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Mengelola pembukuan dan laporan keuangan perusahaan</li>
                            <li>Melakukan rekonsiliasi bank dan kas</li>
                            <li>Menyusun laporan pajak bulanan dan tahunan</li>
                            <li>Memastikan kepatuhan terhadap peraturan akuntansi</li>
                        </ul>
                    </div>
                    <!-- Requirements -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Requirements:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Pendidikan minimal D3/S1 Akuntansi</li>
                            <li>Teliti, jujur, dan bertanggung jawab</li>
                            <li>Pengalaman minimal 1 tahun di bidang akuntansi</li>
                            <li>Mampu mengoperasikan software akuntansi</li>
                        </ul>
                    </div>
                </div>
                <!-- Apply Button -->
                <div class="flex flex-col items-center space-y-8 border-t-2 border-blue pt-4">
                    <p class="text-secondary-text font-semibold text-center">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                    <a href="https://forms.gle/your-google-form-link" target="_blank" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                        Apply Sekarang
                        <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- DRIVER -->
            <div class="p-8 bg-primary-card rounded-xl shadow-xl/20 flex flex-col h-full">
                <div class="mb-12 flex-1">
                    <h3 class="text-xl text-secondary-text text-center font-bold mb-4">DRIVER</h3>
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Job Description:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Mengantarkan barang ke tujuan dengan aman dan tepat waktu</li>
                            <li>Memastikan kendaraan dalam kondisi baik</li>
                            <li>Membantu proses bongkar muat barang</li>
                            <li>Mematuhi peraturan lalu lintas</li>
                        </ul>
                    </div>
                    <!-- Requirements -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Requirements:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Pendidikan minimal SMA/sederajat</li>
                            <li>Memiliki SIM A/B aktif</li>
                            <li>Berpengalaman sebagai driver</li>
                            <li>Jujur, disiplin, dan bertanggung jawab</li>
                        </ul>
                    </div>
                </div>
                <!-- Apply Button -->
                <div class="flex flex-col items-center space-y-8 border-t-2 border-blue pt-4">
                    <p class="text-secondary-text font-semibold text-center">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                    <a href="https://forms.gle/your-google-form-link" target="_blank" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                        Apply Sekarang
                        <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- STAFF IT -->
            <div class="p-8 bg-primary-card rounded-xl shadow-xl/20 flex flex-col h-full">
                <div class="mb-12 flex-1">
                    <h3 class="text-xl text-secondary-text text-center font-bold mb-4">STAFF IT</h3>
                    <!-- Job Description -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Job Description:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Memelihara dan mengembangkan sistem IT perusahaan</li>
                            <li>Menangani troubleshooting hardware & software</li>
                            <li>Mengelola jaringan komputer dan keamanan data</li>
                            <li>Membantu implementasi aplikasi baru</li>
                        </ul>
                    </div>
                    <!-- Requirements -->
                    <div class="mb-8">
                        <h4 class="font-semibold text-primary-text mb-3">Requirements:</h4>
                        <ul class="list-disc list-inside space-y-2 text-primary-text ml-4">
                            <li>Pendidikan minimal D3/S1 Teknik Informatika/Sistem Informasi</li>
                            <li>Memahami jaringan komputer & troubleshooting</li>
                            <li>Pengalaman di bidang IT menjadi nilai tambah</li>
                            <li>Mampu bekerja secara tim</li>
                        </ul>
                    </div>
                </div>
                <!-- Apply Button -->
                <div class="flex flex-col items-center space-y-8 border-t-2 border-blue pt-4">
                    <p class="text-secondary-text font-semibold text-center">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                    <a href="https://forms.gle/your-google-form-link" target="_blank" class="inline-flex items-center px-8 py-3 text-base font-semibold text-primary-text bg-blue rounded-lg hover:bg-steel-blue transition duration-300">
                        Apply Sekarang
                        <svg class="w-5 h-5 ml-2 opacity-0 translate-x-8 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/job.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/job.js') }}"></script>
@endpush