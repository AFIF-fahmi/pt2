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
            <!-- Filter Kategori -->
            <div class="mb-8 flex flex-wrap gap-2">
                <form method="GET" action="{{ route('blog') }}" class="flex gap-2 flex-wrap">
                    <select name="category" onchange="this.form.submit()" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none">
                        <option value="">Semua Kategori</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($posts as $post)
                <article class="blog-card bg-primary-card rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 visible">
                    <div class="relative">
                        <img src="{{ $post->image_url ?? 'https://images.unsplash.com/photo-1497366216548-37526070297c' }}" alt="{{ $post->title }}" class="w-full h-48 object-cover" />
                        <div class="category-tag absolute top-4 left-4 bg-blue text-primary-text text-sm font-semibold px-3 py-1 rounded-full">
                            {{ $post->category }}
                        </div>
                    </div>
                    <div class="p-6">
                        <time datetime="{{ $post->published_at ?? $post->created_at->format('Y-m-d') }}" class="block text-sm text-primary-text mb-2">
                            {{ \Carbon\Carbon::parse($post->published_at ?? $post->created_at)->format('d F Y') }}
                        </time>
                        <h3 class="text-xl font-bold text-news-title mb-3 blog-title">
                            <a href="#" class="hover:text-primary-text transition">{{ $post->title }}</a>
                        </h3>
                        <p class="text-primary-text mb-4">
                            {{ $post->excerpt }}
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://i.pravatar.cc/40?u={{ urlencode($post->author) }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-primary-text">{{ $post->author }}</span>
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
                @empty
                <div class="col-span-3 text-center text-primary-text py-12">Tidak ada artikel pada kategori ini.</div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $posts->appends(request()->query())->links() }}
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