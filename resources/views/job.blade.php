@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-[#0A1C3F] text-[#F8F8F8] py-32">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3" alt="Office" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative container mx-auto px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Karir</h1>
        <p class="text-xl text-[#F0EFE7] max-w-2xl">Bergabunglah dengan tim kami dan kembangkan karir Anda bersama perusahaan yang terus berkembang</p>
    </div>
</section>

<!-- Job Section -->
<section class="py-20 bg-[#F5F5F5]">
    <div class="container mx-auto px-4">
        <div class="max-w-dvw mx-auto bg-[#F8F8F8] rounded-xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-8">
                    <!-- Company Introduction -->
                    <div class="mb-12">
                        <h2 class="text-2xl font-bold text-[#0A1C3F] mb-4">GRAHA OFFICE</h2>
                        <p class="text-[#1A2F4B] mb-4">GRAHA OFFICE (PT Graha Pelita Nusantara Indonesia) adalah provider / penyedia kantor bersama yang telah berdiri lebih dari 10 tahun dalam menyediakan berbagai layanan terutama virtual office, coworking space, sewa ruang kantor, manajemen properti, jasa pengurusan legalitas dan pendirian perusahaan.</p>
                    </div>

                    <!-- Job Position -->
                    <div class="mb-12">
                        <h3 class="text-xl font-bold text-[#0A1C3F] mb-4">CUSTOMER SERVICE & ADMIN</h3>

                        <!-- Job Description -->
                        <div class="mb-8">
                            <h4 class="font-semibold text-[#1A2F4B] mb-3">Job Description:</h4>
                            <ul class="list-disc list-inside space-y-2 text-[#1A2F4B] ml-4">
                                <li>Menangani pertanyaan pelanggan melalui telepon, email, atau media sosial dengan sopan dan profesional</li>
                                <li>Menyelesaikan masalah pelanggan dengan cepat dan efisien</li>
                                <li>Memberikan informasi produk, layanan, dan kebijakan perusahaan kepada pelanggan</li>
                                <li>Membangun hubungan yang baik dengan pelanggan dan meningkatkan kepuasan pelanggan</li>
                                <li>Melakukan tugas administratif terkait layanan pelanggan</li>
                                <li>Memberikan umpan balik dan saran kepada manajemen untuk perbaikan layanan pelanggan</li>
                            </ul>
                        </div>

                        <!-- Requirements -->
                        <div class="mb-8">
                            <h4 class="font-semibold text-[#1A2F4B] mb-3">Requirements:</h4>
                            <ul class="list-disc list-inside space-y-2 text-[#1A2F4B] ml-4">
                                <li>Pendidikan minimal SMA atau setara</li>
                                <li>Kemampuan komunikasi yang baik dalam berinteraksi dengan pelanggan (baik lisan maupun tulisan)</li>
                                <li>Ramah, sopan, berpenampilan rapi dan profesional</li>
                                <li>Mampu mengoperasikan komputer dan aplikasi Office</li>
                                <li>Pengalaman kerja sebagai petugas layanan pelanggan, resepsionis, sekretaris, atau posisi serupa akan menjadi nilai tambah</li>
                                <li>Pelayanan pelanggan yang orientasi pada kepuasan pelanggan</li>
                                <li>Kemampuan dalam menyelesaikan masalah</li>
                            </ul>
                        </div>

                        <!-- Apply Button -->
                        <div class="flex flex-col items-center space-y-4">
                            <p class="text-[#1A2F4B]">Untuk submit lamaran bisa melalui Google Form berikut:</p>
                            <a
                                href="https://docs.google.com/forms/d/e/1FAIpQLSeEb3egzFsWN6ifgZCmpujc4mlMwFMXGQRx2T8B-m9UH8CtyA/viewform"
                                id="applyButton"
                                target="_blank"
                                class="inline-flex items-center bg-[#4C7C9C] text-[#F8F8F8] px-8 py-3 rounded-lg hover:bg-[#3A5C7E] transition-colors focus:outline-none focus:ring-2 focus:ring-[#4C7C9C] focus:ring-offset-2">
                                <span class="mr-2">Submit Lamaran</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Company Info -->
                    <div class="border-t border-[#AEB3B5] pt-8">
                        <div class="text-center">
                            <h4 class="font-bold text-[#0A1C3F] mb-4">GRAHA OFFICE</h4>
                            <div class="space-y-2 text-[#1A2F4B]">
                                <p>Graha Pena lantai 15</p>
                                <p>Jl. Ahmad Yani 88, Surabaya</p>
                                <p>Telp: (031) 828 61 55</p>
                                <p>WA: 0811 52 1000</p>
                                <p>Email: info@grahaoffice.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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