@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endpush

@section('content')
<!-- Contact Form Section -->
<div class="flex grid lg:grid-cols-2 sm:grid-cols-1 gap-8 m-5">
    <!-- Map Section -->
    <section class="bg-primary-bckg>
        <div class=" container mx-auto px-4">
        <!-- Map Container -->
        <div class="bg-white translate-y-4 card-base shadow-2xl/20 overflow-hidden my-6">
            <div class="font-bold text-3xl items-center justify-between bg-primary-card text-ivory px-6 py-6 rounded-t-lg">
                <p class="text-center text-primary-text">Lokasi Kami</p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3957.295403345756!2d112.7312363!3d-7.3206774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e48893dffefd%3A0x774941139bb587ac!2sGraha%20Office!5e0!3m2!1sid!2sid!4v1753766164015!5m2!1sid!2sid"
                width="100%" height="600"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            z</iframe>
        </div>



    </section>

    <!-- Contact Form Section -->
    <section class="py-4">
        <div class="bg-primary-card rounded-xl max-w-3xl mx-auto p-8 shadow-2xl/20">
            <h2 class="text-3xl font-bold text-primary-text text-center mb-8">Hubungi Kami</h2>

            <form id="contactForm" class="space-y-6" onsubmit="return validateForm(event)">
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-primary-text font-semibold mb-2">Nama</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        class="w-full text-primary-text px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan nama anda">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-primary-text font-semibold mb-2">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        class="w-full text-primary-text px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan email anda">
                </div>

                <!-- Phone Field -->
                <div>
                    <label for="phone" class="block text-primary-text font-semibold mb-2">No. HP/WA</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        required
                        class="w-full text-primary-text px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan nomor telepon anda">
                </div>

                <!-- Message Field -->
                <div>
                    <label for="message" class="block text-primary-text font-semibold mb-2">Pesan</label>
                    <textarea
                        id="message"
                        name="message"
                        required
                        rows="4"
                        class="w-full text-primary-text px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
                        placeholder="Masukkan pesan anda"></textarea>
                </div>

                <!-- Verification Code Display -->
                <div class="flex items-center gap-4">
                    <div class="bg-banner-top text-primary-text pr-2 pl-2 rounded-lg captcha-code" id="captchaCode"></div>
                    <div class="relative">
                        <button
                            type="button"
                            id="regenerateButton"
                            onclick="generateCaptcha()"
                            class="p-2 text-blue hover:text-steel-blue transition-colors regenerate-button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                        </button>
                        <span id="cooldownText" class="cooldown-text text-secondary-text"></span>
                    </div>
                </div>

                <!-- Verification Input -->
                <div>
                    <label for="verify" class="block text-primary-text font-semibold mb-2">Kode Verifikasi</label>
                    <input
                        type="text"
                        id="verify"
                        name="verify"
                        required
                        class="w-full text-primary-text px-4 py-2 border border-gray-light rounded-lg focus:outline-none focus:border-blue focus:ring-1 focus:ring-blue"
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
    </section>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/kontak.js') }}"></script>
@endpush