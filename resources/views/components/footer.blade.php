<!-- Footer -->
<footer class="bg-footer-bckg text-primary-text pr-8 pl-8">
    <div class="container mx-auto py-6">
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-8">
            <!-- Graha Office & Kontak (col-span-2 on small screens, col-span-3 on large) -->
            <div class="col-span-2 lg:col-span-4 flex flex-col">
                <h3 class="text-2xl font-bold mb-3 text-footer-text">Graha Office</h3>
                <div class="lg:w-1/2 md:w-80 sm:w-120 text-secondary-text-soft">
                    <p>
                        Ruang kerja profesional dengan fasilitas modern dan lokasi strategis di pusat kota.
                        Ideal untuk perusahaan yang mengutamakan kenyamanan dan efisiensi kerja
                    </p>
                </div>
                <div class="flex space-x-4 mt-2 py-4">
                    <a href="tel:+6281234567890" class="bg-footer-icon hover:bg-footer-secondary-icon text-white rounded-full p-3 transition flex items-center justify-center">
                        <!-- Phone SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </a>
                    <a href="mailto:info@example.com" class="bg-footer-icon hover:bg-footer-secondary-icon text-white rounded-full p-3 transition flex items-center justify-center">
                        <!-- Email SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                    <a href="https://maps.google.com" target="_blank" class="bg-footer-icon hover:bg-footer-secondary-icon text-white rounded-full p-3 transition flex items-center justify-center">
                        <!-- Map SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <!-- Navigasi Site Map -->
            <div class="col-span-1 row-start-2 lg:row-start-auto lg:col-span-1">
                <h3 class="text-2xl font-bold mb-3 text-footer-text">Navigasi</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-secondary-text-soft transition">Beranda</a></li>
                    <li><a href="/about" class="hover:text-secondary-text-soft transition">Tentang Kami</a></li>
                    <li><a href="/services" class="hover:text-secondary-text-soft transition">Layanan</a></li>
                    <li><a href="/contact" class="hover:text-secondary-text-soft transition">Kontak</a></li>
                </ul>
            </div>
            <!-- Legal -->
            <div class="col-span-1 row-start-2 lg:row-start-auto lg:col-span-1">
                <h3 class="text-2xl font-bold mb-3 text-footer-text">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="/privacy-policy" class="hover:text-secondary-text-soft transition">Kebijakan Privasi</a></li>
                    <li><a href="/terms" class="hover:text-secondary-text-soft transition">Syarat & Ketentuan</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center text-footer-text font-semibold hover:font-bold mt-10">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
