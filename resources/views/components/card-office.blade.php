<div class="group transition-all duration-300 hover:-translate-y-3">
    <!-- layer satu gradasi -->
    <div class="p-1 bg-none hover:bg-gradient-to-b from-banner-top to-title-navbar rounded-xl transition-all duration-300">
        <!-- layer dua card base -->
        <div class="bg-primary-card relative overflow-hidden rounded-xl shadow-lg hover:shadow-white/70 transition-all duration-300 h-full flex flex-col">
            <!-- layer tiga foto dan teks -->
            <div class="aspect-w-16 aspect-h-12 scale-105 relative overflow-hidden">
                <div class="h-56">
                    <img
                        src="{{ $img }}"
                        alt="{{ $title }}"
                        class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110 opacity-75" />
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold text-card-title mb-2">{{ $title }}</h3>
                <p class="text-secondary-text font-semibold mb-3">
                    {{ $price }}
                </p>
                <p class="text-sm text-primary-text line-clamp-3">
                    {{ $desc }}
                </p>
            </div>
            <a href="{{ $url }}" class="absolute inset-0 aria-hidden"></a>
        </div>
    </div>
</div>