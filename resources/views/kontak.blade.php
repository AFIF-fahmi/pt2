@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endpush

@section('content')
<!-- Contact Form Section -->
<section class="py-20 layout-secondary">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto card-base p-8">
            <h2 class="text-3xl font-bold text-heading text-center mb-8">Hubungi Kami</h2>

            <form id="contactForm" class="space-y-6" onsubmit="return validateForm(event)">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-navy-light font-semibold mb-2">Nama</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        class="w-full px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan nama anda">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-navy-light font-semibold mb-2">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan email anda">
                </div>

                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-navy-light font-semibold mb-2">No. HP/WA</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        required
                        class="w-full px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan nomor telepon anda">
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-navy-light font-semibold mb-2">Pesan</label>
                    <textarea
                        id="message"
                        name="message"
                        required
                        rows="4"
                        class="w-full px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan pesan anda"></textarea>
                </div>

                <!-- Verification Code Display -->
                <div class="flex items-center gap-4">
                    <div class="bg-sage rounded-lg captcha-code" id="captchaCode"></div>
                    <div class="relative">
                        <button
                            type="button"
                            id="regenerateButton"
                            onclick="generateCaptcha()"
                            class="p-2 text-blue hover:text-steel-blue transition-colors regenerate-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                        </button>
                        <span id="cooldownText" class="cooldown-text"></span>
                    </div>
                </div>

                <!-- Verification Input -->
                <div>
                    <label for="verify" class="block text-navy-light font-semibold mb-2">Kode Verifikasi</label>
                    <input
                        type="text"
                        id="verify"
                        name="verify"
                        required
                        class="w-full px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan kode yang tampil di atas">
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-blue text-ivory py-3 rounded-lg font-semibold hover:bg-steel-blue transition-colors focus:outline-none focus:ring-2 focus:ring-blue focus:ring-offset-2">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-ivory">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <!-- Map Toggle Button -->
            <button
                type="button"
                onclick="toggleMap()"
                class="w-full flex items-center justify-between bg-blue text-ivory px-6 py-4 rounded-t-lg hover:bg-steel-blue transition-colors">
                <span class="font-semibold">Lokasi Kami</span>
                <svg id="mapToggleIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform transition-transform" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>

            <!-- Map Container -->
            <div id="mapContainer" class="hidden bg-white rounded-b-lg shadow-lg overflow-hidden map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6664672365383!2d106.82496347573439!3d-6.175392093785879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1709095862317!5m2!1sen!2sid"
                    width="100%"
                    height="600"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/kontak.js') }}"></script>
@endpush