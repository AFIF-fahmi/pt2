@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/galeri.css') }}">

<!-- Hero Section -->
<section class="relative bg-banner-header text-primary-text py-32">
  <div class="absolute inset-0">
    <img src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-3-scaled-1.jpg" alt="Galeri Kantor" class="h-full w-full object-cover opacity-20" />
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

    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-10 mx-[10px]">
      <!-- Foto 1 -->
      <li>
        <a href="https://images.unsplash.com/photo-1462826303086-329426d1aef5" class="group block overflow-hidden" data-lightbox="galeri" data-index="0">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src ="https://images.unsplash.com/photo-1462826303086-329426d1aef5"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text ">Ruangan 1</p>
        </a> 
      </li>

      <!-- Foto 2 -->
      <li>
        <a href="https://images.unsplash.com/photo-1549637642-90187f64f420?auto=format&fit=crop&w=1200&q=80" class="group block overflow-hidden" data-lightbox="galeri" data-index="1">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1549637642-90187f64f420?auto=format&fit=crop&w=1200&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 2</p>
        </a>
      </li>

      <!-- Foto 3 -->
      <li>
        <a href="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?auto=format&fit=crop&w=1200&q=80" class="group block overflow-hidden" data-lightbox="galeri" data-index="2">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1431540015161-0bf868a2d407?auto=format&fit=crop&w=1200&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 3</p>
        </a>
      </li>

      <!-- Foto 4 -->
      <li>
        <a href="https://images.unsplash.com/photo-1661169399398-dd271af8f651?auto=format&fit=crop&w=1200&q=80" class="group block overflow-hidden" data-lightbox="galeri" data-index="3">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1661169399398-dd271af8f651?auto=format&fit=crop&w=1200&q=80"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 4</p>
        </a>
      </li>

      <!-- Foto 5 -->
      <li>
        <a href="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-18-scaled-1.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="4">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-18-scaled-1.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 5</p>
        </a>
      </li>

      <!-- Foto 6 -->
      <li>
        <a href="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-2-scaled-1.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="5">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-2-scaled-1.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 6</p>
        </a>
      </li>

      <!-- Foto 7 -->
      <li>
        <a href="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-10-scaled-1.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="6">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-10-scaled-1.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 7</p>
        </a>
      </li>

      <!-- Foto 8 -->
      <li>
        <a href="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-3-scaled-1.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="7">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://grahaoffice.com/wp-content/uploads/2022/11/Ruang-Graha-Office-3-scaled-1.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 8</p>
        </a>
      </li>

      <!-- Foto 9 -->
      <li>
        <a href="https://sewavirtualofficesurabaya.com/wp-content/uploads/2023/04/Private-Office-B2-1024x683-1.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="8">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://sewavirtualofficesurabaya.com/wp-content/uploads/2023/04/Private-Office-B2-1024x683-1.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 9</p>
        </a>
      </li>

      <!-- Foto 10 -->
      <li>
        <a href="https://virtualofficemurah.com/wp-content/uploads/2021/04/Ruang-Graha-Office-6-scaled.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="9">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://virtualofficemurah.com/wp-content/uploads/2021/04/Ruang-Graha-Office-6-scaled.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 10</p>
        </a>
      </li>

      <!-- Foto 11 -->
      <li>
        <a href="https://www.sewa-kantor.net/images1/4914_4.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="10">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://www.sewa-kantor.net/images1/4914_4.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 11</p>
        </a>
      </li>

      <!-- Foto 12 -->
      <li>
        <a href="https://virtualofficemurah.com/wp-content/uploads/2021/05/ruang-meeting-1080x675.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="11">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://virtualofficemurah.com/wp-content/uploads/2021/05/ruang-meeting-1080x675.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 12</p>
        </a>
      </li>

      <!-- Foto 13 -->
      <li>
        <a href="https://office.co.id/wp-content/uploads/2021/08/Private-Office-B1-1-min-scaled.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="12">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://office.co.id/wp-content/uploads/2021/08/Private-Office-B1-1-min-scaled.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 13</p>
        </a>
      </li>

      <!-- Foto 14 -->
      <li>
        <a href="https://grahaoffice.com/wp-content/uploads/2023/01/Ruang-Meeting-Training-3-min-scaled-1.jpg" class="group block overflow-hidden" data-lightbox="galeri" data-index="13">
          <div class="relative rounded-xl overflow-hidden">
            <img
              src="https://grahaoffice.com/wp-content/uploads/2023/01/Ruang-Meeting-Training-3-min-scaled-1.jpg"
              alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[350px] rounded-xl" />
          </div>
          <p class="text-xl font-bold text-secondary-text">Ruangan 14</p>
        </a>
      </li>
    </ul>
  </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/galeri.js') }}"></script>
@endpush
