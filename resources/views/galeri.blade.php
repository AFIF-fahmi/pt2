@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/galeri.css') }}">

<!-- Hero Section -->
<section class="relative bg-banner-header text-primary-text py-32">
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=1200&q=80" alt="Galeri Kantor" class="h-full w-full object-cover opacity-20" />
  </div>
  <div class="relative container mx-auto px-8">
    <h1 class="text-white text-4xl md:text-5xl font-bold mb-6">Galeri</h1>
    <p class="text-xl text-white max-w-2xl">Kumpulan dokumentasi suasana kantor, ruang meeting, dan fasilitas kami.</p>
  </div>
</section>

<!-- Galeri Grid Section -->
<section class="bg-primary-bckg">
  <div class=" px-4 sm:px-6 sm:py-12 lg:px-8 my-[10px]">
    <div class="text-center my-[10px]">

      <h2 class="text-xl font-bold text-primary-text sm:text-3xl">Product Collection</h2>

      <p class="mx-auto mt-4 max-w-md text-secondary-text my-[10px]">
        Berikut adalah koleksi dokumentasi suasana kantor dan fasilitas terbaik yang kami miliki untuk mendukung produktivitas Anda.
      </p>
      <br>
      <br>
    </div>

    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-[10px] mx-[10px]" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));">
      <li>
        <a href="https://images.unsplash.com/photo-1462826303086-329426d1aef5" class="group block overflow-hidden" data-lightbox="galeri" data-index="0">
          <img
            src="https://images.unsplash.com/photo-1462826303086-329426d1aef5"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" 
            />
          <p class="text-xl font-bold text-gray-700">
            Ruangan 1
          </p>
          <p class="mt-2">
            <span class="sr-only"> Regular Price </span>
          </p>
        </a>
      </li>

      <li>
        <a href="https://images.unsplash.com/photo-1549637642-90187f64f420?auto=format&fit=crop&w=1200&q=80" class="group block overflow-hidden" data-lightbox="galeri" data-index="1">
          <img
            src="https://images.unsplash.com/photo-1549637642-90187f64f420?auto=format&fit=crop&w=1200&q=80"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />


          <p class="text-xl font-bold text-gray-700">
            Ruangan 2
          </p>
          <p class="mt-2">
            <span class="sr-only"> Regular Price </span>
          </p>

        </a>
      </li>

      <li>
        <a href="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?auto=format&fit=crop&w=1200&q=80" class="group block overflow-hidden" data-lightbox="galeri" data-index="2">
          <img
            src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?auto=format&fit=crop&w=1200&q=80"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />


          <p class="text-xl font-bold text-gray-700">
            Ruangan 3
          </p>
          <p class="mt-2">
            <span class="sr-only"> Regular Price </span>
          </p>

        </a>
      </li>

      <li>
        <a href="https://images.unsplash.com/photo-1661169399398-dd271af8f651?auto=format&fit=crop&w=1200&q=80" class="group block overflow-hidden" data-lightbox="galeri" data-index="3">
          <img
            src="https://images.unsplash.com/photo-1661169399398-dd271af8f651?auto=format&fit=crop&w=1200&q=80"
            alt=""
            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />

          <p class="text-xl font-bold text-gray-700">
            Ruangan 4
          </p>
          <p class="mt-2">
            <span class="sr-only"> Regular Price </span>
          </p>
        </a>
      </li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</section>

@push('scripts')
<script src="{{ asset('js/galeri.js') }}"></script>
@endpush
@endsection