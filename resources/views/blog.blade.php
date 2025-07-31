@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative bg-banner-header py-32">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3" alt="Office" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative container mx-auto px-8">
        <h1 class="text-4xl md:text-5xl text-white font-bold mb-6">Blog</h1>
        <p class="text-xl text-white max-w-2xl">Temukan artikel menarik dan informasi terbaru seputar bisnis, teknologi, dan lifestyle</p>
    </div>
</section>

<!-- Blog Posts Section -->
<section class="py-20 layout-secondary">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article class="blog-card bg-primary-card rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 visible">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c" alt="Brand Awareness" class="w-full h-48 object-cover" />
                        <div class="category-tag absolute top-4 left-4 bg-blue text-ivory text-sm font-semibold px-3 py-1 rounded-full">
                            Marketing
                        </div>
                    </div>
                    <div class="p-6">
                        <time datetime="2023-12-01" class="block text-sm text-gray mb-2">1 December 2023</time>
                        <h3 class="text-xl font-bold text-news-title mb-3 blog-title">
                            <a href="#" class="hover:text-primary-text transition">5 Tips Meningkatkan Brand Awareness Bisnis</a>
                        </h3>
                        <p class="text-primary-text mb-4">
                            Membangun brand awareness adalah langkah penting dalam mengembangkan bisnis Anda...
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=1" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-primary-text">Dwi Putri</span>
                            </div>
                            <a href="#" class="text-news-read hover:text-primary-text font-semibold flex items-center group">
                                <span class="mr-2">Read More</span>
                                <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 2 -->
                <article class="blog-card bg-primary-card rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 visible">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" alt="Virtual Office" class="w-full h-48 object-cover" />
                        <div class="category-tag absolute top-4 left-4 bg-blue text-ivory text-sm font-semibold px-3 py-1 rounded-full">
                            Business
                        </div>
                    </div>
                    <div class="p-6">
                        <time datetime="2023-11-30" class="block text-sm text-gray mb-2">30 November 2023</time>
                        <h3 class="text-xl font-bold text-news-title mb-3 blog-title">
                            <a href="#" class="hover:text-primary-text transition">5 Alasan Mengapa Pebisnis Harus Menggunakan Virtual Office</a>
                        </h3>
                        <p class="text-primary-text mb-4">
                            Virtual office menjadi solusi praktis bagi pebisnis modern yang menginginkan fleksibilitas...
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=2" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-primary-text">Dwi Putri</span>
                            </div>
                            <a href="#" class="text-news-read hover:text-primary-text font-semibold flex items-center group">
                                <span class="mr-2">Read More</span>
                                <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Blog Post 3 -->
                <article class="blog-card bg-primary-card rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 visible">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt="Happy Team" class="w-full h-48 object-cover" />
                        <div class="category-tag absolute top-4 left-4 bg-blue text-ivory text-sm font-semibold px-3 py-1 rounded-full">
                            Lifestyle
                        </div>
                    </div>
                    <div class="p-6">
                        <time datetime="2023-11-21" class="block text-sm text-gray mb-2">21 November 2023</time>
                        <h3 class="text-xl font-bold text-news-title mb-3 blog-title">
                            <a href="#" class="hover:text-primary-text transition">Keep Happy! 5 Kunci Bahagia Bagi Anak Muda</a>
                        </h3>
                        <p class="text-primary-text mb-4">
                            Menemukan kebahagiaan di tengah kesibukan dan tantangan kehidupan modern...
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?img=3" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-primary-text">Dwi Putri</span>
                            </div>
                            <a href="#" class="text-news-read hover:text-primary-text font-semibold flex items-center group">
                                <span class="mr-2">Read More</span>
                                <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                <nav class="pagination flex items-center gap-2" aria-label="Pagination">
                    <a href="#" class="p-2 rounded-lg text-navy-light hover:bg-sage transition">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <a href="#" class="px-4 py-2 rounded-lg bg-blue text-white">1</a>
                    <a href="#" class="px-4 py-2 rounded-lg text-navy-light hover:bg-sage transition">2</a>
                    <a href="#" class="px-4 py-2 rounded-lg text-navy-light hover:bg-sage transition">3</a>
                    <span class="px-4 py-2 text-gray">...</span>
                    <a href="#" class="px-4 py-2 rounded-lg text-navy-light hover:bg-sage transition">8</a>

                    <a href="#" class="p-2 rounded-lg text-navy-light hover:bg-sage transition">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/blog.js') }}"></script>
@endpush